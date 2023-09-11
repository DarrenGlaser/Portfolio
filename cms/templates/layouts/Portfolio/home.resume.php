<!-- Resume ============================================= -->
<section id="resume" class="section bg-dark-1">
    <div class="container">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-muted opacity-1 text-uppercase fw-600 w-100 mb-0">Summary</h2>
            <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Resume<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>

        <div class="row gx-5">
            <div class="col-md-12">
                <h2 class="text-6 text-white fw-600 mb-4">My Experience</h2>
                <?php perch_content('Resume'); ?>
            </div>
        </div>

        <!-- My Hobbies -->
        <h2 class="text-6 text-white fw-600 mt-4 mb-4">My Hobbies</h2>
        <div id="bars" class="row gx-5">
            <?php perch_content('Hobbies'); ?>
        </div>

        <div class="text-center mt-5"><a href="/noindex/pdf/CV_DarrenGlaser.pdf" class="btn btn-outline-secondary rounded-pill shadow-none" target="_blank">Download CV <span class="ms-1"><i class="fas fa-download"></i></span></a></div>
    </div>
</section>
<!-- Resume end -->
