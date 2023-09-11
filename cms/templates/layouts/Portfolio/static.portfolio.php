<!-- Portfolio ============================================= -->
<section id="work" class="section bg-dark-2">
    <div class="container padt30">

        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Portfolio</h2>
            <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">My Work<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->

        <!--  ================== MEDIA BOXES ================== -->

        <div class="filters-container">

            <div class="media-boxes-search">
                <span class="media-boxes-icon fa fa-search"></span>
                <input type="text" id="search" placeholder="Search by title">
                <span class="media-boxes-clear fa fa-close"></span>
            </div>

            <div class="media-boxes-drop-down" id="sort">
                <div class="media-boxes-drop-down-header">
                </div>
                <ul class="media-boxes-drop-down-menu">
                    <li><a href="#" data-sort-by="original-order" class="selected">Original Order</a></li>
                    <li><a href="#" data-sort-by="title" data-sort-toggle="true">Sort by Title</a></li>
                    <li><a href="#" data-sort-by="year" data-sort-toggle="true">Sort by Year</a></li>
                    <li><a href="#" data-sort-by="author" data-sort-toggle="true">Sort by Author</a></li>
                </ul>
            </div>

            <div class="media-boxes-drop-down" id="visibility_1">
                <div class="media-boxes-drop-down-header">
                </div>
                <ul class="media-boxes-drop-down-menu filters">
                    <li><a class="selected" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".red">Red</a></li>
                    <li><a href="#" data-filter=".green">Green</a></li>
                    <li><a href="#" data-filter=".blue">Blue</a></li>
                </ul>
            </div>

            <div class="media-boxes-drop-down">
                <div class="media-boxes-drop-down-header">
                </div>
                <ul class="media-boxes-drop-down-menu filters" data-id="second-filter">
                    <li><a class="selected" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".round">Round</a></li>
                    <li><a href="#" data-filter=".square">Square</a></li>
                </ul>
            </div>



        </div>

        <div id="grid">

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box image" data-columns="2">
                <div class="media-box-image">
                    <div data-width="320" data-height="214" data-thumbnail="gallery/thumbnails/thumb-1.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-plus mb-open-popup" data-src="gallery/img-1.jpg" data-title="Dolor sit amet"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Dolor sit amet</div>
                    <div class="media-box-year">2006</div>
                    <div class="media-box-author">by Damon Hart</div>

                    <div class="media-box-text">Lorem ipsum dolor sitam psico dell consecteture adipisicing.
                        <div class="media-box-more"> <a href="#">Read more</a></div>
                        <span class="mb-open-popup thumbnail-overlay-button popup-trigger-added" data-src="gallery/img-18.jpg" data-title="Duis aute irure" data-caption="Duis aute irure" style="transform: translate(0px, 30px);">
								View Image
							</span>
                    </div>
                </div>

                <div class="media-box-footer">
                    by Brand Philander
                </div>


            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box video">
                <div class="media-box-image">
                    <div data-width="240" data-height="150" data-thumbnail="gallery/thumbnails/thumb-6.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-video-camera mb-open-popup" data-type="iframe" data-src="https://www.youtube.com/watch?v=5guMumPFBag" data-title="Psico dell consecteture"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Psico dell consecteture</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box sound">
                <div class="media-box-image">
                    <div data-width="214" data-height="280" data-thumbnail="gallery/thumbnails/thumb-39.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-headphones mb-open-popup" data-type="iframe" data-thumb="gallery/thumbnails/thumb-39.jpg" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/263425812&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" data-title="Sed do eiusmod"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Sed do eiusmod</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico dell consecteture adipisicing.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box video" data-columns="3">
                <div class="media-box-image">
                    <div data-width="320" data-height="213" data-thumbnail="gallery/thumbnails/thumb-4.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-video-camera mb-open-popup" data-type="iframe" data-src="https://www.youtube.com/watch?v=UrIbxk7idYA" data-title="Incididunt ut labore"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Incididunt ut labore</div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box sound">
                <div class="media-box-image">
                    <div data-width="214" data-height="320" data-thumbnail="gallery/thumbnails/thumb-37.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-headphones mb-open-popup" data-type="iframe" data-thumb="gallery/thumbnails/thumb-37.jpg" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/250716832&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" data-title="Et dolore magna"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Et dolore magna</div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box video">
                <div class="media-box-image">
                    <div data-width="320" data-height="214" data-thumbnail="gallery/thumbnails/thumb-6.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-video-camera mb-open-popup" data-type="iframe" data-src="https://www.youtube.com/watch?v=2zqy21Z29ps" data-title="Enim ad minim"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Enim ad minim</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico dell consecteture adipisicing elit
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box video">
                <div class="media-box-image">
                    <div data-width="320" data-height="214" data-thumbnail="gallery/thumbnails/thumb-7.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-video-camera mb-open-popup" data-type="iframe" data-thumb="gallery/thumbnails/thumb-7.jpg" data-src="http://vimeo.com/22884674" data-title="Nostrud exercitation"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Nostrud exercitation</div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box image" data-columns="2">
                <div class="media-box-image">
                    <div data-width="320" data-height="214" data-thumbnail="gallery/thumbnails/thumb-8.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-plus mb-open-popup" data-src="gallery/img-8.jpg" data-title="Ullamco laboris"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Ullamco laboris</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box image">
                <div class="media-box-image">
                    <div data-width="320" data-height="214" data-thumbnail="gallery/thumbnails/thumb-9.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-plus mb-open-popup" data-src="gallery/img-9.jpg" data-title="Nisi ut aliquip"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Nisi ut aliquip</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box video">
                <div class="media-box-image">
                    <div data-width="320" data-height="213" data-thumbnail="gallery/thumbnails/thumb-56.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-video-camera mb-open-popup" data-type="iframe" data-src="https://www.youtube.com/watch?v=KVu3gS7iJu4" data-title="Ex ea commodo"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Ex ea commodo</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico dell consecteture adipisicing.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box image">
                <div class="media-box-image">
                    <div data-width="320" data-height="214" data-thumbnail="gallery/thumbnails/thumb-11.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-plus mb-open-popup" data-src="gallery/img-11.jpg" data-title="Duis aute irure"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Duis aute irure</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box sound">
                <div class="media-box-image">
                    <div data-width="320" data-height="214" data-thumbnail="gallery/thumbnails/thumb-12.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-headphones mb-open-popup" data-type="iframe" data-thumb="gallery/thumbnails/thumb-12.jpg" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/277987285&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" data-title="Dolor in reprehenderit"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Dolor in reprehenderit</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box image">
                <div class="media-box-image">
                    <div data-width="320" data-height="200" data-thumbnail="gallery/thumbnails/thumb-13.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-plus mb-open-popup" data-src="gallery/img-13.jpg" data-title="Dolor sit amet"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Dolor sit amet</div>

                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico dell consecteture adipisicing.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box video">
                <div class="media-box-image">
                    <div data-width="240" data-height="160" data-thumbnail="gallery/thumbnails/thumb-14.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-video-camera mb-open-popup" data-type="iframe" data-src="https://www.youtube.com/watch?v=5guMumPFBag" data-title="Psico dell consecteture"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Psico dell consecteture</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box sound">
                <div class="media-box-image">
                    <div data-width="214" data-height="280" data-thumbnail="gallery/thumbnails/thumb-32.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-headphones mb-open-popup" data-type="iframe" data-thumb="gallery/thumbnails/thumb-32.jpg" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/250716639&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" data-title="Sed do eiusmod"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Sed do eiusmod</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico dell consecteture adipisicing.
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box video">
                <div class="media-box-image">
                    <div data-width="320" data-height="213" data-thumbnail="gallery/thumbnails/thumb-16.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-video-camera mb-open-popup" data-type="iframe" data-src="https://www.youtube.com/watch?v=UrIbxk7idYA" data-title="Incididunt ut labore"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Incididunt ut labore</div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box sound">
                <div class="media-box-image">
                    <div data-width="214" data-height="320" data-thumbnail="gallery/thumbnails/thumb-10.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-headphones mb-open-popup" data-type="iframe" data-thumb="gallery/thumbnails/thumb-10.jpg" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/140760102&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" data-title="Et dolore magna"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Et dolore magna</div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box video">
                <div class="media-box-image">
                    <div data-width="320" data-height="200" data-thumbnail="gallery/thumbnails/thumb-18.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-video-camera mb-open-popup" data-type="iframe" data-src="https://www.youtube.com/watch?v=2zqy21Z29ps" data-title="Enim ad minim"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Enim ad minim</div>
                    <div class="media-box-text">
                        Lorem ipsum dolor sitam psico dell consecteture adipisicing elit
                        <div class="media-box-more"> <a href="#">Read more</a> </div>
                    </div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box video">
                <div class="media-box-image">
                    <div data-width="320" data-height="214" data-thumbnail="gallery/thumbnails/thumb-19.jpg"></div>

                    <div class="thumbnail-overlay">
                        <i class="fa fa-video-camera mb-open-popup" data-type="iframe" data-thumb="gallery/thumbnails/thumb-19.jpg" data-src="http://vimeo.com/22884674" data-title="Nostrud exercitation"></i>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>

                <div class="media-box-content">
                    <div class="media-box-title">Nostrud exercitation</div>
                </div>

                <div class="media-box-footer">
                    <a href=""><i class="fa fa-heart-o"></i> 60</a>
                    <div class="pull-right">
                        <a href=""><i class="fa fa-camera"></i> 120</a> &nbsp;&nbsp;
                        <a href=""><i class="fa fa-comment"></i> 80</a>
                    </div>
                </div>
            </div>

        </div> <!-- #grid -->

        <div id="grid2">

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box nature" data-columns="2">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-4.jpg">
                    <div data-width="240" data-height="154" data-thumbnail="gallery/thumbnails/thumb-4.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Dolor sit amet</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box outside">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-2.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-2.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Psico consecteture</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box photography">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-6.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-6.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Sed do eiusmod</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box nature">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-7.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-7.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Incididunt ut labore</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>


            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box outside" data-columns="3">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-17.jpg">
                    <div data-width="240" data-height="154" data-thumbnail="gallery/thumbnails/thumb-17.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Enim ad minim</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box photography">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-9.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-9.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Nostrud exercitation</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box nature">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-13.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-13.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Ullamco laboris</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box outside">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-22.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-22.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Et dolore magna</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box photography">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-31.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-31.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Ex ea commodo</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box nature">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-32.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-32.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Nisi ut aliquip</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box nature">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-24.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-24.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Nulla iusto</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

            <!-- -------------------------- BOX MARKUP -------------------------- -->
            <div class="media-box nature">
                <div class="media-box-image mb-open-popup" data-src="gallery/img-35.jpg">
                    <div data-width="240" data-height="151" data-thumbnail="gallery/thumbnails/thumb-35.jpg" ></div>

                    <div class="thumbnail-overlay overlay-always-visible">
                        <div class="media-box-title">Voluptatem tempore</div>
                        <div class="media-box-date">December 10, 2013</div>
                    </div>
                </div>
            </div>

        </div> <!-- #grid -->

        <!--  ================== END MEDIA BOXES ================== -->

    </div>
</section>
<!-- Portfolio end -->
