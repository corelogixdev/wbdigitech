const { execSync } = require('child_process');
const fs = require('fs');
const path = require('path');

const directories = [
    'd:/corelogix/wbdigitech/resources/views/pages/services',
    'd:/corelogix/wbdigitech/resources/views/pages/ai_marketing'
];

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

let files = [];
directories.forEach(dir => {
    files = files.concat(walkSync(dir));
});

let updatedFiles = 0;

for (const file of files) {
    if (file.includes('index.blade.php') || file.includes('show.blade.php')) continue;

    const relativePath = path.relative('d:/corelogix/wbdigitech', file).replace(/\\/g, '/');
    
    let originalContent = '';
    try {
        originalContent = execSync(`git show HEAD:"${relativePath}"`, { encoding: 'utf8', cwd: 'd:/corelogix/wbdigitech' });
    } catch (e) {
        console.log(`Could not get git history for ${relativePath}`);
        continue;
    }

    const imgRegex = /<img\s+src="\{\{\s*asset\('([^']+)'\)\s*\}\}"/i;
    const match = originalContent.match(imgRegex);

    if (match && match[1]) {
        const imagePath = match[1];
        let currentContent = fs.readFileSync(file, 'utf8');
        
        // Add the image prop to x-service-hero
        if (currentContent.includes('<x-service-hero') && !currentContent.includes('image=')) {
            // we'll place it right after <x-service-hero
            currentContent = currentContent.replace(/<x-service-hero/, `<x-service-hero\n            image="${imagePath}"`);
            fs.writeFileSync(file, currentContent, 'utf8');
            updatedFiles++;
            console.log(`Added image ${imagePath} to ${path.basename(file)}`);
        } else {
            console.log(`Already has image or missing hero in ${path.basename(file)}`);
        }
    } else {
        console.log(`No image found in original ${path.basename(file)}`);
    }
}

console.log(`Done! Updated ${updatedFiles} files.`);
