<?php
require_once "database.php";
require_once "updateControl.php";

$update=new updateControl();
$database=new Database();
$id=$_POST["id"];
$flag=$_POST["flag"];
$select="*";
$table = "rent";
$where = "Where id = $id";
$extention = "";
$result = $database->select($select, $table, $where, $extention);
$row = mysqli_fetch_assoc($result);
$prev=$row["extra"];


if(intval($flag)==1){
    $month=$_POST["garage"];
    $info["extra"]=$prev+5000*intval($month);
    $table="rent";
    $update->edit($table,$info,$id);


}else{
    $days=$_POST["proom"];
    
    $info["extra"]=$prev+500*intval($days);
    $table="rent";
    $update->edit($table,$info,$id);

}




header("Location: ../view/home.php");


?>