<?php
require 'config/constants.php';
//get back form data if there was a booking error
$Patient_Name=$_SESSION['booking-data']['Patient_Name'] ?? null;
$MobileNo=$_SESSION['booking-data']['MobileNo'] ?? null;
$username=$_SESSION['booking-data']['username'] ?? null;
$email=$_SESSION['booking-data']['email'] ?? null;
$AppointmentDate=$_SESSION['booking-data']['AppointmentDate'] ?? null;
$AppointmentTime=$_SESSION['booking-data']['AppointmentTime'] ?? null;
$doctorname=$_SESSION['booking-data']['doctorname'] ?? null;
$MessageApt=$_SESSION['booking-data']['MessageApt'] ?? null;
unset($_SESSION['booking-data']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv= "x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Complete Responsive Multipage Blog Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release-pro/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
<section class="form_section">
    <div class="container form_section-container">
        <h2>Book Now</h2>
        <?php if(isset($_SESSION['booking'])): ?>
        <div class="alert_message error">
            <p>
                <?=$_SESSION['booking'];
                unset($_SESSION['booking']);
                ?>
            </p>
        </div>
        <?php endif?>
        <form action="<?=ROOT_URL ?>booking-logic.php"enctype="multipart/form-data" method="POST">
            <input type="text" name="Patient_Name" value="<?=$Patient_Name?>" placeholder=" Patient Name">
            <input type="number"name="MobileNo"value="<?=$MobileNo?>"placeholder="MobileNo">
            <input type="text"name="username"value="<?=$username?>" placeholder="Username">
            <input type="email"name="email"value="<?=$email?>" placeholder="Email">
            <input type="date"name="AppointmentDate"value="<?=$AppointmentDate?>"placeholder="AppointmentDate">
            <input type="time"name="AppointmentTime"value="<?=$AppointmentTime?>" placeholder="AppointmentTime">
            <input type="text"name="doctorname"value="<?=$doctorname?>" placeholder="Doctor's First Name">
            <textarea rows="10" name="MessageApt" value="<?=$MessageApt?>" placeholder="Message"></textarea>
            <button type="submit" name="submit" class="btn">Book </button>

        </form>
    </div>
</section>
</body>
</html>