<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
        include'header.php';
        ?>
        <?php
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'howtowebsitephp@gmail.com';
$mail->Password = 'howtowebsite123';
$mail->setFrom('howtowebsitephp@gmail.com');
$mail->addAddress('howtowebsitephp@gmail.com');
$mail->Subject = 'New comment or question';
$mail->Body = 'Comments: '.$_POST["comments"].' Questions: '. $_POST["questions"];
//send the message, check for errors
if (!$mail->send()) {
    echo "<br><br><br><br><h5>ERROR: </h5>" . $mail->ErrorInfo;
} else {
    echo "<br><br><br><br><h5>SUCCESS</h5>";
}
?>
 <?php
        include'footer.php';
        ?>
