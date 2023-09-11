<?php

    $sDate = date("M d, Y");
    $sTime = date("H:i:s");

    PerchSystem::set_vars([
        'sDate' => $sDate,
        'sTime' => $sTime,
    ]);

    perch_content_custom('Event Settings', [
        'sDate' => $sDate,
        'sTime' => $sTime,
    ]);
    
?>