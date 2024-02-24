<?php

require_once 'db_connection.php';

$db = new Database;
$db->connect();

$key = $_GET["key"];					 
$id_card = $_GET["id_card"];

$status = $_GET["status"];
if($status==1){
  $trangThai="Vào";      
}else{
  $trangThai="Ra";           
}
$username = $db->getUser($id_card);

date_default_timezone_set("Asia/Ho_Chi_Minh");
$time = date("H:i:s");
$date = date("Y-m-d");
if ($key =="smartdoor")
{
    $datetime=$date.' '.$time;
    $db->insertData($username,$id_card,$trangThai,$datetime);
}


?>