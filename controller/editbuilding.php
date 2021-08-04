<?php
require_once "database.php";
require_once "updateControl.php";
$database = new Database();
$update = new updateControl();
if(isset($_GET["st"])){
    $st=$_GET["st"];
    $id=$_GET["id"];
    
    
    if($st==1){
        
       
        $table="buildings";
        $update->delete($table,$id);
        header("Location: ../view/viewBuilding.php");
    
    
    }
    



}else{
    $id=$_POST["id"];
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
    $table="buildings";
    $update->edit($table,$info,$id);

    header("Location: ../view/viewBuilding.php");

}


?>