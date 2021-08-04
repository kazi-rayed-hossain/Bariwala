<?php

require_once "userControl.php";
require_once "updateControl.php";

$name=$_POST["name"];
$email=$_POST["email"];
$password=md5($_POST["pass"]);
$uname=$_POST["uname"];
$status=$_POST["status"];
$usercontrol = new UserControl();
$info["name"] = $name;
$info["email"] = $email;
$info["username"] =$uname;
$info["password"] = $password;
$info["status"] =$status;
$usercontrol->create($info);
if($status=='manager'){
    
    $update=new updateControl();
    $database=new Database();
    $select="*";
    $table = "users";
    $where = "Where email='$email' and status = '$status'  ";
    $extention = "";
    $result = $database->select($select, $table, $where, $extention);
    $row=mysqli_fetch_assoc($result);
    $id=$row["id"];
    $info2["user_id "]=$id;
    $info2["phone_number "]="";
    $info2["parmanent_add "]="";
    $info2["nid "]="";
    $table="managers";
    $update->create($table,$info2);
}
header("Location: ../view/viewUser.php");


?>