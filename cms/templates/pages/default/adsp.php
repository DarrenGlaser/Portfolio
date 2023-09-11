<?php

    $cpUid = perch_get('cpUid');
    if (!$cpUid) {$cpUid = '';} else {$cpUid = $cpUid;}

    $cpMtl = perch_get('cpMtl');
    if (!$cpMtl) {$cpMtl = '';} else {$cpMtl = $cpMtl;}

    $cpFmt = perch_get('cpFmt');
    if (!$cpFmt) {$cpFmt = '';} else {$cpFmt = $cpFmt;}

    $adData = array(
        'cpUid' => $cpUid,
        'cpMtl' => $cpMtl,
        'cpFmt' => $cpFmt,
    );

    PerchSystem::set_vars([
        'cpUid' => $cpUid,
        'cpMtl' => $cpMtl,
        'cpFmt' => $cpFmt,
    ]);

    //perch_layout( $theme . 'ad', $adData);

?>

<!--WORK SECTION STARTS-->
<section id="work">
    <div class="container">
        <div class="row">
            <div class="adcontent col-sm-12 col-lg-12">

                <?php
                perch_collection('Work', [
                    'template'  => 'collections/ad.html',
                    'filter'    => '_id',
                    'match'     => 'eq',
                    'value'     => $cpUid,
                    'count'     => 1,
                ]);
                ?>

            </div>
        </div>
    </div>
</section>
<!--//WORK SECTION ENDS-->

