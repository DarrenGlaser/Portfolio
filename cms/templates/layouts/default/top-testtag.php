<?php

    $cpMtl = perch_layout_var('cpMtl', true);
    $cpDat = perch_layout_var('cpDat', true);

    $domain             = 'https://'.$_SERVER["HTTP_HOST"];
    $url                = $domain.$_SERVER["REQUEST_URI"];
    $sitename           = 'Silence Media';
    $twittername        = "@SilenceMediaLDN";
    $sharing_image      = '/noindex/imgs/slider/homepage-jan2021-1920x1040.jpg';
    $article_datetime   = $cpDat;
    $article_author     = 'Silence Media';

    PerchSystem::force_ssl();
    PerchSystem::set_var('domain',$domain);
    PerchSystem::set_var('url',$url);
    PerchSystem::set_var('sitename',$sitename);
    PerchSystem::set_var('sharing_image',$sharing_image);
    PerchSystem::set_var('twittername',$twittername);
    PerchSystem::set_var('article_datetime',$article_datetime);
    PerchSystem::set_var('article_author',$article_author);
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
    perch_content('Fonts');
    perch_content('CSS');
    perch_content('JS-Header');
    perch_content('Analytics');
    perch_content('Test Header Tag');
    session_start();
?>
</head>
<body id="<?php perch_page_attribute('bodyid', array( 'template' => 'body_attributes.html' )); ?>" class="<?php perch_page_attribute('bodyclass', array( 'template' => 'body_attributes.html' )); ?>" style="background-color:#fafafa;">
<?php
/*
if ( $detect->isMobile() ) {
    //
} else {
    echo '<div id="pagewrapper">';
}*/
?>
