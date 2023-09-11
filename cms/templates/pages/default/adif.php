<?php
$websitetheme = perch_page_attribute('websitetheme', [], true);

if (isset($websitetheme)) {
    $theme = $websitetheme . '/';
    PerchSystem::set_var('theme',$theme);
} else {$theme = 'default/';}

$cpUid = perch_get('cpUid');
if (!$cpUid) {$cpUid = '';} else {$cpUid = $cpUid;}

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
$ogTtl = $post['0']['ogTtl'];
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
    'og_author'      => 'https://www.facebook.com/SilenceMediaLdn/',
));

$adData = array(
    'cpUid' => $cpUid,
    'cpMtl' => $cpMtl,
    'cpDvc' => $cpDvc,
    'cpFmt' => $cpFmt,
);

PerchSystem::set_vars([
    'cpUid' => $cpUid,
    'cpMtl' => $cpMtl,
    'cpDvc' => $cpDvc,
    'cpFmt' => $cpFmt,
]);

perch_layout( $theme . 'top', $adData);

perch_layout( $theme . 'adif', $adData);

/*
perch_layout( $theme . 'footer', [
    //'rev-slider-config'     => 'true',
    //'google-map'            => 'true',
    //'google-map-config'     => 'true',
    //'sponsors'            => 'true',
    //'cookie-warning'      => 'true',
    //'preloader'           => 'true',
]);
*/
?>
