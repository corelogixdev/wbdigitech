const fs = require('fs');

const filePath = 'd:/corelogix/wbdigitech/public/css/header.css';

const newCss = `
/* =========================================
   Modern Mega Menu Styles (Reference Match)
   ========================================= */

.megamenu-trigger > a {
    display: flex !important;
    align-items: center;
    gap: 5px;
}

.toggle-arrow {
    font-size: 11px;
    transition: transform 0.3s ease;
}

.megamenu-trigger:hover .toggle-arrow {
    transform: rotate(180deg);
}

.modern-mega-menu {
    width: 100vw !important;
    left: 0 !important;
    right: 0 !important;
    background: rgba(255, 255, 255, 0.95) !important;
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    padding: 0 !important;
    top: 100% !important;
}

.mega-menu-container {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    flex-wrap: nowrap;
    padding: 20px;
    gap: 20px;
}

/* Left Panel */
.mega-menu-overview {
    flex: 0 0 320px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e2e8f0 100%);
    border-radius: 12px;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Right Panel (Scrollable Columns wrapper) */
.mega-menu-services {
    flex: 1;
    display: flex;
    gap: 15px;
    overflow-x: auto;
    padding-bottom: 10px;
    /* Custom scrollbar for horizontal */
    scrollbar-width: thin;
    scrollbar-color: #cbd5e1 transparent;
}
.mega-menu-services::-webkit-scrollbar {
    height: 6px;
}
.mega-menu-services::-webkit-scrollbar-thumb {
    background-color: #cbd5e1;
    border-radius: 10px;
}

/* Individual Columns */
.service-column {
    flex: 0 0 260px; /* Fixed width for columns */
    display: flex;
    flex-direction: column;
    background: rgba(255, 255, 255, 0.7);
    border: 1px solid rgba(0,0,0,0.05);
    border-radius: 12px;
    overflow: hidden;
}

.service-col-title {
    font-size: 13px;
    font-weight: 700;
    color: #4a5568;
    padding: 15px 20px;
    margin: 0;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    background: rgba(255, 255, 255, 0.9);
    letter-spacing: 0.5px;
}

/* Independent Scroll Area */
.service-scroll-area {
    flex: 1;
    overflow-y: auto;
    max-height: 400px; /* Limits height and enables scrolling */
    padding: 10px;
    
    /* Custom scrollbar */
    scrollbar-width: thin;
    scrollbar-color: #cbd5e1 transparent;
}
.service-scroll-area::-webkit-scrollbar {
    width: 6px;
}
.service-scroll-area::-webkit-scrollbar-track {
    background: transparent;
}
.service-scroll-area::-webkit-scrollbar-thumb {
    background-color: #cbd5e1;
    border-radius: 10px;
}

/* Cards */
.service-card {
    display: block;
    padding: 12px 15px;
    border-radius: 8px;
    text-decoration: none !important;
    transition: all 0.2s ease;
    border: 1px solid transparent;
    margin-bottom: 5px;
}
.service-card:hover {
    background: #ffffff;
    border-color: rgba(10, 61, 98, 0.1);
    box-shadow: 0 4px 10px rgba(0,0,0,0.03);
    transform: translateY(-2px);
}

.service-card .sc-title {
    display: block;
    font-size: 14px;
    font-weight: 700;
    color: #1a202c;
    margin-bottom: 4px;
}

.service-card .sc-desc {
    display: block;
    font-size: 12px;
    color: #718096;
    line-height: 1.4;
}

.service-card:hover .sc-title {
    color: #0A3D62;
}

/* Responsive adjustment for mega menu */
@media (max-width: 1199px) {
    .mega-menu-container {
        padding: 10px;
    }
    .mega-menu-overview {
        flex: 0 0 250px;
        padding: 20px;
    }
    .service-column {
        flex: 0 0 220px;
    }
}
`;

fs.appendFileSync(filePath, newCss, 'utf8');
console.log('Appended mega menu CSS to header.css');
