<?php
return array(
    'documentation' => array(
        // Apply for all documentation pages
        '*' => array(
            // Layout
            'layout' => array(
                // Aside
                'aside' => array(
                    'display'  => false, // Display aside
                    'theme'    => 'light', // Set aside theme(dark|light)
                    'minimize' => false, // Allow aside minimize toggle
                    'menu'     => '' // Set aside menu type(main|documentation)
                ),

                'header' => array(
                    'left' => 'page-title',
                ),

                'toolbar' => array(
                    'display' => false,
                ),

                'page-title' => array(
                    'layout'            => '',
                    'description'       => false,
                    'responsive'        => true,
                    'responsive-target' => '#kt_header_nav' // Responsive target selector
                ),
            ),
        ),
    ),
);
