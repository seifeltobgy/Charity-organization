<?php
$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn,'orphanage');
if(isset($_POST['submit']))
{
    $Id =$_POST['Id'];
    $query = "UPDATE `orphans` SET `Id` = '$_POST[Id]', `FullName` = '$_POST[FullName]', `DOB` = '$_POST[dob]', `Gender` = '$_POST[Gender]' WHERE `orphans`.`Id` = $_POST[Id]";
$query_run = mysqli_query($conn,$query);
if($query_run)
{
echo '<script type="text/javascript"> alert ("Data Updated") </script>';
header("Refresh:1;url=updateModel.php");
}
else
{
    echo "nooooooooooooo"; 
}
}
?>