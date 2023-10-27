<?php

session_start();
require 'db.php';
 
 if(isset($_POST['edit']))
 {  
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $user=$_POST['uname'];
    $email=$_POST['email'];
    $select= "select * from farmer where femail='$email'";
    
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['femail'];
    if($res === $email)
    {
   
       $update = "update users set name='$name',mobile='$mobile',user='$user',email='$email' where femail='$email'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:profileView.php');
       }
       else
       {
            echo ("Error in updating profile");
           /*sorry your profile is not update*/
           header('location:profileView.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>