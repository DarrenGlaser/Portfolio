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

    $post = perch_shop_products(array(
        'template'      => 'products/product.html',
        'variants' 		=> true,
        'skip-template' => 'true',
        'return-html'   => 'true',
        'url'		    => 'url',
    ));

    # set up the variables
    $domain = 'https://'.$_SERVER["HTTP_HOST"];
    $url    = $domain.$_SERVER["REQUEST_URI"];

    $url   = $post['0']['url'];
    $cpMtl = $post['0']['cpMtl'];
    $cpDvc = $post['0']['cpDvc'];
    $cpFmt = $post['0']['cpFmt'];
    $cpDat = $post['0']['cpDat'];

    $ogTtl = $post['0']['ogTtl'];
    $ogAth = $post['0']['ogAth'];
    $ogTyp = $post['0']['ogTyp'];
    $ogDes = strip_tags($post['0']['ogDes']);
    if (isset($post[0]['ogImg'])) {
        $ogImg = $post[0]['ogImg'];
    } else {
        $ogImg = '';
    }

    # use the variables in the array value
    perch_page_attributes_extend(array(
        'description'    => $ogDes,
        'og_description' => $ogDes,
        'og_title'       => $ogTtl,
        'og_type'        => $ogTyp,
        'sharing_image'  => $ogImg,
        'og_author'      => $ogAth,
    ));

    $adData = array(
        'url'       => $url,
        'cpMtl'     => $cpMtl,
        'cpDvc'     => $cpDvc,
        'cpFmt'     => $cpFmt,
        'cpDat'     => $cpDat,
        'detect'    => $detect,
        'deviceType'=> $deviceType
    );

    PerchSystem::set_vars([
        'url'       => $url,
        'cpMtl'     => $cpMtl,
        'cpDvc'     => $cpDvc,
        'cpFmt'     => $cpFmt,
        'cpDat'     => $cpDat,
        'detect'    => $detect,
        'deviceType'=> $deviceType
    ]);

    perch_layout( $theme . 'top', ['page_title' => perch_page_title(true),]);

?>

<!-- Document Wrapper =============================== -->
<div id="main-wrapper">

    <?php perch_layout( $theme . 'nav.home'); ?>

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
            perch_layout( 'shop/portfolio.home', $adData);

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