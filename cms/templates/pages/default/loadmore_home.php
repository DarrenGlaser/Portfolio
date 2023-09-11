<hr>
<?php
    perch_collection('Work', [
        'template'  => 'collections/homeads.html',
        'filter'    => 'cpshow',
        'match'     => 'eq',
        'value'     => 'no',
        'count'     => 16,
    ]);
?>      