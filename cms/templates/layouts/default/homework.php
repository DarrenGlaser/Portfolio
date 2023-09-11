<?php
    include($_SERVER["DOCUMENT_ROOT"] . '/noindex/inc/Mobile-Detect/Mobile_Detect.php');
    $detect = new Mobile_Detect;
?>
<!--HOME WORK EXAMPLES-->
<section id="work-home">
    <div class="container border-top padt30">
        <div class="row">
            <div id="homework" class="col-12 pad0">
                <!--PORTFOLIO-->
                <?php

                if ( $detect->isMobile() ) {
                        echo '<div id="js-grid-masonry" class="cbp">';

                        perch_collection('Work', [
                            'template'  => 'collections/workhome.html',
                            'filter' => [
                                [
                                    'filter' => 'cpshow',
                                    'match'  => 'eq',
                                    'value'  => 'yes',
                                ],
                                [
                                    'filter' => 'cpDvc',
                                    'match'  => 'in',
                                    'value'  => 'Mobile,Both',
                                ],
                            ],
                            'sort'          => 'cpDat',//cpDat
                            'sort-order'    => 'DESC',
                            'count'         => 12,
                        ]);
                        echo '</div>';

                    } else {
                        echo '<div id="js-grid-masonry" class="cbp">';

                        perch_collection('Work', [
                            'template'  => 'collections/workhome.html',
                            'filter' => [
                                [
                                    'filter' => 'cpshow',
                                    'match'  => 'eq',
                                    'value'  => 'yes',
                                ],
                                [
                                    'filter' => 'cpDvc',
                                    'match'  => 'in',
                                    'value'  => 'Desktop,Both',
                                ],
                            ],
                            'sort'          => 'cpDat',//cpDat
                            'sort-order'    => 'DESC',
                            'count'         => 12,
                        ]);
                        echo '</div>';

                    }
                ?>
                <!--//END PORTFOLIO-->

            </div>
            <script type="text/javascript" src="/noindex/default/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
            <script>
                (function($, window, document, undefined) {
                    'use strict';

                    // init cubeportfolio
                    $('#js-grid-masonry').cubeportfolio({
                        filters: '#js-filters-masonry1, #js-filters-masonry2',
                        layoutMode: 'grid',/* mosaic, grid */
                        defaultFilter: '*',
                        animationType: 'quicksand',
                        gapHorizontal: 40,
                        gapVertical: 40,
                        gridAdjustment: 'responsive',
                        sortByDimension: false,
                        mediaQueries: [{
                            width: 1500,
                            cols: 3,
                        }, {
                            width: 1100,
                            cols: 2,
                        }, {
                            width: 800,
                            cols: 2,
                        }, {
                            width: 480,
                            cols: 1,
                            options: {
                                //caption: '',
                                gapHorizontal: 40,
                                gapVertical: 40,
                            }
                        }],
                        caption: 'zoom',
                        displayType: 'sequentially',//bottomToTop //sequentially
                        displayTypeSpeed: 200,

                        // lightbox
                        lightboxDelegate: '.cbp-lightbox',
                        lightboxGallery: true,
                        lightboxTitleSrc: 'data-title',
                        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

                        // singlePage popup
                        singlePageDelegate: '.cbp-singlePage',
                        singlePageDeeplinking: true,
                        singlePageStickyNavigation: true,
                        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
                        singlePageCallback: function(url, element) {
                            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
                            var t = this;

                            $.ajax({
                                url: url,
                                type: 'GET',
                                dataType: 'html',
                                timeout: 30000
                            })
                                .done(function(result) {
                                    t.updateSinglePage(result);
                                })
                                .fail(function() {
                                    t.updateSinglePage('AJAX Error! Please refresh the page!');
                                });
                        },

                        plugins: {
                            loadMore: {
                                element: '#js-loadMore-masonry',
                                action: 'click',
                                loadItems: 2,
                            }
                        },
                    });
                })(jQuery, window, document);
            </script>
        </div>
    </div>
</section>

