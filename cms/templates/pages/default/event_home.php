<?php

    //LIVE STREAM EVENT
    $websitetheme = perch_page_attribute('websitetheme', [], true);

    if (isset($websitetheme)) {
        $theme = $websitetheme . '/';
        PerchSystem::set_var('theme',$theme);
    } else {$theme = 'default/';}

    $evUid = perch_get('evUid');
    if (!$evUid) {

        $post = perch_collection('Events', [
            'template'      => 'collections/event.html',
            'filter'        => 'homePageOnOff',
            'match'         => 'eq',
            'value'         => 'Yes',
            'skip-template' => 'true',
            'return-html'   => 'true',
        ]);

        # set up the variables
        $evUid = $post['0']['_id'];

    } else {
        //
    }

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
        //'og_author'      => 'https://www.facebook.com/SilenceMediaLdn/',
    ));

    $adData = array(
        'evUid' => $evUid,
    );

    PerchSystem::set_vars([
        'evUid' => $evUid,
    ]);

    perch_layout( $theme . 'splash.top', ['page_title' => perch_page_title(true),]);

    perch_layout( $theme . 'event', $adData);

    perch_layout( $theme . 'splash.footer', [
        //'google-map'            => 'true',
    ]);

?>