<?php

require_once "database.php";

$uid=$_POST["user_id"];
$pnum=$_POST["pnum"];
$add=$_POST["Addr"];
$nid=$_POST["nid"];
$table="renter";
$column="user_id,phone_number,permanent_add,Nid ";
$values="'$uid','$pnum','$add','$nid'";
$database= new Database();
$database->insert($table, $column, $values);



header("Location: ../view/viewRenter.php");


?>