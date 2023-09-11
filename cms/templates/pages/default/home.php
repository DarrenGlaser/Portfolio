<?php
    $websitetheme = perch_page_attribute('websitetheme', [], true);

    if (isset($websitetheme)) {
        $theme = $websitetheme . '/';
        PerchSystem::set_var('theme',$theme);
    } else {$theme = 'default/';}

    perch_layout( $theme . 'top', ['page_title' => perch_page_title(true),]);

    perch_layout( $theme . 'nav');

    perch_layout( $theme . 'slider', ['rev-slider' => 'true',]);

    perch_layout( $theme . 'homework');

    perch_layout( $theme . 'footer', [
        'rev-slider-config'     => 'true',
        //'google-map'            => 'true',
        //'google-map-config'     => 'true',
        //'sponsors'            => 'true',
        //'cookie-warning'      => 'true',
        //'preloader'           => 'true',
    ]);

?>