<?php if (perch_layout_has('rev-slider')) { ?>
<section class="sm-slider">
<!-- START REVOLUTION SLIDER 5.4.1 -->
<div id="rev_slider_sm_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <div id="rev_slider_sm" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
        <ul>
            <?php perch_content('Rev Slider'); ?>
        </ul>
        <div class="tp-bannertimer" style="height:7px; background-color:rgba(255, 255, 255, 0.25);"></div>
    </div>
</div>
</section>
<!-- END REVOLUTION SLIDER -->
<?php } ?>

<?php if (perch_layout_has('rev-static')) { perch_content('Rev Static'); } ?>
