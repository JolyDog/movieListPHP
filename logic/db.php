<?php
//Настройка базы данных
$driver = 'mysql';
$host = 'localhost';
$db_name = 'final';
$db_user = 'root';
$db_pass = 'root';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try{
  $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset",
  $db_user,
  $db_pass,
  $options);
  session_start();
}catch(PDOException $e){
  die("Не могу подключится к базе данных");
}

?>
