<?php
        
        session_start();
        $conn = mysqli_connect('localhost','root','');
        mysqli_select_db($conn,'orphanage');
        $user = $_SESSION['UserName'];
      //  $fees = $_SESSION['Fees'];
       // $title = $_SESSION['Title'];
        //$query = "select * from event ORDER BY id ASC";
        //$result = mysqli_query($connect,$query);
                        
        /*while($row = mysqli_fetch_array($result))
        {
            if($row)
        }*/
               $reg = "insert into Enrollments (UserName) values ('$user')";
        //$reg = "insert into Enrollments (UserName,Fees,EventName) values ('$user','$fees','$title')";
        mysqli_query($conn,$reg);
?>
