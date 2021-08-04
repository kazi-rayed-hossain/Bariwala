<?php
require_once "database.php";
require_once "updateControl.php";
$database=new Database();

if(isset($_GET["st"])){
    $st=$_GET["st"];
    $id=$_GET["id"];
    $fl=$_GET["fl"];

    
    

    if($st==1){
        
        if($fl==1){
            $table="payment";
            $set="status = 'Varified'";
            $where="WHERE id='$id'";
            $database->update($table,$set,$where);

        }else{
            
            $table="payment";
            $set="status = 'Not Verified'";
            $where="WHERE id='$id'";
            $database->update($table,$set,$where);

        }
        
        header("Location: ../view/paymentView.php");


    }


}else{
  $info["rent_id"]=$_POST["r_id"];
  $info["unit_id"]=$_POST["unit_id"];
  $info["transection_id"]=$_POST["t_id"];
  $info["date"]= date("Y-m-d") ;
  $info["status"]="Not Verified";
  $update=new updateControl();
  $table="payment";
  $update->create($table,$info);

  header("Location: ../view/home.php");



}



?>