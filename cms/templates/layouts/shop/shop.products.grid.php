<?php
	$page			= perch_get('page');
	$layout			= perch_get('layout');
	if (!$layout) {$layout = 'grid';} else {$layout = $layout;}
	
	$sortId		= perch_get('sortId');
	if (!$sortId) {$sortId = 'title';} else {$sortId = $sortId;}
	$sortOd		= perch_get('sortOd');
	if (!$sortOd) {$sortOd = 'ASC';} else {$sortOd = $sortOd;}

	$filterId	= perch_get('filterId');
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

	//PRODUCT ITEMS
	perch_shop_products(array( 
    	'template'			=> 'products/' . $layout . '.html',//The name of a template to use to display the content.
    	
		'variants' 			=> true,//True or false. Set to true to enable the perch:variants tags in the template. Default is false.
		'sort'				=> $sortId,//The ID of the field to sort on. price, title, sku
		'sort-order'		=> $sortOd,//ASC (ascending), DESC (descending) or RAND (random)
		
		'filter-mode' 		=> 'ungrouped',
		'filter'			=> $filterId,//The ID of a field to filter the results by.
		'match'				=> $filterMt,//Used with filter, see the below table for values
		'value'				=> $fValue,//Used with filter and match. The value to match.
		
		'paginate'			=> true,//True or false. Whether to use pagination.
		'page-links'		=> true,//True or false. Create numbered page links as well as previous and next links.
		'page-link-style'	=> 'shortened',//shortened or all. By default a shortened set of page links are generated. If you want a link for every page, set to all.
		'count'				=> $countNo,//Integer. (When used with paginate) The number of items to show per page if pagination is being used.
	));
	
	PerchSystem::set_var('listURL', $page.'?filterId='.$filterId.'&filterMt=contains&filterV1='.$filterV1.'&sortId=title&sortOd=ASC&countNo=9&layout=list');
	perch_content_custom('ListView', [
    	'template'	=>	'shared/btn_list.html',
	]);

	PerchSystem::set_var('gridURL', $page.'?filterId='.$filterId.'&filterMt=contains&filterV1='.$filterV1.'&sortId=title&sortOd=ASC&countNo=9&layout=grid');
	perch_content_custom('GridView', [
    	'template'	=>	'shared/btn_grid.html',
	]);
	
?>

<!-- //END PRODUCTS GRID -->