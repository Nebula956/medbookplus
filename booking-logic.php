<?php
require 'config/database.php';
//get booking  data if book button was clicked
if(isset($_POST['submit'])){
    $Patient_Name=filter_var($_POST['Patient_Name'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $MobileNo=filter_var($_POST['MobileNo'],FILTER_VALIDATE_INT);
    $username=filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $AppointmentDate=date('Y-m-d',strtotime($_POST['AppointmentDate']));
    $AppointmentTime=$_POST['AppointmentTime'];
    $doctorname=filter_var($_POST['doctorname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $MessageApt=filter_var($_POST['MessageApt'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$Patient_Name){
        $_SESSION['booking']="Please enter your  Name";
      }
      elseif(!$MobileNo){
        $_SESSION['booking']="Please enter your Mobile Number";
      }
      elseif(!$username){
        $_SESSION['booking']="Please enter your Username";
      }
      elseif(!$email){
        $_SESSION['booking']="Please enter  a valid email";
      }
      elseif(!$AppointmentDate){
        $_SESSION['booking']="Please enter  valid date";
      }
      elseif(!$AppointmentTime){
        $_SESSION['booking']="Please enter valid time";
      }
      elseif(!$doctorname){
        $_SESSION['booking']="Please enter your Doctor  First Name";
      }
      elseif(!$MessageApt){
        $_SESSION['booking']="Please enter your a valid message";
      }
    //redirect booking page if there was any problem
 if(isset($_SESSION['booking'])){
    //pass from data back to booking page
    $_SESSION['booking-data']=$_POST;//All invalid details back to booking page
    header('location: ' . ROOT_URL . 'booking.php');
    die();
   }
   else{
   //insert new appointment into appointment table
   $insert_appointment_query="INSERT INTO appointment SET Patient_Name='$Patient_Name',MobileNo='$MobileNo',username='$username',
   email='$email',AppointmentDate='$AppointmentDate',AppointmentTime='$AppointmentTime',doctorname='$doctorname',MessageApt='$MessageApt'";
   $insert_appointment_result=mysqli_query($connection,$insert_appointment_query);
   }
   if(!mysqli_errno($connection)){
       //redirect to Booking page with success message
       $_SESSION['booking-success']="Booking successful";
       header('location: ' . ROOT_URL . 'index.php');
       die();
   }
   
   }
   else{
       //if button was not clicked bounce back to booking page
       header('location: ' . ROOT_URL . 'booking.php');
       die();
   }


