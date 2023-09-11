<?php

include($_SERVER["DOCUMENT_ROOT"] . '/noindex/inc/Mobile-Detect/Mobile_Detect.php');
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

$adData = array(
    'detect'    => $detect,
    'deviceType'=> $deviceType
);

PerchSystem::set_vars([
    'detect'    => $detect,
    'deviceType'=> $deviceType
]);

$websitetheme = perch_page_attribute('websitetheme', [], true);

if (isset($websitetheme)) {
    $theme = $websitetheme . '/';
    PerchSystem::set_var('theme',$theme);
} else {$theme = 'default/';}

perch_layout( $theme . 'top', ['page_title' => perch_page_title(true),]);

?>

<!-- Document Wrapper =============================== -->
<div id="main-wrapper">

    <?php perch_layout( $theme . 'home.nav'); ?>

    <div id="content" role="main">
        <?php
            perch_layout( $theme . 'home.intro');
            perch_layout( $theme . 'home.about');
            perch_layout( $theme . 'home.experience');
            //perch_layout( $theme . 'home.hero');
            //perch_layout( $theme . 'home.services');
            //perch_layout( $theme . 'home.tools');
            perch_layout( $theme . 'home.resume');
            //perch_layout( $theme . 'home.portfolio', $adData);
            perch_layout( $theme . 'shop.portfolio', $adData);

            //perch_layout( $theme . 'home.clients');
            perch_layout( $theme . 'home.testimonial');
            perch_layout( $theme . 'home.contact');
        ?>
    </div>

    <?php perch_layout( $theme . 'home.footer', $adData); ?>

</div>
<!-- Document Wrapper end -->

<?php
perch_layout( $theme . 'footer', [
    //'rev-slider-config'     => 'true',
    //'google-map'            => 'true',
    //'google-map-config'     => 'true',
    //'sponsors'            => 'true',
    //'cookie-warning'      => 'true',
    //'preloader'           => 'true',
]);

?>