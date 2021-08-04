<?php

require_once "database.php";
session_start();
$complain=$_POST["massage"];
$id=$_SESSION["id"];
$table="complain_box";
$column="complain,user_id,status ";
$values="'$complain','$id','unseen'";
$database= new Database();
$database->insert($table, $column, $values);
header("Location: ../view/viewmassages.php");

?>