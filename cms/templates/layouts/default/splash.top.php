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

    perch_content('Splash_Fonts');
    perch_content('Splash_CSS');
    perch_content('Splash_JS-Header');
    session_start();
?>
</head>
<body id="<?php perch_page_attribute('bodyid', array( 'template' => 'body_attributes.html' )); ?>" class="<?php perch_page_attribute('bodyclass', array( 'template' => 'body_attributes.html' )); ?>">
