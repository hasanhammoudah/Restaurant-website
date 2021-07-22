<?php
session_start();

if(!isset($_SESSION["user"]))
    echo '<script>window.location="login.php";</script>';


$con = new mysqli("localhost","root","","orders");
$st = $con->prepare("select * from temp_order where email=? and itemid=?");
$st->bind_param("si", $_SESSION["user"],$_GET["itemid"]);
$st->execute();
$rs = $st->get_result();
if($rs->num_rows == 0){
$q = 1;
$st = $con->prepare("insert into temp_order values(?,?,?)");
$st->bind_param("sii", $_SESSION["user"],$_GET["itemid"],$q);
$st->execute();}
else{
$st = $con->prepare("update temp_order set qty=qty+1 where email=? and itemid=?");
$st->bind_param("si", $_SESSION["user"],$_GET["itemid"]);
$st->execute(); 
} 

echo '<script>window.location="index.php";</script>';