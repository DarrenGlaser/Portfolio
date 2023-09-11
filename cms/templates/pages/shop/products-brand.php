<?php
    $websitetheme = perch_page_attribute('websitetheme', [], true);

    if (isset($websitetheme)) {
        $theme = $websitetheme . '/';
        PerchSystem::set_var('theme',$theme);
    } else {$theme = 'default/';}

    perch_layout( $theme . 'top', ['page_title' => perch_page_title(true),]);

    perch_layout( $theme . 'header');

    perch_layout( $theme . 'nav');
?>

<?php
$url =  perch_page_url(array(
    'hide-extensions'    => true,
    'hide-default-doc'   => true,
    'add-trailing-slash' => false,
    'include-domain'     => false,
), true);//   $url returns .     /this-page.php
$page = ltrim($url, '/');//trims/removes the preceeding forward slash
$layout		= perch_get('layout');
if (!$layout) {$layout = 'grid';} else {$layout = $layout;}

$cat		= perch_get('cat');
if (!$cat) {$cat = 'products/'.$page;} else {$cat = $cat;}
$catTitle	= perch_get('catTitle');
if (!$catTitle) {$catTitle = 'Miscellaneous';} else {$catTitle = $catTitle;}

$sortId		= perch_get('sortId');
if (!$sortId) {$sortId = 'title';} else {$sortId = $sortId;}
$sortOd		= perch_get('sortOd');
if (!$sortOd) {$sortOd = 'ASC';} else {$sortOd = $sortOd;}

$filterId	= perch_get('filterId');
//if (!$filterId) {$filterId = 'price';} else {$filterId = $filterId;}
$filterMt	= perch_get('filterMt');
$filterV1	= perch_get('filterV1');
$filterV2	= perch_get('filterV2');

if ($filterMt === 'eqbetween') {
    $fValue = $filterV1 . ', ' . $filterV2;
} else {
    $fValue = $filterV1;
}

$countNo	= perch_get('countNo');
if (!$countNo) {$countNo = 9;} else {$countNo = $countNo;}

$brandTitle 	= perch_get('bT');
$brandSlug 		= perch_get('bS');
$brandImage 	= perch_get('bI');

PerchSystem::set_vars([
    'pge'			=>	$page,
    'ctS'			=>	$cat,
    'ctT'			=>	$catTitle,
    'lyO'			=>	$layout,
    'ctN'			=>	$countNo,
]);
?>

<!-- Main Container -->
<section class="main-container col2-left-layout bounceInUp animated">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-lg-push-3">

                <?php perch_content('SliderProducts'); ?>

                <article class="col-main">
                    <h2 class="col-lg-12 col-sm-12 col-md-12 page-heading">
                        <span class="page-heading-title">Products by: <?php echo $brandTitle ?></span><br />
                        <img src="<?php echo $brandImage ?>" title="<?php echo $brandTitle ?>">
                    </h2>

                    <?php
                    if ($layout === 'grid') {
                        PerchSystem::set_var('listURL', $page.'?bT='.$brandTitle.'&bS='.$brandSlug.'&bI='.$brandImage.'&layout=list');
                        perch_content_custom('ListView', [
                            'template'	=>	'shared/btn_list.html',
                        ]);
                    }
                    if ($layout === 'list') {
                        PerchSystem::set_var('gridURL', $page.'?bT='.$brandTitle.'&bS='.$brandSlug.'&bI='.$brandImage.'&layout=grid');
                        perch_content_custom('GridView', [
                            'template'	=>	'shared/btn_grid.html',
                        ]);
                    }
                    //PRODUCT ITEMS
                    perch_shop_products(array(
                        'template'			=> 'products/' . $layout . '.html',
                        'variants' 			=> true,
                        'filter-mode' 		=> 'ungrouped',
                        'filter' 			=> 'brand.slug',
                        'match' 			=> 'eq',
                        'value'				=> $brandSlug,
                        'sort'				=> 'sku',//price, title, sku
                        'sort-order'		=> 'ASC',//ASC (ascending), DESC (descending) or RAND (random)

                        'paginate'			=> true,//True or false. Whether to use pagination.
                        'page-links'		=> true,//True or false. Create numbered page links as well as previous and next links.
                        'page-link-style'	=> 'all',//shortened or all. By default a shortened set of page links are generated. If you want a link for every page, set to all.
                        'count'				=> 24
                    ));


                    ?>
                </article>
            </div>

            <div class="col-left sidebar col-lg-3 col-xs-12 col-lg-pull-9" style="min-width: 300px;">
                <aside class="col-left sidebar" style="min-width: 300px;">
                    <?php
                    perch_layout($theme . 'shop.sidebar.nav', array(
                        'pge'	 	=>	$page,
                        'ctS'	 	=>	$catSlug,
                        'ctT'		=>	$catTitle,
                        'lyO'		=>	$layout,
                        'ctN'		=>	$countNo,
                    ));
                    perch_layout('shop.sidebar.shopby');
                    perch_layout('shop.sidebar.tags');
                    perch_layout('shop.sidebar.poll');
                    ?>

                </aside>
            </div>

        </div>
    </div>
</section>
<!-- Main Container End -->

<?php
perch_layout($theme . 'footer');
?>

</div>

<?php
perch_layout($theme . 'nav.mobile');
perch_content('JSFooter');
perch_layout($theme . 'products.js');
?>

