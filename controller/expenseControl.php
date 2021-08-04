<?php
require_once "database.php";
require_once "updateControl.php";
$database=new Database();
$uid=$_POST["uid"];
$select="*";
$table = "managers";
$where = "Where user_id=$uid";
$extention = "";
$result = $database->select($select, $table, $where, $extention);
$row = mysqli_fetch_assoc($result);

$info["name"]=$_POST["name"];
$info["ammount"]=$_POST["amm"];
$info["date"]=$_POST["date"];
$info["manager_id"]=$row["id"];
  
$update=new updateControl();
$table="expense";
$update->create($table,$info);
header("Location: ../view/expense.php");







?>