<?php


/*
    perch_collection('Work', [
        'template'      => 'collections/work.html',
        //'sort'          =>  'cpMtl',
        //'sort-order'    =>  'RAND',

        //'filter'        => 'cponoff',
        //'match'         => 'eq',
        //'value'         => 'on',
        //'count'         => 4,
    ]);
*/
    perch_content_custom('Ads', [
        'page'      => '/ads',
        'template'  => 'default/articles/_loadmore_work.html',

        //'sort'              =>  'cpMtl',
        //'sort-order'        =>  'RAND',

        'filter'            =>  'cponoff',
        'match'             =>  'eq',
        'value'             =>  'on',
        'count'             =>  22,
    ]);


?>      