const fs = require('fs');
const path = require('path');

function processDirectory(dirPath) {
    const files = fs.readdirSync(dirPath);

    files.forEach(file => {
        const fullPath = path.join(dirPath, file);
        if (fs.statSync(fullPath).isDirectory()) {
            processDirectory(fullPath);
        } else if (fullPath.endsWith('.blade.php')) {
            processFile(fullPath);
        }
    });
}

function processFile(filePath) {
    let content = fs.readFileSync(filePath, 'utf8');
    
    // Check if already processed
    if (content.includes('<x-service-hero')) {
        return;
    }

    // Regex to match the entire hero block
    // It starts with <!-- Spacer below header --> (or similar) and ends with the </section> of the hero image.
    // Let's use a more flexible regex that finds the h1/h2 title, the paragraph, and the section-box image.
    
    const heroTitleRegex = /<h[12] class="tp-hero-title[^>]*>([\s\S]*?)<\/h[12]>/i;
    const heroContentRegex = /<p class="delay-load">([\s\S]*?)<\/p>/i;
    
    // Match the whole block to remove it. We'll find the index of "<!-- Spacer" or "tp-hero-title-wrap"
    // and the index of the end of the <section class="section-box"> that contains the image.
    
    const titleMatch = content.match(heroTitleRegex);
    const contentMatch = content.match(heroContentRegex);
    
    if (!titleMatch || !contentMatch) {
        console.log(`Skipping ${filePath} (could not find title or description)`);
        return;
    }
    
    const title = titleMatch[1].trim().replace(/\s+/g, ' ');
    const description = contentMatch[1].trim().replace(/\s+/g, ' ').replace(/<br\s*\/?>/gi, ' ');
    
    // Attempt to figure out the block to remove
    let startIndex = content.indexOf('<!-- Spacer below header -->');
    if (startIndex === -1) {
        startIndex = content.indexOf('<!-- Hero Title -->');
    }
    if (startIndex === -1) {
        startIndex = content.indexOf('<div class="tp-hero-title-wrap');
    }
    
    // Find the end of the hero image section
    // It's usually <section class="section-box"> ... </section> right after the hero content
    let heroContentEnd = content.indexOf('<!-- Hero Image -->');
    let endIndex = -1;
    if (heroContentEnd !== -1) {
        let sectionIndex = content.indexOf('<section class="section-box">', heroContentEnd);
        if (sectionIndex !== -1) {
            endIndex = content.indexOf('</section>', sectionIndex) + 10;
        }
    } else {
        // Just find the end of tp-hero-content
        let contentDivIndex = content.indexOf('<div class="tp-hero-content');
        if (contentDivIndex !== -1) {
            // Find the next section box, or just remove up to a certain point
            let sectionIndex = content.indexOf('<section class="section-box">', contentDivIndex);
            if(sectionIndex !== -1 && sectionIndex < contentDivIndex + 1000) {
                 endIndex = content.indexOf('</section>', sectionIndex) + 10;
            } else {
                 endIndex = content.indexOf('</div>', content.indexOf('hero-btns', contentDivIndex)) + 15; // rough estimate
            }
        }
    }
    
    if (startIndex !== -1 && endIndex !== -1 && endIndex > startIndex) {
        let blockToRemove = content.substring(startIndex, endIndex);
        
        let category = "AI Marketing";
        
        let replacement = `<x-service-hero 
            title="${title.replace(/"/g, '&quot;')}"
            description="${description.replace(/"/g, '&quot;')}"
            serviceCategory="${category}"
            serviceName="${category}"
        >
        </x-service-hero>`;
        
        let newContent = content.substring(0, startIndex) + replacement + content.substring(endIndex);
        fs.writeFileSync(filePath, newContent, 'utf8');
        console.log(`Updated ${filePath}`);
    } else {
        console.log(`Could not find bounds to replace in ${filePath}`);
    }
}

const servicesDir = path.join(__dirname, 'resources/views/pages/ai_marketing');
processDirectory(servicesDir);
console.log('Done!');
