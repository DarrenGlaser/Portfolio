<!--SEARCH-->
<?php perch_search_form(array('template'=>'search_side.html')); ?>
<div class="pad30"></div>
<!--//SEARCH-->

<?php 

	$page			= perch_layout_var('pge', true);
	$catSlug		= perch_layout_var('ctS', true);
	$catTitle		= perch_layout_var('ctT', true);
	$layout			= perch_layout_var('lyO', true);
	$countNo		= perch_layout_var('ctN', true);
	$brand_slugs	= perch_layout_var('bdS', true);

?>

<?php

	if (substr($_SERVER['REQUEST_URI'],-9) === '&lyO=list' || substr($_SERVER['REQUEST_URI'],-9) === '&lyO=grid'){
    	$fullURL = substr($_SERVER['REQUEST_URI'],0,-9);//Gets rid of last 9 characters
	} else if ($_SERVER['REQUEST_URI'] === '/products') {
    	$fullURL = $_SERVER['REQUEST_URI'] . '?';
	} else {
    	$fullURL = $_SERVER['REQUEST_URI'];//Returns the whole URL including querys
	}
	
	

	$cmP = $catSlug;

	PerchSystem::set_vars([
		'pge'	 	=>	$page,
		'ctS'	 	=>	$catSlug,
		'ctT'		=>	$catTitle,
		'lyO'		=>	$layout,
		'ctN'		=>	$countNo,
		'bdS'		=>	$brand_slugs,
		'pdC'		=>	$pdC,
		'LR'		=>	$LR,
		'cmP'		=>	$cmP
	]);



	// CATEGORIES MENU
	perch_categories([ 
		'set'		=> 'products', 
		'template'	=> 'sidebar', 
		'filter'	=> 'catParentID', 
		'match'		=> 'eq', 
		'value'		=> '0', 
		'each'		=> function($item) { 
			$item['subs']	= perch_categories([ 
				'set'		=> 'products', 
				'template'	=> 'sidebar_subs', 
				'filter'	=> 'catParentID', 
				'match'		=> 'eq',
				'value'		=> $item['catID'] 
			],true); 
			return $item; 
		}
	]);



	


	



	// BRANDS FILTER
	$brands_fieldset = perch_shop_brands([
    	'template' 	=> 'brands/_filters_fieldset_brands',
	], true);
	// set a variable to pass it into our main form template
	PerchSystem::set_var('brands_fieldset', $brands_fieldset);

	$color_fieldset = perch_content('Products-By-Color',true);
	PerchSystem::set_var('color_fieldset', $color_fieldset);
	
	// CATEGORIES FILTER
	/*
	$cats_fieldset = perch_categories([
    	'set'		=> 'products',
    	'template'	=> '_filters_fieldset_categories',
	], true);
	// set a variable to pass it into our main form template
	PerchSystem::set_var('cats_fieldset', $cats_fieldset);
	*/
	
	// PRICES - The Full Form (BRANDS FILTER & CATEGORIES FILTER above are inserted into this form - forms.product_filters.html )
	perch_form('product_filters');

	
	// EXTRAS
	perch_content('SidebarWidget');
	perch_content('SidebarTabs');
?>
