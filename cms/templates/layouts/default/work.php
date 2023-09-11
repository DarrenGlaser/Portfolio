<!--WORK SECTION STARTS-->	
<section id="work">
    <div class="container padt30">
            
        <div class="row justify-content-around" style="z-index: 99999;">
            <?php
                perch_categories([
                    'set'           => 'worksectors',
                    'template'      => 'work_sectors_categories.html',
                ]);
            ?>
                
            <?php
                perch_categories([
                    'set'           => 'workcontent',
                    'template'      => 'work_content_categories.html',
                ]);
            ?>
        </div>
            
        <div class="row" style="z-index: 1;">
            <div class="col-12">

                <!--PORTFOLIO-->
                <div id="js-grid-masonry" class="cbp">
                    <!--<div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">-->
                    <?php

                    /*perch_content('Work');*/

                    /*perch_content_custom('Ads', [
                        'page'      => '/ads',
                        'template'  => 'default/articles/_loadmore_work.html',
                        'filter'    => 'cpshow',
                        'match'     => 'eq',
                        'value'     => 'yes',
                        'count'     => 12,
                    ]);*/

                    perch_collection('Work', [
                        'template'  => 'collections/work.html',
                        'filter'    => 'cponoff',
                        'match'     => 'eq',
                        'value'     => 'on',
                        'count'     => 600,
                    ]);

                    ?>
                </div>
                <!--//END PORTFOLIO-->
                
                <!--
                <div id="js-loadMore-masonry" class="cbp-l-loadMore-button">
                    <a href="/loadmore_work" class="cbp-l-loadMore-link" rel="nofollow">
                        <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                        <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                    </a>
                </div>
                -->
            </div>
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
                        cols: 4,
                    }, {
                        width: 1100,
                        cols: 4,
                    }, {
                        width: 800,
                        cols: 3,
                    }, {
                        width: 480,
                        cols: 2,
                        options: {
                            //caption: '',
                            gapHorizontal: 40,
                            gapVertical: 40,
                        }
                    }],
                    caption: 'zoom',
                    displayType: 'sequentially',//bottomToTop //sequentially
                    displayTypeSpeed: 100,

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
</section>
<!--//WORK SECTION ENDS-->