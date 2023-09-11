<?php $newURL = perch_layout_var('newURL', true); ?>
<?php $btnActive = perch_layout_var('btnActive', true); ?>
<div class="view-mode">
<perch:template path="pagination/product-pagination.html" rescope="parent" />
<div id="btn_width" class="button button-width <?php echo $btnActive ?>" title="Full Width"><i class="fa fa-angle-double-left"></i></div>
<a id="btn_list" class="button button-list <?php echo $btnActive ?>" title="List" href="<?php echo $newURL . '&lyO=list' ?>">&nbsp;</a>
<a id="btn_grid" class="button button-grid" title="Grid" href="<?php echo $newURL . '&lyO=grid' ?>">&nbsp;</a>
<a id="btn_viewcart" class="button button-view-cart float-right" title="View Cart" href="cart">View cart</a>
</div>
