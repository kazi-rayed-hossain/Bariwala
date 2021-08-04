<?php

require_once "database.php";
$database= new Database();
$b_id=$_POST["building"];
$unit_name=$_POST["u_name"];
$r_id=$_POST["renter_id"];


$table="units";
$column="unit_name,building_id ,renter_id  ";
$values="'$unit_name','$b_id','$r_id'";

$database->insert($table, $column, $values);



header("Location: ../view/viewUnit.php");


?>