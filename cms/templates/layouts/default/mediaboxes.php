<?php
    function isMobileDevice() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
?>
<!--WORK SECTION STARTS-->
<section id="work">
    <div class="container padt30">

        <div class="filters-container center row justify-content-between">
            <div class="media-boxes-search col-md-3">
                <span class="media-boxes-icon fa fa-search"></span>
                <input type="text" id="search" placeholder="Search by title">
                <span class="media-boxes-clear fa fa-close"></span>
            </div>
            <?php
                perch_content('SortOrder MediaBoxes');

                perch_categories([
                    'set'           => 'workformat',
                    'template'      => 'mediaboxes_format.html',
                ]);

                perch_categories([
                    'set'           => 'workcontent',
                    'template'      => 'mediaboxes_content.html',
                ]);

                /*
                 * perch_categories([
                    'set'           => 'worksectors',
                    'template'      => 'mediaboxes_sectors.html',
                ]);
                */
            ?>
        </div>


        <div class="row" style="z-index: 1;">
            <div class="col-12 pad0 pb-5">

                <!--MEDIABOXES-->
                <div id="grid">
                <?php
                if(isMobileDevice()){
                    //Mobile Device
                    perch_collection('Work', [
                        'template'  => 'collections/mediaboxes.html',
                        'filter' => [
                            [
                                'filter' => 'cponoff',
                                'match'  => 'eq',
                                'value'  => 'on',
                            ],
                            [
                                'filter' => 'cpDvc',
                                'match'  => 'in',
                                'value'  => 'Mobile,Both',
                            ],
                        ],
                        'sort'      => 'cpDat',
                        'sort-order'=> 'DESC',
                        'count'     => 600,
                    ]);

                } else {
                    //Desktop Device
                    perch_collection('Work', [
                        'template'  => 'collections/mediaboxes.html',
                        'filter' => [
                            [
                                'filter' => 'cponoff',
                                'match'  => 'eq',
                                'value'  => 'on',
                            ],
                            [
                                'filter' => 'cpDvc',
                                'match'  => 'in',
                                'value'  => 'Mobile,Desktop,Both',
                            ],
                        ],
                        'sort'      => 'cpDat',
                        'sort-order'=> 'DESC',
                        'count'     => 600,
                    ]);

                }
                ?>
                </div>
                <!--//END MEDIABOXES-->

            </div>
		</div>
	</div>	
</section>
<!--//WORK SECTION ENDS-->