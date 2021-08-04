<?php
$st=$_GET["st"];
$id=$_GET["id"];

require_once "database.php";
$database=new Database();
if($st==1){
    $table="units";
    $where="WHERE id='$id'";
    $database->delete($table,$where);
    header("Location: ../view/viewUnit.php");


}


?>