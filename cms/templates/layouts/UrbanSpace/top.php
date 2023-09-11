<?php
    //URBANSPACE
    PerchSystem::force_ssl();
    perch_content('Doctype');

    if (perch_layout_has('blog-post')) {
        perch_blog_post_meta(perch_get('p'));
    }else{
        echo '<title>' . perch_pages_title(true) . '</title>';
    }

    perch_page_attributes();

    //perch_content('UrbanSpace_Favicons');
    perch_content('UrbanSpace_Fonts');
    perch_content('UrbanSpace_CSS');
    perch_content('UrbanSpace_JS-Header');
    //perch_content('Analytics');
    perch_blog_post_webmention_endpoint(perch_get('p'));
    session_start();
?>
</head>
<body id="<?php perch_page_attribute('bodyid', array( 'template' => 'body_attributes.html' )); ?>" class="<?php perch_page_attribute('bodyclass', array( 'template' => 'body_attributes.html' )); ?>">