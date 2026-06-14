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

const servicesDir = 'd:/corelogix/wbdigitech/resources/views/pages/ai_marketing';
const files = walkSync(servicesDir);

let updatedFiles = 0;

for (const file of files) {
    let content = fs.readFileSync(file, 'utf8');

    const contentColRegex = /<div\s+class="content-col"\s*>([\s\S]*?)<\/div>\s*<\/div>\s*<\/div>\s*@endsection/g;
    let match = contentColRegex.exec(content);

    if (!match) {
        const looseRegex = /<div\s+class="content-col"\s*>([\s\S]*?)(?:<\/div>\s*<\/div>|@endsection)/;
        match = looseRegex.exec(content);
    }

    if (!match) {
        console.log("Could not find content-col in " + file);
        continue;
    }

    const originalContentColHTML = match[1];
    
    const cheerio = require('cheerio');
    
    let htmlToParse = `<div id="FAKE_ROOT">${originalContentColHTML}</div>`;
    const $ = cheerio.load(htmlToParse, { decodeEntities: false }, false);
    
    let newHtml = '';
    let currentCardContent = '';
    let currentCardTitle = '';
    let inFaqSection = false;
    let faqs = [];
    
    // We'll extract FAQs from anywhere if there's a div.faq-section or h2 FAQ
    const faqSectionDiv = $('.faq-section');
    if (faqSectionDiv.length > 0) {
        faqSectionDiv.find('h4, h3').each(function() {
            let answer = '';
            let nextEl = $(this).next();
            while (nextEl.length > 0 && nextEl[0].tagName && !['h4', 'h3'].includes(nextEl[0].tagName.toLowerCase())) {
                answer += $.html(nextEl) + '\n';
                nextEl = nextEl.next();
            }
            faqs.push({ question: $(this).html(), answer: answer });
        });
        faqSectionDiv.remove(); // Remove the faq section so it doesn't get parsed in the main loop
        
        // Remove the preceding h2
        $('h2').each(function() {
            const txt = $(this).text().toLowerCase();
            if (txt.includes('faq') || txt.includes('frequently asked')) {
                $(this).remove();
            }
        });
    }

    let rootChildren = $('#FAKE_ROOT').contents();
    
    rootChildren.each(function() {
        const el = this;
        const tagName = el.tagName ? el.tagName.toLowerCase() : null;
        const text = $(el).text().trim();
        
        if (el.type === 'text' && !text) return;
        
        // Processing Content Cards
        if (tagName === 'h2') {
            if (currentCardContent || currentCardTitle) {
                newHtml += `\n<x-service-content-card title="${currentCardTitle.replace(/"/g, '&quot;')}">\n${currentCardContent}\n</x-service-content-card>\n`;
                currentCardContent = '';
            }
            currentCardTitle = $(el).html();
        } else if (tagName === 'br' && !currentCardTitle && !currentCardContent) {
            // skip
        } else {
            if (el.type === 'text') {
                currentCardContent += text + '\n';
            } else if (el.type === 'comment') {
                // Ignore comments like <!-- FAQ Section -->
            } else {
                currentCardContent += $.html(el) + '\n';
            }
        }
    });
    
    if (currentCardContent || currentCardTitle) {
        newHtml += `\n<x-service-content-card title="${currentCardTitle.replace(/"/g, '&quot;')}">\n${currentCardContent}\n</x-service-content-card>\n`;
    }
    
    if (faqs.length > 0) {
        newHtml += `\n@php\n$serviceFaqs = [\n`;
        for (const faq of faqs) {
            const q = faq.question.replace(/'/g, "\\'").replace(/\n/g, '').trim();
            const a = faq.answer.replace(/'/g, "\\'").trim();
            if(q) {
                newHtml += `    ['question' => '${q}', 'answer' => '${a}'],\n`;
            }
        }
        newHtml += `];\n@endphp\n`;
        newHtml += `<x-accordion-faq :faqs="$serviceFaqs" />\n`;
    }
    
    const finalNewHTML = content.replace(originalContentColHTML, `\n${newHtml}\n`);
    
    fs.writeFileSync(file, finalNewHTML, 'utf8');
    updatedFiles++;
    console.log("Successfully updated " + path.basename(file));
}

console.log("Done! Updated " + updatedFiles + " files.");
