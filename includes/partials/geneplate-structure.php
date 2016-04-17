<?php

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add support for structural wraps (max-width has been added to most content-entry elements to allow for full-width images on any page or post. If you don't need full-width images, you can add structural wrap in site-inner.)
add_theme_support( 'genesis-structural-wraps', array(
    'header',
    // 'nav',
    // 'subnav',
    // 'site-inner',
    'footer-widgets',
    'footer'
) );
