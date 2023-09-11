<!-- About ============================================= -->
<section id="about" class="section bg-dark-1">
    <div class="container">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-muted opacity-1 text-uppercase fw-600 w-100 mb-0">About Me</h2>
            <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Know Me More<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->

        <div class="row gy-5">
            <?php perch_content('About'); ?>
            <div class="col-lg-5 col-xl-4">
                <div class="ps-lg-4">
                    <ul class="list-style-2 list-style-light text-light">
                        <li><span class="fw-600 me-2">Name:</span>Darren Glaser</li>
                        <li><span class="fw-600 me-2">Email:</span><span class="privacyemail"></span></li>
                        <li><span class="fw-600 me-2">Age:</span>Still young at heart</li>
                        <li class="border-0"><span class="fw-600 me-2">From:</span>Cheshire, UK</li>
                    </ul>
                    <a href="/noindex/pdf/CV_DarrenGlaser.pdf" class="btn btn-primary rounded-pill" target="_blank">Download CV <span class="ms-1"><i class="fas fa-download"></i></span></a>
                </div>
            </div>
        </div>
        <div class="brands-grid separator-border separator-border-light mt-5">
            <div class="row">
                <?php perch_content('Milestones'); ?>
            </div>
        </div>
    </div>
</section>
<!-- About end -->
