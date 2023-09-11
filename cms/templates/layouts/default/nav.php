<?php

    if (perch_member_logged_in()) {
        $loggedIn = 'true';
    } else {
        $loggedIn = '';
    }
    PerchSystem::set_vars([
        'loggedIn' => $loggedIn,
    ]);

?>
<!-- NAV -->
<header class="navik-header no-sticky center-menu-1">
    <div class="container border-bottom pad0">

    <!-- Navik header -->
    <div class="navik-header-container">

        <!--Logo-->
        <div class="logo fopa t" data-mobile-logo="/noindex/imgs/site/silence-logo-dark.svg" data-sticky-logo="/noindex/imgs/site/silence-logo-dark.svg">
            <a id="silence-logo-a" href="//silence-media.com" title="Silence Media"><img id="silence-logo-img" src="/noindex/imgs/site/silence-logo-dark.svg" alt="Silence Media"/></a>
        </div>

        <?php
            /*
             perch_pages_navigation(array(
                'hide-extensions'   => true,
                'from-path'         => '/',
                'template'          => array('Menu_Burger.html'),
            ));
            */
        ?>

        <!--Navigation menu-->
        <nav class="navik-menu menu-caret submenu-top-border submenu-scale">

            <?php
                perch_pages_navigation(array(
                    'navgroup'          => 'main-nav-left',
                    'hide-extensions'   => true,
                    'from-path'         => '/',
                    'levels'            => 3,
                    'template'          => array('Menu_LT_L1.html', 'Menu_LT_L2.html' , 'Menu_LT_L3.html'),
                ));
            ?>

            <?php
                perch_pages_navigation(array(
                    'navgroup'          =>'main-nav-right',
                    'hide-extensions'   => true,
                    'from-path'         => '/',
                    'levels'            => 3,
                    'template'          => array('Menu_RT_L1.html', 'Menu_RT_L2.html' , 'Menu_RT_L3.html'),
                ));
            ?>

        </nav>
    </div>

    </div>
</header>
<!-- END NAV -->

