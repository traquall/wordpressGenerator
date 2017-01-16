<?php

include 'class.php';

-- infos base de donnée
$dbname;
$dbuser;
$dbpass;
$dblang;

-- infos wordpress
$url;
$title;
$admin;
$password;
$email;

$processconfigdb = 'wp core config --dbname='.$dbname.' --dbuser='.$dbuser.' --dbpass='.$dbpass.' --locale='.$dblang;
$processinstall = 'wp core install --url='.$url.' --title="'.$title.'" --admin_user='.$admin.' --admin_password='.$password.' --admin_email='.$email.' --skip-email';

    // You may use status(), start(), and stop(). notice that start() method gets called automatically one time.
    $process1 = new Process($processconfigdb);

    // Then you can start/stop/ check status of the job.
    $process1.start();

    if ($process1.status()){
        echo "The process is currently running";
    }else{
        echo "The process is not running.";
    }

    // You may use status(), start(), and stop(). notice that start() method gets called automatically one time.
    $process2 = new Process($processinstall);

    // Then you can start/stop/ check status of the job.
    $process2.start();

    if ($process2.status()){
        echo "The process is currently running";
    }else{
        echo "The process is not running.";
    }

?>