<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'orphanage');

$Id=$_GET['rn'];
$query = "DELETE FROM `orphans` WHERE `orphans`.`Id` = '$Id'";

$data=mysqli_query($conn,$query);

if($data)
{
echo"<font color='green'>Record deleted";
header("Refresh:1;url=delete.php");
}
else
{
    echo"<font color='red'>Record deleted";
    header("Refresh:1;url=delete.php");
}
?>