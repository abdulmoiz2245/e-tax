<?php



$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (str_contains($currentURL, 'crypto')) {

    $_SESSION['app'] = 'crypto';
   

} elseif (str_contains($currentURL, 'index') || str_contains($currentURL, 'login') || str_contains($currentURL, 'register')) {
   

} else {
   


    $_SESSION['app'] = 'e-tax';
}
if (isset($_SESSION['app']) &&  $_SESSION['app'] == 'crypto') {
    $aside = false;
} else {
    $aside = true;
}


return array(
    // Refer to config/global/general.php

    // Assets
    'assets' => array(
        'favicon' => 'media/logos/favicon.ico',
        'fonts'   => array(
            'google' => array(
                'Poppins:300,400,500,600,700',
            ),
        ),
        'css'     => array(
            'plugins/global/plugins.bundle.css',
            'plugins/global/plugins-custom.bundle.css',
            'css/style.bundle.css',
        ),
        'js'      => array(
            'plugins/global/plugins.bundle.js',
            'js/scripts.bundle.js',
            'js/custom/widgets.js',
        ),
    ),

    // Layout
    'layout' => array(
        // Main
        'main'       => array(
            'base'              => 'default', // Set base layout: default|docs
            'type'              => 'default', // Set layout type: default|blank|none
            'dark-mode-enabled' => true, // Enable optioanl dark mode mode
            'primary-color'     => '#009EF7',  // Primary color used in email templates
        ),

        // Docs
        'docs'       => array(
            'logo-path'  => array(
                'default' => 'logos/logo-1-dark.svg',
                'dark'    => 'logos/logo-1.svg',
            ),
            'logo-class' => 'h-15px',
        ),

        // Loader
        'loader'     => array(
            'display' => false,
            'type'    => 'default' // Set default|spinner-message|spinner-logo to hide or show page loader
        ),

        // Header
        'header'     => array(
            'display'   => true, // Display header
            'width'     => 'fluid', // Set header width(fixed|fluid)
            'left'      => 'menu', // Set left part content(menu|page-title)
            'fixed'     => array(
                'desktop'           => true,  // Set fixed header for desktop
                'tablet-and-mobile' => true // Set fixed header for talet & mobile
            ),
            'menu-icon' => 'svg' // Menu icon type(svg|font)
        ),

        // Toolbar
        'toolbar'    => array(
            'display' => false, // Display toolbar
            'width'   => 'fluid', // Set toolbar container width(fluid|fixed)
            'fixed'   => array(
                'desktop'           => true,  // Set fixed header for desktop
                'tablet-and-mobile' => false // Set fixed header for talet & mobile
            ),
            'layout'  => 'toolbar-1', // Set toolbar type
            'layouts' => array(
                'toolbar-1' => array(
                    'height'                   => '55px',
                    'height-tablet-and-mobile' => '55px',
                ),
                'toolbar-2' => array(
                    'height'                   => '75px',
                    'height-tablet-and-mobile' => '65px',
                ),
                'toolbar-3' => array(
                    'height'                   => '55px',
                    'height-tablet-and-mobile' => '55px',
                ),
                'toolbar-4' => array(
                    'height'                   => '65px',
                    'height-tablet-and-mobile' => '65px',
                ),
                'toolbar-5' => array(
                    'height'                   => '75px',
                    'height-tablet-and-mobile' => '65px',
                ),
            ),
        ),

        // Page title
        'page-title' => array(
            'display'               => false, // Display page title
            'breadcrumb'            => false, // Display breadcrumb
            'description'           => false, // Display description
            'layout'                => 'default', // Set layout(default|select)
            'direction'             => 'row', // Flex direction(column|row))
            'responsive'            => true, // Move page title to cotnent on mobile mode
            'responsive-breakpoint' => 'lg', // Responsive breakpoint value(e.g: md, lg, or 300px)
            'responsive-target'     => '#kt_toolbar_container' // Responsive target selector
        ),

        // Aside
        'aside'      => array(
            'display'   => $aside, // Display aside
            'theme'     => 'light', // Set aside theme(dark|light)
            'menu'      => 'main', // Set aside menu(main|documentation)
            'fixed'     => true,  // Enable aside fixed mode
            'minimized' => false, // Set aside minimized by default
            'minimize'  => false, // Allow aside minimize toggle
            'hoverable' => true, // Allow aside hovering when minimized
            'menu-icon' => 'svg' // Menu icon type(svg|font)
        ),

        // Content
        'content'    => array(
            'width'  => 'fixed', // Set content width(fixed|fluid)
            'layout' => 'default'  // Set content layout(default|documentation)
        ),

        // Footer
        'footer'     => array(
            'display' => false,
            'width' => 'fluid' // Set fixed|fluid to change width type
        ),

        // Scrolltop
        'scrolltop'  => array(
            'display' => true // Display scrolltop
        ),
    ),
);
