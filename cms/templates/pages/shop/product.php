<?php

    include($_SERVER["DOCUMENT_ROOT"] . '/noindex/inc/Mobile-Detect/Mobile_Detect.php');
    $detect = new Mobile_Detect;
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

    $websitetheme = perch_page_attribute('websitetheme', [], true);

    if (isset($websitetheme)) {
        $theme = $websitetheme . '/';
        PerchSystem::set_var('theme',$theme);
    } else {$theme = 'default/';}

    # set up the variables
    $domain = 'https://'.$_SERVER["HTTP_HOST"];
    $url    = $domain.$_SERVER["REQUEST_URI"];

    $post = perch_shop_products(array(
        'template'      => 'products/product-details.html',
        'variants' 		=> true,
        'skip-template' => 'true',
        'return-html'   => 'true',
        'url'           => $url,
    ));

    $cpMtl = $post['0']['cpMtl'];
    $cpDvc = $post['0']['cpDvc'];
    $cpFmt = $post['0']['cpFmt'];
    $ogImg = $post['0']['ogImg'];
    $cpDat = $post['0']['cpDat'];
    $cpCdt = $post['0']['cpCdt'];
    $ogTyp = $post['0']['ogTyp'];
    $ogDes = $post['0']['ogDes'];

    $adData = array(
        'url'       => $url,
        'cpMtl'     => $cpMtl,
        'cpDvc'     => $cpDvc,
        'cpFmt'     => $cpFmt,
        'cpDat'     => $cpDat,
        'cpCdt'     => $cpCdt,
        'ogTyp'     => $ogTyp,
        'ogDes'     => $ogDes,
        'ogImg'     => $ogImg,
        'detect'    => $detect,
        'deviceType'=> $deviceType
    );

    PerchSystem::set_vars([
        'url'       => $url,
        'cpMtl'     => $cpMtl,
        'cpDvc'     => $cpDvc,
        'cpFmt'     => $cpFmt,
        'cpDat'     => $cpDat,
        'cpCdt'     => $cpCdt,
        'ogTyp'     => $ogTyp,
        'ogDes'     => $ogDes,
        'ogImg'     => $ogImg,
        'detect'    => $detect,
        'deviceType'=> $deviceType
    ]);

    perch_layout( $theme . 'top', $adData);

?>

<!-- Document Wrapper =============================== -->
<div id="main-wrapper">

    <?php perch_layout( $theme . 'work.nav'); ?>

    <div id="content" role="main">
        <?php
        perch_layout( 'shop/product', $adData);
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
