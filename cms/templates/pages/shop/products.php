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
if (!$countNo) {$countNo = 36;} else {$countNo = $countNo;}

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
                    <h2 class="col-lg-12 col-sm-12 col-md-12 page-heading"> <span class="page-heading-title">All Products</span> </h2>


                    <?php
                    if ($layout === 'grid') {
                        PerchSystem::set_var('listURL', $page.'?cat='.$cat.'&catTitle='.$catTitle.'&filterId='.$filterId.'&filterMt='.$filterMt.'&filterV1='.$filterV1.'&filterV2='.$filterV2.'&sortId=title&sortOd=ASC&countNo=9&layout=list');
                        perch_content_custom('ListView', [
                            'template'	=>	'shared/btn_list.html',
                        ]);
                    }
                    if ($layout === 'list') {
                        PerchSystem::set_var('gridURL', $page.'?cat='.$cat.'&catTitle='.$catTitle.'&filterId='.$filterId.'&filterMt='.$filterMt.'&filterV1='.$filterV1.'&filterV2='.$filterV2.'&sortId=title&sortOd=ASC&countNo=9&layout=grid');
                        perch_content_custom('GridView', [
                            'template'	=>	'shared/btn_grid.html',
                        ]);
                    }
                    //PRODUCT ITEMS
                    perch_shop_products(array(
                        'template'			=> 'products/' . $layout . '.html',//The name of a template to use to display the content.

                        'variants' 			=> true,//True or false. Set to true to enable the perch:variants tags in the template. Default is false.
                        'sort'				=> $sortId,//The ID of the field to sort on. price, title, sku
                        'sort-order'		=> $sortOd,//ASC (ascending), DESC (descending) or RAND (random)

                        //'filter'			=> $filterId,//The ID of a field to filter the results by.
                        //'match'				=> $filterMt,//Used with filter, see the below table for values
                        //'value'				=> $fValue,//Used with filter and match. The value to match.

                        'paginate'			=> true,//True or false. Whether to use pagination.
                        'page-links'		=> true,//True or false. Create numbered page links as well as previous and next links.
                        'page-link-style'	=> 'shortened',//shortened or all. By default a shortened set of page links are generated. If you want a link for every page, set to all.
                        'count'				=> $countNo,//Integer. (When used with paginate) The number of items to show per page if pagination is being used.
                    ));
                    ?>
                </article>
            </div>

            <div class="col-left sidebar col-lg-3 col-xs-12 col-lg-pull-9" style="min-width: 300px;">
                <aside class="col-left sidebar" style="min-width: 300px;">
                    <?php
                    perch_layout($theme . 'shop.sidebar.nav', array(
                        'pge'	 	=>	$page,
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

