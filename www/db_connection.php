<?php
$hostname='database';
$username='test';
$password='test1234';
$db = 'test_db';

try {
  $dbh = new PDO("mysql:host=$hostname;dbname=$db",$username,$password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
  echo 'Connected to Database<br/>';
}catch(PDOException $e){
  echo $e->getMessage();
}
?>
