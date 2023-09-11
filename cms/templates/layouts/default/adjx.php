<?php
    include($_SERVER["DOCUMENT_ROOT"] . '/noindex/inc/Mobile-Detect/Mobile_Detect.php');
    $detect = new Mobile_Detect;

    $cpUid = perch_layout_var('cpUid', true);
    $cpMtl = perch_layout_var('cpMtl', true);
    $cpDvc = perch_layout_var('cpDvc', true);
    $cpFmt = perch_layout_var('cpFmt', true);
    $cpTag = perch_layout_var('cpTag', true);
?>

<!--WORK SECTION STARTS-->
<section id="work">
    <div class="container">
        <div class="row">
            <div class="adcontent col-sm-12 col-lg-12">

                <?php

                if ( $detect->isMobile() ) {

                    //echo 'Mobile';
                    if ( $cpDvc === 'Desktop' ) {
                        echo '<h2 class="center text-center">Whoops!</h2><p class="center text-center">This ad won\'t work on your phone. It\'s a desktop format.</p>';
                    } else {

                        perch_collection('Work', [
                            'template'  => 'collections/ad.html',
                            'filter' => [
                                [
                                    'filter' => '_id',
                                    'match'  => 'eq',
                                    'value'  => $cpUid,
                                ],
                                [
                                    'filter' => 'cpDvc',
                                    'match'  => 'in',
                                    'value'  => 'Mobile,Both',
                                ],
                            ],
                            'count'     => 1,
                        ]);
                    }

                } else {

                    //echo $cpTag;

                    //echo
                    perch_collection('Work', [
                        'template'  => 'collections/ad.html',
                        'filter' => [
                            [
                                'filter' => '_id',
                                'match'  => 'eq',
                                'value'  => $cpUid,
                            ],
                            [
                                'filter' => 'cpDvc',
                                'match'  => 'in',
                                'value'  => 'Desktop,Mobile,Both',
                            ],
                        ],
                        'count'     => 1,
                    ]);


                }
                ?>

            </div>
        </div>
    </div>
</section>
<!--//WORK SECTION ENDS-->
