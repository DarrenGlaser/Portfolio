<!-- Main Container -->
<section class="main-container col2-left-layout bounceInUp animated">
<div class="container">
<div class="row">	
<div class="col-sm-9 col-sm-push-3">

<?php perch_content('SliderEssentials'); ?>
			
<article class="col-main">	
<h2 class="col-lg-12 col-sm-12 col-md-12 page-heading"> <span class="page-heading-title"><?php echo perch_layout_var('catTitle'); ?></span> </h2>
	
<?php
	//PRODUCT ITEMS
	perch_shop_products(array( 
    	'template'			=> 'products/grid.html',//The name of a template to use to display the content.
		'category'			=> perch_layout_var('cat'),//Filter by one or more categories. See Category filtering
		'category-match'	=> 'any',//Either any or all. See Category filtering
    	
		'variants' 			=> true,//True or false. Set to true to enable the perch:variants tags in the template. Default is false.
		'sort'				=> perch_layout_var('sortId'),//The ID of the field to sort on. price, title, sku
		'sort-order'		=> perch_layout_var('sortOd'),//ASC (ascending), DESC (descending) or RAND (random)
		
		'filter'			=> perch_layout_var('filterId'),//The ID of a field to filter the results by.
		'match'				=> perch_layout_var('filterMt'),//Used with filter, see the below table for values
		'value'				=> perch_layout_var('filterV1'),//Used with filter and match. The value to match.
		
		'paginate'			=> true,//True or false. Whether to use pagination.
		'page-links'		=> true,//True or false. Create numbered page links as well as previous and next links.
		'page-link-style'	=> 'shortened',//shortened or all. By default a shortened set of page links are generated. If you want a link for every page, set to all.
		'count'				=> perch_layout_var('countNo'),//Integer. (When used with paginate) The number of items to show per page if pagination is being used.
	));
?>
</article>
</div>
<?php 
	$sideAddress = perch_layout_var('sideMenu', 'true');
	perch_layout($sideAddress); 
?>
</div></div></section>
<!-- Main Container End -->