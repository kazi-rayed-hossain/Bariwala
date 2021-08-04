<?php
require_once "database.php";
require_once "updateControl.php";
require_once "UserControl.php";
$database = new Database();
$update = new updateControl();
$user=new UserControl();
if(isset($_GET["st"])){
    $st=$_GET["st"];
    $id=$_GET["id"];
    
    
    if($st==1){
        
        $select="*";
        $table = "managers";
        $where = "WHERE id=$id";
        $extention = "";
        $result = $database->select($select, $table, $where, $extention);
        $row = mysqli_fetch_assoc($result);
        $id2=$row["user_id"];
        $table="managers";
        $update->delete($table,$id);
        $user->deleteUser($id2);

        

        header("Location: ../view/manager.php");


    
    
    }
    



}else{
    
    $info["phone_number"]=$_POST["pnum"];
    $info["parmanent_add"]=$_POST["padd"];
    $info["nid"]=$_POST["nid"];
    $id=$_POST["m_id"];
    
    
    $table="managers";
    $update->edit($table,$info,$id);

    header("Location: ../view/manager.php");

}


?>