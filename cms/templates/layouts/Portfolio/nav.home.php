<?php

    if (perch_member_logged_in()) {
        $loggedIn = 'true';
    } else {
        $loggedIn = '';
    }
    PerchSystem::set_vars([
        'loggedIn' => $loggedIn,
    ]);

?>
<!-- NAV -->
<header id="header" class="sticky-top-slide">
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg navbar-dark bg-black border-bottom-0">
        <div class="container-fluid position-relative g-lg-4 ml-3 mr-3">
            <div class="col-auto col-lg-2">
                <!-- Logo -->
                <a class="logo" href="https://darrenglaser.co.uk" title="Darren Glaser - Portfolio & Resume"> Darren Glaser </a>
                <!-- Logo End -->
            </div>
            <div class="col col-lg-8 navbar-accordion">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"><span></span><span></span><span></span></button>
                <div id="header-nav" class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">What I Do</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Resume</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#testimonial">Client</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                        <?php
                        perch_pages_navigation(array(
                            'navgroup'          => 'visitors',
                            'hide-extensions'   => true,
                            'from-path'         => '/',
                            'levels'            => 1,
                            'template'          => 'members',
                        ));
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 d-flex justify-content-end">
                <ul class="social-icons social-icons-light">
                    <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="https://twitter.com/dazglaser" target="_blank" title="" data-bs-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="https://www.facebook.com/dazglaser" target="_blank" title="" data-bs-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-linkedin"><a data-bs-toggle="tooltip" href="https://www.linkedin.com/in/darren-glaser-927586207/" target="_blank" title="" data-bs-original-title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
</header>
<!-- END NAV -->

