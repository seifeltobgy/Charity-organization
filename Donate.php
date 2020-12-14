<?php

include_once 'singleton.php';
session_start();
$Db= DbConnection::getInstance();
$conn = $Db->getConnection();

        $Donname = $_POST['fullname'];
        $email = $_POST['Email'];
        $phonenumber = $_POST['Phone'];
        $amount = $_POST['amount'];
        $DonateType = $_POST['DonateTypeId'];
        $Address = $_POST['Address'];
        $DonMethod = $_POST['DonateMethodId'];
        $rand = rand();

if($DonMethod == "2")
{
    $reg = "insert into Donations (DonorName,Email,Amount,PhoneNumber,DonationTypeId,Address,DonationMethodId) values ('$Donname','$email','$amount','$phonenumber','$DonateType','$Address','$DonMethod')";
    mysqli_query($conn,$reg);
    echo '<script language="javascript">';
    echo 'alert("Donation Successfull! We Will send a representative soon.     Thank You!")';
    echo '</script>';
    header("Refresh:1;url=Receipt.php");
}
if($DonMethod == "1")
{
    $reg = "insert into Donations (DonorName,Email,Amount,PhoneNumber,DonationTypeId,Address,DonationMethodId) values ('$Donname','$email','$amount','$phonenumber','$DonateType','$Address','$DonMethod')";
    mysqli_query($conn,$reg);
    echo '<script type="text/javascript">alert("'.$rand.'");</script>';
    header("Refresh:1;url=Receipt.php");
}
?>