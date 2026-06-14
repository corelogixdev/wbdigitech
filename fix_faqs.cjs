const fs = require('fs');
const path = require('path');

const walkSync = (dir, filelist = []) => {
  fs.readdirSync(dir).forEach(file => {
    const dirFile = path.join(dir, file);
    if (fs.statSync(dirFile).isDirectory()) {
      filelist = walkSync(dirFile, filelist);
    } else {
      if (dirFile.endsWith('.blade.php')) {
          filelist.push(dirFile);
      }
    }
  });
  return filelist;
};

const servicesDir = 'd:/corelogix/wbdigitech/resources/views/pages/services';
const files = walkSync(servicesDir);

let updatedFiles = 0;
const cheerio = require('cheerio');

for (const file of files) {
    let content = fs.readFileSync(file, 'utf8');

    // Find any <x-service-content-card title="...faq...">
    // The regex matches <x-service-content-card title="[any text containing faq]"> ... </x-service-content-card>
    const regex = /<x-service-content-card\s+title="([^"]*(?:faq|frequently asked)[^"]*)"\s*>([\s\S]*?)<\/x-service-content-card>/gi;
    
    let match;
    let fileUpdated = false;
    
    // We need to replace async/iteratively, but string.replace with a function is synchronous and easy
    let newContent = content.replace(regex, (fullMatch, title, innerContent) => {
        
        let htmlToParse = `<div id="FAKE_ROOT">${innerContent}</div>`;
        const $ = cheerio.load(htmlToParse, { decodeEntities: false }, false);
        
        let faqs = [];
        let currentFaq = null;
        
        $('#FAKE_ROOT').children().each(function() {
            const tagName = this.tagName ? this.tagName.toLowerCase() : null;
            if (tagName === 'h4' || tagName === 'h3') {
                if (currentFaq) faqs.push(currentFaq);
                currentFaq = { question: $(this).html(), answer: '' };
            } else {
                if (currentFaq) {
                    currentFaq.answer += $.html(this) + '\n';
                }
            }
        });
        if (currentFaq) faqs.push(currentFaq);
        
        if (faqs.length === 0) {
            // No h3/h4 found, just leave it as is
            return fullMatch;
        }
        
        fileUpdated = true;
        
        let outHtml = `\n@php\n$serviceFaqs = [\n`;
        for (const faq of faqs) {
            const q = faq.question.replace(/'/g, "\\'").replace(/\n/g, '').trim();
            const a = faq.answer.replace(/'/g, "\\'").trim();
            if(q) {
                outHtml += `    ['question' => '${q}', 'answer' => '${a}'],\n`;
            }
        }
        outHtml += `];\n@endphp\n`;
        // Use a generic title instead of the specific card title, or pass the title?
        // Let's pass the title if we want, but the accordion component hardcodes "Frequently Asked Questions"
        outHtml += `<x-accordion-faq :faqs="$serviceFaqs" />\n`;
        
        return outHtml;
    });

    if (fileUpdated) {
        fs.writeFileSync(file, newContent, 'utf8');
        updatedFiles++;
        console.log("Fixed FAQs in " + path.basename(file));
    }
}

console.log("Done! Fixed FAQs in " + updatedFiles + " files.");
