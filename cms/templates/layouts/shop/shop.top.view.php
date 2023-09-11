<?php
    $newURL     = perch_layout_var('newURL', true);
    $btnActive  = perch_layout_var('btnActive', true);
    $gridActive = perch_layout_var('gridActive', true);
    $listActive = perch_layout_var('listActive', true);
    $countNo    = perch_layout_var('ctN', true);
    $lyO        = perch_layout_var('lyO', true);

    if ($btnActive === 'active') {
        $LR = 'left';
    } else {
        $LR = 'right';
    }
?>

<div class="view-mode">

    <div id="btn_width" class="button button-width" title="Full Width"><i class="fa fa-angle-double-<?php echo $LR ?>"></i></div>
    <div class="styled-select blue semi-square">
        <select type="select" id="item_qty" name="item_qty" class="qty-field">
            <option value="<?php echo $countNo ?>"><?php echo $countNo ?></option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="9">9</option>
            <option value="18">18</option>
        </select>
    </div>

    <script>
        $('#item_qty').on('input', function() {
            window.open( '<?php echo $newURL ?>&lyO=<?php echo $lyO ?>&ctN=' + $(this).val() +'','_parent');
        });
    </script>
    <a id="btn_list" class="button button-list <?php echo $listActive ?>" title="List" href="<?php echo $newURL . '&lyO=list' ?>">&nbsp;</a>
    <a id="btn_grid" class="button button-grid <?php echo $gridActive ?>" title="Grid" href="<?php echo $newURL . '&lyO=grid' ?>">&nbsp;</a>
    <a id="btn_viewcart" class="button button-view-cart float-right" title="View Cart" href="cart">View cart</a>

</div>
