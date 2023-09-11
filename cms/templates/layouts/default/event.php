<?php

    $evUid = perch_layout_var('evUid', true);
    $sDate = date("M d, Y");
    $sTime = date("H:i:s");

    PerchSystem::set_vars([
        'sDate' => $sDate,
        'sTime' => $sTime,
    ]);

    perch_collection('Events', [
        'template'  => 'collections/event.html',
        'filter' => [
            [
                'filter' => '_id',
                'match'  => 'eq',
                'value'  => $evUid,
            ],
            /*
            [
                'filter' => 'cpDvc',
                'match'  => 'in',
                'value'  => 'Mobile,Both',
            ],*/
        ],
        'sDate'     => $sDate,
        'sTime'     => $sTime,
        'count'     => 1,
    ]);

?>