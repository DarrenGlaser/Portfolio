<?php
    include($_SERVER["DOCUMENT_ROOT"] . '/noindex/inc/Mobile-Detect/Mobile_Detect.php');
    $detect = new Mobile_Detect;
?>
<!--//BOOTSTRAP SECTION STARTS-->
<?php perch_content('Bootstrap Section'); ?>
<!--//END BOOTSTRAP SECTION-->

<?php

if ( $detect->isMobile() ) {
    //
} else {
    //
}

?>
