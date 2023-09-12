<?php

    $detect = perch_layout_var('detect', true);
    $deviceType = perch_layout_var('deviceType', true);
    $url = perch_layout_var('url', true);

    PerchSystem::set_var('detect', $detect);
    PerchSystem::set_var('deviceType', $deviceType);
    PerchSystem::set_var('deviceType', $url);

    if ( $detect->isMobile() ) {

        //echo $url;
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
        echo $url;
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
            'url'		=> 'url',
        ]);
    }
?>


