<?php

$filename = '/usr/local/bin/wp/wp-cli.phar';

if (!file_exists($filename)) {	
    exec("curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar");
    exec("chmod +x wp-cli.phar");
    exec("mv wp-cli.phar /usr/local/bin/wp");
    echo "<script>console.log('coucou');</script>";
}else{
	echo "<script>console.log('coucou2');</script>";
}

exec("mkdir /var/www/html/wpcli");
exec("cd /var/www/html/wpcli");
exec("wp core download");

header('location : processus.php');