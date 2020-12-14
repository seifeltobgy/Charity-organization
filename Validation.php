<?php
include 'singleton.php';
session_start();
$Db= DbConnection::getInstance();
$conn = $Db->getConnection();
//$conn = mysqli_connect('localhost','root','');
//mysqli_select_db($conn,'orphanage');
$username = $_POST['username'];
$_SESSION['UserName'] = $username;
$pass = $_POST['password'];
$usertype = "user";

$s = "select * from registration where Username = '$username' && Password = '$pass' && UserType = '$usertype'";


$result = mysqli_query($conn,$s);


$num = mysqli_num_rows($result);

if($num == 1)
{
    header('location:Visitor-index.html');
}
else
{
    $s1 = "select * from registration where Username = '$username' && Password = '$pass' && UserType = 'admin'";
    $result1 = mysqli_query($conn,$s1);
    $num1 = mysqli_num_rows($result1);
    
    if($num1 == 1)
    {
        header('location:Admin-index.php');
    }
    else
    {
        header('location:Login.html');
        echo "Failed";
    }
}

?>