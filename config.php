<?php
// Database settings
$db="exploring";
$dbhost="192.168.4.100";
$dbport=3307;
$dbuser="root";
$dbpasswd="Antoine06,!";
 
$bdd = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$bdd->exec("SET CHARACTER SET utf8");
 
?>
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }