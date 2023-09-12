<?php

    include($_SERVER["DOCUMENT_ROOT"] . '/noindex/inc/Mobile-Detect/Mobile_Detect.php');
    $detect = new Mobile_Detect;
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

    $websitetheme = perch_page_attribute('websitetheme', [], true);

    if (isset($websitetheme)) {
        $theme = $websitetheme . '/';
        PerchSystem::set_var('theme',$theme);
    } else {$theme = 'default/';}

    $ogUrl = perch_get('ogUrl');
    if (!$ogUrl) {$ogUrl = '';} else {$ogUrl = $ogUrl;}

    $cpUid = perch_get('cpUid');
    if (!$cpUid) {$cpUid = '';} else {$cpUid = $cpUid;}

    $url =  perch_page_url(array(
        'hide-extensions'    => true,
        'hide-default-doc'   => true,
        'add-trailing-slash' => false,
        'include-domain'     => false,
    ), true);//   $url returns .     /this-page.php

    $post = perch_collection('Work', [
        'template'      => 'collections/ad.html',
        'filter'        => '_id',
        'match'         => 'eq',
        'value'         => $cpUid,
        'skip-template' => 'true',
        'return-html'   => 'true',
    ]);

    # set up the variables
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
        'ogUrl'     => $ogUrl,
        'cpUid'     => $cpUid,
        'cpMtl'     => $cpMtl,
        'cpDvc'     => $cpDvc,
        'cpFmt'     => $cpFmt,
        'cpDat'     => $cpDat,
        'detect'    => $detect,
        'deviceType'=> $deviceType
    );

    PerchSystem::set_vars([
        'ogUrl'     => $ogUrl,
        'cpUid'     => $cpUid,
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

    <?php perch_layout( $theme . 'work.nav'); ?>

    <div id="content" role="main">
        <?php
            perch_layout( $theme . 'ad', $adData);
            //echo 'URL: ' . $ogUrl;
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