const fs = require('fs');
const cssPath = 'd:/corelogix/wbdigitech/public/css/services.css';

const newCss = `
/* =========================================
   Service Content Cards
   ========================================= */
.service-content-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    border: 1px solid rgba(0,0,0,0.02);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.service-content-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}
.scc-title {
    font-size: 24px !important;
    font-weight: 800 !important;
    color: #0A3D62 !important;
    margin-bottom: 20px !important;
    border-bottom: 2px solid #f0f4f8;
    padding-bottom: 15px;
    line-height: 1.3 !important;
}
.scc-body {
    font-size: 16px;
    line-height: 1.7;
    color: #4a5568;
}
.scc-body p {
    margin-bottom: 15px;
    color: #4a5568;
}
.scc-body p:last-child {
    margin-bottom: 0;
}
.scc-body ul {
    padding-left: 20px;
    margin-bottom: 15px;
}
.scc-body li {
    margin-bottom: 8px;
    color: #4a5568;
}

/* =========================================
   Service FAQ Accordion
   ========================================= */
.service-faq-container {
    margin-top: 50px;
    margin-bottom: 50px;
}
.faq-section-title {
    font-size: 28px !important;
    font-weight: 800 !important;
    color: #0A3D62 !important;
    margin-bottom: 30px !important;
    text-align: center;
}
.modern-accordion .accordion-item {
    border: none;
    background: #ffffff;
    border-radius: 10px !important;
    margin-bottom: 15px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.03);
    overflow: hidden;
}
.modern-accordion .accordion-header {
    margin: 0 !important;
}
.modern-accordion .accordion-button {
    background: #ffffff;
    color: #0A3D62;
    font-weight: 700;
    font-size: 17px;
    padding: 20px 25px;
    border: none;
    box-shadow: none !important;
}
.modern-accordion .accordion-button:not(.collapsed) {
    background: #f8fafc;
    color: #0A3D62;
    box-shadow: none;
}
.modern-accordion .accordion-button::after {
    filter: invert(15%) sepia(85%) saturate(3033%) hue-rotate(190deg) brightness(88%) contrast(92%);
}
.modern-accordion .accordion-body {
    padding: 0 25px 25px 25px;
    background: #f8fafc;
    color: #4a5568;
    font-size: 15.5px;
    line-height: 1.7;
}
`;

fs.appendFileSync(cssPath, newCss, 'utf8');
console.log("Appended service CSS");
