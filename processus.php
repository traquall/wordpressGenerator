<?php

require_once('class.php');
require_once('verif.php');

//-- infos base de donnée
$dbname = $_GET[dbname];
$dbuser = $_GET[dbuser];
$dbpass = $_GET[dbpass];
$dblang = $_GET[dblang];

//-- infos wordpress
$url = $_GET[url];
$title = $_GET[title];
$admin = $_GET[admin];
$password = $_GET[pass];
$email = $_GET[email];

debug_to_console('debut');

$processconfigdb = 'wp core config --dbname='.$dbname.' --dbuser='.$dbuser.' --dbpass='.$dbpass.' --locale='.$dblang;
$processinstall = 'wp core install --url='.$url.' --title="'.$title.'" --admin_user='.$admin.' --admin_password='.$password.' --admin_email='.$email.' --skip-email';

debug_to_console('1');

    // You may use status(), start(), and stop(). notice that start() method gets called automatically one time.
    $process1 = new Process($processconfigdb);

    debug_to_console('2');

    // Then you can start/stop/ check status of the job.
    $process1->start();

    debug_to_console('3');

    if ($process1->status()){
        echo "The process is currently running";
    }else{
        echo "The process is not running.";
    }

    debug_to_console('4');

    // You may use status(), start(), and stop(). notice that start() method gets called automatically one time.
    $process2 = new Process($processinstall);

    debug_to_console('5');

    // Then you can start/stop/ check status of the job.
    $process2->start();

    debug_to_console('6');

    if ($process2->status()){
        echo "The process is currently running";
    }else{
        echo "The process is not running.";
    }

    exec("sudo service apache2 restart");

    debug_to_console('fin');

?>