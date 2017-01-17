<?php

require_once('class.php');

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


$processconfigdb = 'wp core config --dbname='.$dbname.' --dbuser='.$dbuser.' --dbpass='.$dbpass.' --locale='.$dblang;
$processinstall = 'wp core install --url='.$url.' --title="'.$title.'" --admin_user='.$admin.' --admin_password='.$password.' --admin_email='.$email.' --skip-email';

$filename = '/usr/local/bin/wp/wp-cli.phar';


if (!file_exists($filename)) {  
    $p1 = new Process("curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar");
    $p2 = new Process("chmod +x wp-cli.phar");
    $p3 = new Process("mv wp-cli.phar /usr/local/bin/wp/wp-cli.phar");
    $p3->debug_to_console('file didnt existe');
}else{
    $p0 = new Process();
    $p0->debug_to_console("file already exist");
}

$p6 = new Process("mkdir /var/www/html/wpcli");
$p7 = new Process("cd /var/www/html/wpcli");
$p8 = new Process("wp core download");

    // You may use status(), start(), and stop(). notice that start() method gets called automatically one time.
    $process1 = new Process($processconfigdb);

    // Then you can start/stop/ check status of the job.
    $process1->start();

    if ($process1->status()){
        echo "The process is currently running";
    }else{
        echo "The process is not running.";
    }

    // You may use status(), start(), and stop(). notice that start() method gets called automatically one time.
    $processcreate = new Process('wp db create');

    // Then you can start/stop/ check status of the job.
    $processcreate->start();

    if ($processcreate->status()){
        echo "The process is currently running";
    }else{
        echo "The process is not running.";
    }

    // You may use status(), start(), and stop(). notice that start() method gets called automatically one time.
    $process2 = new Process($processinstall);

    // Then you can start/stop/ check status of the job.
    $process2->start();


    if ($process2->status()){
        echo "The process is currently running";
    }else{
        echo "The process is not running.";
    }

    exec("service apache2 restart");

?>