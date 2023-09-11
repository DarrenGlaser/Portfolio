<?php

    $websitetheme = perch_page_attribute('websitetheme', [], true);

    if (isset($websitetheme)) {
        $theme = $websitetheme . '/';
        PerchSystem::set_var('theme',$theme);
    } else {$theme = 'default/';}

    $random_hash = md5(date('r', time()));
    $ftNm = perch_member_get('first_name');
    $ltNm = perch_member_get('last_name');
    $meID = perch_member_get('meID');

    PerchSystem::set_vars([
        'ftNm' => $ftNm,
        'ltNm' => $ltNm,
        'meID' => $meID,
    ]);

    perch_layout( $theme . 'top', ['page_title' => perch_page_title(true),]);

?>

    <!-- Document Wrapper =============================== -->
<div id="main-wrapper">

    <?php perch_layout( $theme . 'home.nav'); ?>

    <div id="content" role="main">
        <?php
            //perch_layout( $theme . 'home.about');
            perch_layout( 'members/member.login', [
                'ftNm' => $ftNm,
                'ltNm' => $ltNm,
                'meID' => $meID,
            ]);
            perch_layout( $theme . 'home.contact');
        ?>
    </div>

    <?php perch_layout( $theme . 'home.footer'); ?>

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