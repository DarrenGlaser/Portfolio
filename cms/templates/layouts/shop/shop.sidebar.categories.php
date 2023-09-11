<h4>Product Categories</h4>
<div class="box-content box-category">
<ul>
<?php
	$catSlug = perch_layout_var('catSlug', true);
	
	//perch_categories(array( 
		//'template'			=> 'product-cats.html',
		//'set'				=> 'products',
	//));
	
	if(perch_get('category')) {   
		
		$subcats = perch_categories([  
			'set' 			=> 'products',  
			'filter'		=> [ 
				[
				'filter'	=> 'catPath', 
				'match'		=> 'contains', 
				'value'		=> 'products/'. (perch_get('category')) . '/?',
				], 
				[
				'filter'	=> 'substr_count(catTreePostion,"-")', 
				'value'		=> 2, 
				'template'	=> 'product-cats.html',
				], 
			], 
			'skip-template' => true, 
			'return-html'	=> true, 
		]);   
																									
																									
		if (PerchUtil::count($subcats)) { 
			echo $subcats['html']; 
		} else { 
			perch_shop_products([  'category' => 'products/' . (perch_get('category'))  ]);  
		}
		
	}
																									
	
	
	//echo '</ul></li>';
?>	
</ul></div>
