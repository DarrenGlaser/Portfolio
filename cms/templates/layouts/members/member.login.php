<?php
    $ftNm = perch_layout_var('ftNm', true);
    $ltNm = perch_layout_var('ltNm', true);
    $meID = perch_layout_var('meID', true);
	
    PerchSystem::set_var('ftNm', $ftNm);
    PerchSystem::set_var('ltNm', $ltNm);
    PerchSystem::set_var('meID', $meID);
?>

<!-- MEMBERS VISITORS LOGIN -->
<section id="about" class="section bg-dark-1">
    <div class="container">

        <?php if (perch_member_logged_in()) { ?>
            <!-- Heading -->
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="text-24 text-muted opacity-1 text-uppercase fw-600 w-100 mb-0">Visitors</h2>
                <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0"><?php echo perch_member_get('first_name') . ' ' . perch_member_get('last_name') ?><span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
            </div>
            <!-- Heading end-->
        <?php } else { ?>
            <!-- Heading -->
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="text-24 text-muted opacity-1 text-uppercase fw-600 w-100 mb-0">Visitors</h2>
                <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">Login<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
            </div>
            <!-- Heading end-->
        <?php  } ?>

        <div class="row gy-5">
            <?php if (perch_member_logged_in()) { ?>
                <div class="col-md-12 text-center">
                    <h2 class="text-7 text-white fw-600 mb-4">It seems you're already <span class="text-primary">logged </span> in</h2>
                    <div class="d-flex justify-content-center mb-5">
                        <!--<a class="btn btn-primary rounded-pill d-inline-flex" href="/profile?meID=<?php //echo $meID ?>">Profile</a>-->
                        <a class="btn btn-primary rounded-pill d-inline-flex" href="/logout">Logout</a>
                    </div>
                    <h2 class="text-7 text-white fw-600 mb-4">Update your <span class="text-primary">password </span> below</h2>
                    <div class="d-flex justify-content-center mb-5">
                        <?php perch_member_form('password.html'); ?>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-md-12 text-center">
                    <h2 class="text-7 text-white fw-600 mb-4">Enter your <span class="text-primary">email </span> and <span class="text-primary">password </span> below</h2>
                    <div class="d-flex justify-content-center">
                        <?php perch_members_login_form();  ?>
                    </div>
                </div>
            <?php  } ?>
        </div>
        <div class="brands-grid separator-border separator-border-light mt-5">
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="featured-box text-center">
                        <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="15">15</span>+</h4>
                        <p class="text-light mb-0">Years Experiance</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="featured-box text-center">
                        <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="250">250</span>+</h4>
                        <p class="text-light mb-0">Happy Clients</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="featured-box text-center">
                        <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="1768">1768</span>+</h4>
                        <p class="text-light mb-0">Projects Done</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="featured-box text-center">
                        <h4 class="text-12 text-white-50 mb-0"><span class="counter" data-from="0" data-to="16425">16425</span>+</h4>
                        <p class="text-light mb-0">Cups of Coffee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MEMBERS VISITORS LOGIN END -->
