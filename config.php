<?php
// Database settings
$db="Exploring";
$dbhost="192.168.4.100";
$dbport=3307;
$dbuser="root";
$dbpasswd="Antoine06,";
 
$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");
 
?>