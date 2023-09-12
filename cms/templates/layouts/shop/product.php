<?php

    $detect = perch_layout_var('detect', true);
    $deviceType = perch_layout_var('deviceType', true);
    $FacebookURL    = 'https://www.facebook.com/sharer/sharer.php?u=' . perch_layout_var('url', true);
    $TwitterURL     = 'https://www.twitter.com/intent/tweet?url=' . perch_layout_var('url', true) . '&via=DazGlaser&text=' . perch_layout_var('ogDes', true);
    $LinkedInURL    = 'https://www.linkedin.com/shareArticle?mini=true&url=' . perch_layout_var('url', true) . '&title=' . perch_layout_var('cpMtl', true) . '&summary=' . perch_layout_var('ogDes', true);
    $GooglePlusURL  = 'https://plus.google.com/share?url=' . perch_layout_var('url', true);

    PerchSystem::set_var('detect', $detect);
    PerchSystem::set_var('deviceType', $deviceType);

    if ( $detect->isMobile() ) {
        //echo 'Mobile';
        if ( $cpDvc === 'Desktop' ) {
            echo '<h2 class="center text-center">Whoops!</h2><p class="center text-center">This ad won\'t work on your phone. It\'s a desktop format.</p>';
        } else {

            perch_shop_product(perch_get('s'), [
                'template'		=> 'products/product-details.html',
                'variants' 		=> true,
                'filter' => [
                    [
                        'filter' => 'cpDvc',
                        'match'  => 'in',
                        'value'  => 'Mobile,Both',
                    ],
                ],
            ]);
        }

    } else {
        //echo 'Desktop';
        perch_shop_product(perch_get('s'), [
            'template'		=> 'products/product-details.html',
            'variants' 		=> true,
            'filter' => [
                [
                    'filter' => 'cpDvc',
                    'match'  => 'in',
                    'value'  => 'Desktop,Both',
                ],
            ],
        ]);
    }

?>
                                <li class="border-0"><span class="fw-600 me-2 text-primary">Share On:</span>
                                    <perch:if exists="sharesites">
                                        <perch:categories id="sharesites">
                                            <perch:if id="catTitle" match="contains" value="facebook">
                                                <a class="share-popup" data-bs-toggle="tooltip" href="<?php echo $FacebookURL ?>" target="_blank" title="" data-bs-original-title="Facebook"><i class="text-white fab fa-facebook-f"></i>&nbsp;</a>&nbsp;
                                            </perch:if>
                                            <perch:if id="catTitle" match="contains" value="twitter">
                                                <a class="share-popup" data-bs-toggle="tooltip" href="<?php echo $TwitterURL ?>" target="_blank" title="" data-bs-original-title="Twitter"><i class="text-white fab fa-twitter"></i>&nbsp;</a>&nbsp;
                                            </perch:if>
                                            <perch:if id="catTitle" match="contains" value="linkedin">
                                                <a class="share-popup" data-bs-toggle="tooltip" href="<?php echo $LinkedInURL ?>" target="_blank"><i class="text-white fab fa-linkedin-in"></i>&nbsp;</a>&nbsp;
                                            </perch:if>
                                            <perch:if id="catTitle" match="contains" value="googleplus">
                                                <a class="share-popup" data-bs-toggle="tooltip" href="<?php echo $GooglePlusURL ?>" target="_blank"><i class="text-white fab fa-google-plus"></i>&nbsp;</a>&nbsp;
                                            </perch:if>
                                        </perch:categories>
                                    </perch:if>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <perch:if id="cpTag" value="silence-media" match="contains">
                    <script type="text/javascript">
                        $('.tag-container').css({
                            marginTop:		'-800px',
                            opacity:		0
                        });
                        $('.tag-container').delay(1600).animate({
                            marginTop:		'0',
                            opacity:		0
                        }, 800, 'easeOutQuint');

                        $('.tag-container').delay(200).animate({
                            opacity:		1
                        }, 600, 'easeOutQuint');
                    </script>
                </perch:if>
                <perch:if id="cpTag" value="bs.serving-sys.com" match="contains">
                    <script type="text/javascript">
                        $('.tag-container').css({
                            marginTop:		'-800px',
                            opacity:		0
                        });
                        $('.tag-container').delay(1600).animate({
                            marginTop:		'0',
                            opacity:		0
                        }, 800, 'easeOutQuint');

                        $('.tag-container').delay(200).animate({
                            opacity:		1
                        }, 600, 'easeOutQuint');
                    </script>
                </perch:if>
                <perch:if id="cpTag" value="google_ad_url" match="contains">
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('.tag-container').each(function () {
                                if ($(this).text().match('google_ad_url')) {
                                    //alert('Google Ad');
                                    var script = document.createElement('script');
                                    script.setAttribute('type', 'text/javascript');
                                    script.setAttribute('src', '//pagead2.googlesyndication.com/pagead/show_expandable_ads.js');
                                    this.appendChild(script);
                                }
                            });
                        });
                    </script>
                </perch:if>
                <!-- Load Facebook SDK for JavaScript
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>-->

            </div>
        </div>
    </div>
</section>



