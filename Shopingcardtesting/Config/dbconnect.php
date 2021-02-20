<?php

$dsn = 'mysql:host=localhost;dbname=test1';
$user = 'root';
$password = '';
$options = array
(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try
{
    $connect = new PDO($dsn,$user,$password,$options);

   // echo "the Database is Connected";
}

catch(PDOException $e)
{
    echo 'Failed To Connect Database: ' . $e->getMessage();
}


?>