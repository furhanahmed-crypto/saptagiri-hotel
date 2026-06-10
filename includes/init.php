<?php
/**
 * Default page settings.
 * Set $pageTitle, $pageDescription, etc. in each page BEFORE including head.php.
 */

if (!isset($pageTitle)) {
    $pageTitle = 'Hotel Saptagiri';
}

if (!isset($pageDescription)) {
    $pageDescription = 'Hotel Saptagiri, Secunderabad — Comfortable boutique stay & banquets in the heart of the city.';
}

if (!isset($pageKeywords)) {
    $pageKeywords = '';
}

// Set to true on pages that use Swiper carousels
if (!isset($useSwiper)) {
    $useSwiper = false;
}

// Extra JS files from assets/js/ (header.js is always loaded)
if (!isset($pageScripts)) {
    $pageScripts = [];
}

// Optional inline script before </body>
if (!isset($pageInlineScript)) {
    $pageInlineScript = '';
}

if (!isset($footerTagline)) {
    $footerTagline = 'Warm hospitality in the heart of Secunderabad.';
}

if (!isset($showFloatingBtn)) {
    $showFloatingBtn = false;
}
