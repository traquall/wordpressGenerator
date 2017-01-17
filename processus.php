<?php

require_once('class.php');

$pTest = new Process();

//-- infos base de donnée
//vérification des champs du formulaire
if(isset($_GET['dbname']))
    $dbname = $_GET['dbname'];
else
    $pTest->debug_to_console('dbName');
if(isset($_GET['dbuser']))
    $dbuser = $_GET['dbuser'];
else
    $pTest->debug_to_console('dbuser');
if(isset($_GET['dbpass']))
    $dbpass = $_GET['dbpass'];
else
    $pTest->debug_to_console('dbpass');
if(isset($_GET['dblang']))
    $dblang = $_GET['dblang'];
else
    $pTest->debug_to_console('dblang');

//-- infos wordpress
if(isset($_GET['url']))
    $url = $_GET['url'];
else
    $pTest->debug_to_console('');
if(isset($_GET['title']))
    $title = $_GET['title'];
else
    $pTest->debug_to_console('');
if(isset($_GET['admin']))
    $admin = $_GET['admin'];
else
    $pTest->debug_to_console('');
if(isset($_GET['pass']))
    $password = $_GET['pass'];
else
    $pTest->debug_to_console('');
if(isset($_GET['email']))
    $email = $_GET['email'];
else
    $pTest->debug_to_console('');


$processconfigdb = 'wp core config --dbname='.$dbname.' --dbuser='.$dbuser.' --dbpass='.$dbpass.' --locale='.$dblang;
$processinstall = 'wp core install --url='.$url.' --title="'.$title.'" --admin_user='.$admin.' --admin_password='.$password.' --admin_email='.$email.' --skip-email';

$filename = '/usr/local/bin/wp/wp-cli.phar';


if (!file_exists($filename)) {  
    $p1 = new Process("curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar");
    $p1->start();
    $p2 = new Process("chmod +x wp-cli.phar");
    $p2->start();
    $p3 = new Process("mv wp-cli.phar /usr/local/bin/wp/wp-cli.phar");
    $p3->start();
    $p3->debug_to_console("file didn t exist");
}else{
    $p0 = new Process();
    $p0->debug_to_console("file already exist");
}

$p6 = new Process("mkdir /var/www/html/wpcli");
$p6->start();
$test = chdir('/var/www/html/wpcli');
$pTest->debug_to_console($test);
$p8 = new Process("wp core download");
$p8->start();

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

    exec("service apache2 reload");

?>