<?php

session_start();

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'orphanage');

$username = $_POST['username'];
$pass = $_POST['password'];
$fullname = $_POST['fullname'];
$nat_id = $_POST['nationalid'];
$usertype = "user";

$s = "select * from registration where username = '$username'";

$result = mysqli_query($conn,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    echo"Username Already Taken";
}
else
{
    $reg = "insert into registration (Username,Password,FullName,National_Id,UserType) values ('$username','$pass','$fullname','$nat_id','$usertype')";
    mysqli_query($conn,$reg);
    header('location:Login.html');
}
?>