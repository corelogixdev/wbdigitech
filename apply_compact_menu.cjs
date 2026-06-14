const fs = require('fs');

const cssPath = 'd:/corelogix/wbdigitech/public/css/header.css';

const cssToAdd = `
/* Compact Mega Menu for menus with fewer items */
.modern-mega-menu.compact-mega-menu {
    width: auto !important;
    min-width: 850px !important;
    left: 50% !important;
    right: auto !important;
    transform: translateX(-50%) !important;
    padding: 0 !important;
    border-radius: 12px !important;
}

.modern-mega-menu.compact-mega-menu .mega-menu-container {
    padding: 20px;
    margin: 0;
    max-width: 100%;
}

.modern-mega-menu.compact-mega-menu .mega-menu-services {
    flex: 0 0 auto;
    overflow: visible; /* no scrollbar needed */
}

@media (max-width: 1199px) {
    .modern-mega-menu.compact-mega-menu {
        min-width: 750px !important;
    }
}
`;

fs.appendFileSync(cssPath, cssToAdd, 'utf8');
console.log("Appended compact-mega-menu CSS to header.css");

const bladePath = 'd:/corelogix/wbdigitech/resources/views/layouts/headerLayout.blade.php';
let bladeContent = fs.readFileSync(bladePath, 'utf8');

// Replace class in the AI Marketing menu
const targetStr = '<div class="tp-submenu submenu tp-mega-menu modern-mega-menu">';
// We only want to replace it for the AI Marketing section.
// The AI marketing section is after 'AI Marketing <i class="fas fa-chevron-down toggle-arrow"></i></a>'
const aiStart = bladeContent.indexOf('AI Marketing <i class="fas fa-chevron-down toggle-arrow"></i></a>');

if (aiStart !== -1) {
    const nextTarget = bladeContent.indexOf(targetStr, aiStart);
    if (nextTarget !== -1) {
        let newBladeContent = bladeContent.substring(0, nextTarget) + 
                              '<div class="tp-submenu submenu tp-mega-menu modern-mega-menu compact-mega-menu">' + 
                              bladeContent.substring(nextTarget + targetStr.length);
        fs.writeFileSync(bladePath, newBladeContent, 'utf8');
        console.log("Added compact-mega-menu class to AI Marketing menu.");
    } else {
        console.log("Target div not found after AI Marketing link.");
    }
} else {
    console.log("AI Marketing link not found.");
}
