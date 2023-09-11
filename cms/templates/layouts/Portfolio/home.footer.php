<?php

    $detect = perch_layout_var('detect', true);
    $deviceType = perch_layout_var('deviceType', true);
    PerchSystem::set_var('detect', $detect);
    PerchSystem::set_var('deviceType', $deviceType);

?>
<!-- Footer ============================================= -->
<footer id="footer" class="section footer-dark bg-dark-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-start">
                <p class="mb-3 mb-lg-0">Copyright © <?php echo date("Y"); ?> <a href="#" class="fw-500">Darren Glaser</a>. <?php if ( $deviceType == 'phone' ) {echo '<br />';}   ?><span>All Rights Reserved.</span></p>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-separator nav-separator-light justify-content-center justify-content-lg-end">
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#terms" href="#">Terms</a></li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="modal" data-bs-target="#policy" href="#">Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
