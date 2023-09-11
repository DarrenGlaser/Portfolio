<?php

    $cpMtl = perch_layout_var('cpMtl', true);
    $cpDat = perch_layout_var('cpDat', true);

    $domain             = 'https://'.$_SERVER["HTTP_HOST"];
    $url                = $domain.$_SERVER["REQUEST_URI"];
    $sitename           = 'Darren Glaser';
    $twittername        = "@DazGlaser";
    $facebookurl        = "//www.facebook.com/dazglaser/";
    $sharing_image      = '/noindex/imgs/share/socialshare-1920x1040.jpg';
    $article_datetime   = $cpDat;
    $article_author     = 'Darren Glaser';

    PerchSystem::force_ssl();
    PerchSystem::set_vars([
        'domain'            => $domain,
        'url'               => $url,
        'sitename'          => $sitename,
        'sharing_image'     => $sharing_image,
        'twittername'       => $twittername,
        'facebookurl'       => $facebookurl,
        'article_datetime'  => $article_datetime,
        'article_author'    => $article_author,
    ]);
    perch_content('Doctype');
    if (perch_layout_has('blog-post')) {
        perch_blog_post_meta(perch_get('p'));
    }else{
        if (!$cpMtl) {echo '<title>' . perch_pages_title(true) . '</title>';} else {echo '<title>' . $cpMtl . '</title>';;}
    }

    perch_page_attributes(array(
        'template' => 'default.html'
    ));
    perch_content('Favicons');
    perch_content('Fonts Portfolio');
    perch_content('CSS Portfolio');
    perch_content('JS Header Portfolio');
    perch_content('Analytics');
    //perch_blog_post_webmention_endpoint(perch_get('b'));
    //session_start();

?>
</head>
<body data-bs-spy="scroll" data-bs-target="#header-nav" data-bs-offset="0" id="<?php perch_page_attribute('bodyid', array( 'template' => 'body_attributes.html' )); ?>" class="<?php perch_page_attribute('bodyclass', array( 'template' => 'body_attributes.html' )); ?>">

<!-- Preloader -->
<div class="preloader preloader-dark">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloader End -->
