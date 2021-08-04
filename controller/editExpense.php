<?php
$st=$_GET["st"];
$id=$_GET["id"];

require_once "database.php";
$database=new Database();
if($st==1){
    $table="expense";
    $where="WHERE id='$id'";
    $database->delete($table,$where);
    header("Location: ../view/expense.php");


}


?>