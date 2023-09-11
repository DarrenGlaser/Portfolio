<!-- SIDEBAR -->
<div id="sidebar" class="col-md-3 show">
<aside>
<!--SEARCH-->
<?php perch_search_form(array('template'=>'search_side.html')); ?>
<div class="pad30"></div>
<!--//SEARCH-->		
<?php
	/*perch_layout('shop/shop.sidebar.categories', array(
    	'catSlug'	=>	$catSlug,//This is part of the side menu file name
	));*/
	
	$page		= perch_layout_var('pge', true);
	$catSlug	= perch_layout_var('ctS', true);
	$catTitle	= perch_layout_var('ctT', true);
	$layout		= perch_layout_var('lyO', true); 
	
	PerchSystem::set_var('pge', $page);
	PerchSystem::set_var('ctS', $catSlug);
	PerchSystem::set_var('ctT', $catTitle);
	PerchSystem::set_var('lyO', $layout);
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
				'value'		=> $item['catID'] ],true); 
			return $item; 
		} 
	]);
	perch_content('SidebarWidget');
	perch_content('SidebarTabs');
?>
</aside></div>
<!-- END SIDEBAR -->
