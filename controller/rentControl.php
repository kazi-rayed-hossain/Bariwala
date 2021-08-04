<?php

require_once "database.php";
$database= new Database();

$u_id=$_POST["unit_id"];
$r_id=$_POST["renter_id"];
$rent=$_POST["rent"];
$e_bill=$_POST["el_bill"];
$w_bill=$_POST["wa_bill"];
$g_bill=$_POST["ga_bill"];
$u_bill=$_POST["U_bill"];
$date=$_POST["Date"];

$table="rent";
$column="renter_id, unit_id, electricity_bill, gas_bill, water_bill, rent, utilities, date";
$values="'$r_id','$u_id','$e_bill','$g_bill','$w_bill','$rent','$u_bill','$date'";

$database->insert($table, $column, $values);



header("Location: ../view/viewUnit.php");


?>