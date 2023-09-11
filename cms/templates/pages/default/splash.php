<?php
    //SPLASH
    $websitetheme = perch_page_attribute('websitetheme', [], true);

    if (isset($websitetheme)) {
        $theme = $websitetheme . '/';
        PerchSystem::set_var('theme',$theme);
    } else {$theme = 'default/';}

    perch_layout( $theme . 'splash.top', ['page_title' => perch_page_title(true),]);

    perch_layout( $theme . 'splash.header');

    perch_layout( $theme . 'splash', [
        //'google-map'            => 'true',
    ]);

    perch_layout( $theme . 'splash.footer', [
        //'google-map'            => 'true',
    ]);

?>