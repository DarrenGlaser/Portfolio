<?php
    if (perch_layout_has('sponsors')) { perch_content('Sponsors'); }
    if (perch_layout_has('google-map')) { perch_content('Google Map'); }
?>

<!--//CONTACT SECTION STARTS-->
<section id="contact-section">
    <div class="container border-top padt30">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 text-center center">
                        <div class="lead text-center animated fadeIn" data-wow-offset="80" data-wow-duration="2s" style=""><?php perch_content('Contact Text'); ?></div>
                        <div class="contact_form text-center center">
                            <div id="signup-intro" class="col-sm-12 col-lg-12 center text-center mb-4"><?php perch_content('Signup Intro'); ?></div>
                            <?php //perch_mailchimp_form('forms/subscribe'); //Better to do it through the 'forms' app and also capture the data in the cms along with IP address ?>
                            <?php perch_form('subscription_form.html'); ?>
                            <?php perch_content('Signup Success'); ?>
                            <?php perch_content('Signup Error'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pad25"></div>
    </div>
</section>
<!--//END CONTACT SECTION-->

<!-- FOOTER -->
<footer id="footer">
    <div class="container border-top padt30">
        
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
    <div id="to-top" class="to-top desktop-only"><i class="go-top fa fa-angle-double-up t"></i></div>
</footer>
<!-- END FOOTER -->


<?php
    if (perch_layout_has('cookie-warning')) { perch_content('Cookie Warning'); }
    if (perch_layout_has('preloader')) { perch_content('Pre Loader'); }
?>

<?php
    perch_content('JS-Footer');

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

<?php if (perch_layout_has('preloader')) { ?>
<!-- PRE LOADER -->
<script src="https://www.silence-media.com/noindex/default/js/royal_preloader.min.js"></script>
<script type="text/javascript">

    Royal_Preloader.config({
        mode           : 'logo',//logo text line number
        logo           : 'https://www.silence-media.com/noindex/default/imgs/misc/preloader1.gif',
        logo_size      : [80, 80],
        text_colour    : '#FFF',
        showProgress   : true,
        showPercentage : true,
        background     : '#222'
    });

</script>
<?php } ?>
</body>
</html>