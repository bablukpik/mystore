<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'webshop';

$link = mysql_connect($dbhost, $dbuser, $dbpass) or die ('could not connect to database');

mysql_select_db($dbname);
?>