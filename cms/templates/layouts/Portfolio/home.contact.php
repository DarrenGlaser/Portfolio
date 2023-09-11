<!-- Contact Me ============================================= -->
<section id="contact" class="section bg-dark-2">
    <div class="container">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Contact</h2>
            <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Get in Touch<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        <div class="row gy-5">
            <div class="col-md-4 col-xl-3 order-1 order-md-0 text-center text-md-start">
                <h2 class="mb-3 text-5 text-white text-uppercase">Address</h2>
                <p class="text-3 text-light mb-4">West Bond Street,<br>Macclesfield,<br>Cheshire, SK11 8EQ</p>
                <p class="text-3 text-light mb-1"><span class="text-primary text-4 me-2"><i class="fas fa-phone"></i></span><a href="tel:07889181144" title="Call Proper Sound">+44 (0) 7889 181144</a></p>
                <p class="text-3 text-light mb-4"><span class="text-primary text-4 me-2"><i class="fas fa-envelope"></i></span><span class="privacyemail"></span></p>
                <h2 class="mb-3 text-5 text-white text-uppercase">Follow Me</h2>
                <ul class="social-icons social-icons-muted justify-content-center justify-content-md-start">
                    <li class="social-icons-linkedin"><a data-bs-toggle="tooltip" href="https://www.linkedin.com/in/darren-glaser-927586207/" target="_blank" title="Linked In"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="https://twitter.com/dazglaser" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="https://www.facebook.com/dazglaser" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <!--<li class="social-icons-github"><a data-bs-toggle="tooltip" href="http://www.github.com/" target="_blank" title="GitHub"><i class="fab fa-github"></i></a></li>-->
                </ul>
            </div>
            <div class="col-md-8 col-xl-9 order-0 order-md-1">
                <h2 class="mb-3 text-5 text-white text-uppercase text-center text-md-start">Send us a note</h2>

                <div class="notification_ok text-center response bg-dark rounded p-4 mb-4">
                    <h3 class="text-5 text-white">Success!</h3>
                    <p class="text-primary mb-0">Thanks for your enquiry!</p>
                    <p class="text-white-50 mb-0">Darren is looking into it and if a response is required will get back to you shortly.</p>
                    <p class="text-white-50 mb-0">I've sent you a confirmation email. Please also check your spam folder.</p>
                </div>

                <div class="notification_error text-center response bg-dark rounded p-4 mb-4">
                    <h3 class="text-5 text-white">Error!</h3>
                    <p class="text-primary mb-0">Something went wrong submitting your enquiry,<br>it’s probably just a temporary problem so you should try again in a few minutes.</p>
                    <p class="text-white-50 mb-0">If you find that the form just won’t work you could email us directly at <span class="privacyemail"></span>.</p>
                    <p class="text-white-50 mb-0">Sorry for any inconvenience this has caused.</p>
                </div>

                <?php perch_form('contact-form'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Contact Me end -->
