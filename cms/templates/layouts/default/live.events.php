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
        </div>

        <div class="row" style="z-index: 1;">
            <div class="col-12 pad0 pb-5">

                <!--MEDIABOXES-->
                <div id="grid">
                <?php

                    perch_collection('Events', [
                        'template'  => 'collections/live_events.html',
                        'filter' => [
                            [
                                'filter' => 'eventOnOff',
                                'match'  => 'eq',
                                'value'  => 'On',
                            ],
                        ],
                        'count'     => 20,
                    ]);

                ?>
                </div>
                <!--//END MEDIABOXES-->

            </div>
		</div>
	</div>	
</section>
<!--//WORK SECTION ENDS-->