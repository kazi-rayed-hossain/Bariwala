<?php


$email = $_POST['email'];
$password = $_POST['pass'];
// md5 diye encript korchiiii jate na dekhe keo pass
$password = md5($password); 

require_once 'database.php';
$database = new Database();
$select = "*";
$table = "users";
$where = " where password='$password' AND email='$email'";
$extention = "";
$result = $database->select($select, $table, $where, $extention);
$row = mysqli_fetch_assoc($result);

if (!empty($row)) {
    
    $name = $row['name'];
    $uname = $row['username'];
    $email = $row['email'];
    $status = $row['status'];
    $id=$row['id'];
    session_start();
    $_SESSION["username"] = $uname;
    $_SESSION["name"] = $name;
    $_SESSION["lname"] = $lname;
    $_SESSION["email"] = $email;
    $_SESSION["status"] = $status;
    $_SESSION["pass"] = $password;
    $_SESSION['id'] = $id;
    $st = 8;
    header("Location: ../view/home.php?status=$st");
} else {
    $st = 7;
    header("Location: ../view/home.php?status=$st");
}
?>
