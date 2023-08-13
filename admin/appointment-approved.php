<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["submit"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'medbookplusof@gmail.com';
    $mail->Password = 'cvecczmyzfosxbbf';
    $mail->SMTPSecure = 'ssl'; // Use 'ssl' instead of 'ss1'
    $mail->Port = 465;

    $mail->setFrom('medbookplusof@gmail.com'); // Corrected the method name

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = "Congratulations";
    $mail->Body = $_POST["MessageSent"];

    try {
        $mail->send();
        echo "
        <script>
        alert('Sent Successfully');
        window.location.href = 'approve-appointment.php';
        </script>
        ";
    } catch (Exception $e) {
        echo "
        <script>
        alert('Message could not be sent. Error: {$mail->ErrorInfo}');
        </script>
        ";
    }
}
?>