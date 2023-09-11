<?php
    include($_SERVER["DOCUMENT_ROOT"] . '/noindex/inc/Mobile-Detect/Mobile_Detect.php');
    $detect = new Mobile_Detect;
?>
<!--//CONTACT SECTION STARTS-->
<section id="contact-section">
    <div class="container">
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



                        <script type="text/javascript">

                            $("#form1_subscribe").on("submit", function(event){
                                event.preventDefault();

                                if ( $('#form1_email').val() !== '' && $('.middlename').val() === '' ) {

                                    $("form").find( "[type=submit]" ).attr('value', 'Processing...');

                                    var formValues = $(this).serialize();

                                    $.post('/', formValues, function (data) {
                                        setTimeout(function(){
                                            $('#form1_subscribe').css('display', 'none');
                                            $('.notification_ok').css('display', 'block');
                                        }, 2000);
                                    }).fail(function() {
                                        // Show error modal if there was any kind of error
                                        $('.notification_error').css('display', 'block');
                                        $('#form1_subscribe').trigger("reset");
                                        $("form").find( "[type=submit]" ).attr('value', 'Submit');
                                    }).done(function() {
                                        // Reset all whether the form submitted successfully or not
                                        setTimeout(function(){
                                            $('#form1_subscribe').fadeIn(1000);
                                            $('.notification_ok').css('display', 'none');
                                            $("form").find( "[type=submit]" ).attr('value', 'Submit');
                                            $('#form1_subscribe').trigger("reset");
                                        }, 8000);
                                    });

                                } else {
                                    return false;
                                }
                            });

                        </script>

                    </div>
                </div>
            </div>
        </div>
        <div class="pad25"></div>
    </div>
</section>
<!--//END CONTACT SECTION-->

<?php

if ( $detect->isMobile() ) {
    //
}

?>
