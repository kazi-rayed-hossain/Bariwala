<?php
require_once "database.php";

require_once "updateControl.php";
$database= new Database();

$info["name"]=$_POST["b_name"];
$info["address"]=$_POST["add"];
$u_id=$_POST["user_id"];
$select="*";
$table = "managers";
$where = "Where user_id = $u_id";
$extention = "";
$result = $database->select($select, $table, $where, $extention);
$row = mysqli_fetch_assoc($result);
$manager=$row["id"];
$info["manager_id "]=$manager;


$update=new UpdateControl();
$table="buildings";
$update->create($table,$info);





header("Location: ../view/viewBuilding.php");


?>