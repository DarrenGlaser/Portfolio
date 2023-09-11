<?php
    //URBANSPACE
    if (perch_layout_has('sponsors')) { perch_content('Sponsors'); }
    if (perch_layout_has('google-map')) { perch_content('Google Map'); }
?>

<!-- FOOTER -->
<footer id="footer" class="footer">
    <div class="container">
        
        <div class="copyright mb-2 text-center">&copy; <?php echo date("Y"); ?> Silence Media.<br />
            <a class="m-2 t" href="/privacy-policy" title="Privacy Policy">Privacy Policy</a>
        </div>
        
        <div class="col-md-12 text-center social">
            <h4>Follow Us</h4>
            <ul style="list-style:none;">
                <?php perch_content('Social-Icons'); ?>
            </ul>
        </div>
        
    </div>
    
    <!-- TO TOP -->
    <a id="to-top" href="#"><i class="go-top fa fa-angle-double-up t"></i></a>
</footer>
<!-- END FOOTER -->


<?php
    if (perch_layout_has('cookie-warning')) { perch_content('Cookie Warning'); }
    if (perch_layout_has('preloader')) { perch_content('Pre Loader'); }
?>

<?php
    perch_content('UrbanSpace_JS-Footer');

    if ( perch_layout_has( 'sponsors-config' ) ) {
        perch_content( 'Sponsors Config' );
    }

    if ( perch_layout_has( 'google-map-config' ) ) {
        perch_content( 'Google Map Config' );
    }
    if ( perch_layout_has( 'rev-slider-config' ) ) {
        perch_content( 'Rev Slider Config' );
    }
?>
</body>
</html>