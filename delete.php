<?php
session_start();

if(isset($_SESSION["user"]))
{
    $con = new mysqli("localhost","root","","orders");
    $st = $con->prepare("select qty from temp_order where email=? and itemid=?");
    $st->bind_param("si", $_SESSION["user"],$_GET["id"]);
    $st->execute();
    $rs = $st->get_result();
    $row = $rs->fetch_assoc();
    if($row["qty"]==1){
    $st = $con->prepare("delete from temp_order 
            where itemid=? and email=?");
    $st->bind_param("is", $_GET["id"],$_SESSION["user"]);
    $st->execute();}
    else{
       $st = $con->prepare("update temp_order set qty=qty-1
            where itemid=? and email=?");
        $st->bind_param("is", $_GET["id"],$_SESSION["user"]);
        $st->execute(); 
    }
}
echo '<script>window.location="index.php";</script>';