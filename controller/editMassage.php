<?php

$id=$_GET["id"];
$fl=$_GET["fl"];

require_once "updateControl.php";
$update=new updateControl();
if($fl==1){
    $table="complain_box";
    $info["status"]="seen";
    $update=new updateControl();
    $update->edit($table,$info,$id);
    header("Location: ../view/complainbox.php");


}else{
    $table="complain_box";
    $info["status"]="unseen";
    $update=new updateControl();
    $update->edit($table,$info,$id);
    header("Location: ../view/complainbox.php");
}


?>