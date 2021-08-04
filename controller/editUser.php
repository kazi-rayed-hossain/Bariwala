<?php


require_once "userControl.php";
$user=new userControl();
if(isset($_GET["st"])){
    $st=$_GET["st"];
    $id=$_GET["id"];
    
   
    if($st==1){
        $user->deleteUser($id);
        header("Location: ../view/viewUser.php");
    
    
    }



}
else{
    $id=$_POST["id"];
    $info["name"]=$_POST["name"];
    $info["username"]=$_POST["uname"];
    $info["password"]=md5($_POST["pass"];)
    $info["email"]=$_POST["email"];
    $info["status"]=$_POST["status"];
    $user=new userControl();
    $user->edit($info,$id);
    header("Location: ../view/viewUser.php");

}



?>