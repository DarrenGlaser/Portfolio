<?php
    switch($_SERVER['SERVER_NAME']) {

        case 'darrenglaser.co.uk':
            include(__DIR__.'/config.darrenglaser-co-uk.php');
            break;

        default:
            include('config.production.php');
            break;
    }

    define('PERCH_LICENSE_KEY', 'R31807-HKG745-UHP496-GZR966-YKU030');
    define('PERCH_EMAIL_FROM', 'chat@darrenglaser.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Darren Glaser');

    define('PERCH_LOGINPATH', '/cms');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
    define('PERCH_TZ', 'UTC');