<?php

use App\Core\Adapters\Theme;

if (isset($_SESSION['app']) && $_SESSION['app'] == 'crypto') {
    return array(
        // Refer to config/global/menu.php

        // Horizontal menu


        'horizontal' => array(
            // // Dashboard
            array(
                'title'   => 'Dashboard',
                'path'    => 'crypto/dashboard',
                'classes' => array('item' => 'me-lg-1 f-20-fig-questrial'),
            ),

            array(
                'title'   => 'Wallets',
                'path'    => 'crypto/wallet',
                'classes' => array('item' => 'me-lg-1 f-20-fig-questrial'),
            ),
            array(
                'title'   => 'Transactions',
                'path'    => 'crypto/transaction/transaction',
                'classes' => array('item' => 'me-lg-1 f-20-fig-questrial'),
            ),

            array(
                'title'   => 'Tax Reports',
                'path'    => 'crypto/tax-reports',
                'classes' => array('item' => 'me-lg-1 f-20-fig-questrial'),
            ),

            array(
                'title'   => 'Markets',
                'path'    => 'crypto/market',
                'classes' => array('item' => 'me-lg-1 f-20-fig-questrial'),
            ),

            // // Mega menu
            // array(
            //     'title'      => 'Mega Menu',
            //     'classes'    => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
            //     'attributes' => array(
            //         'data-kt-menu-trigger'   => "click",
            //         'data-kt-menu-placement' => "bottom-start",
            //     ),
            //     'sub'        => array(
            //         'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-600px p-5 p-lg-5',
            //         'view'  => 'layout/header/_mega-menu',
            //     ),
            // ),
        ),
    );
}else{
    return array(
       
    );
}
