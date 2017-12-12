<?php

$dsn = $config['db']['driver'].':host='. $config['db']['host'] .';dbnane=' . $config['db']['dbname'];
$user = $config['db']['user'];
$pass = $config['db']['pass'];
try{
    $pdo = new PDO($dsn ,$user , $pass);
}catch(PDOException $e){
    die('Error connecting. '. $e->getMessage());
}