<?php
if(isset($_POST['submit'])) {
 $emailAddress = 'eustacia.velu@gmail.com';
 require "class.phpmailer.php";
$msg = 'First Name:'.$_POST['name'].'<br /> Qualification:'.$_POST['qualification'].'<br /> Email:'.$_POST['email'].'<br /> Position:'.$_POST['position'].'<br /> Mobile:'.
$_POST['phone'].'<br /> Experience:'.$_POST['exp'];
move_uploaded_file($_FILES["file1"]["tmp_name"], $_FILES["file1"]["name"]);
  $mail = new PHPMailer();
  $mail->IsMail();

  $mail->AddReplyTo($_POST['email'], $_POST['name']);
  $mail->AddAddress($emailAddress);
  $mail->SetFrom($_POST['email'], $_POST['name']);
  $mail->Subject = "Subject";
  $mail->MsgHTML($msg);
  $mail->AddAttachment( $_FILES["file1"]["name"]);
  $mail->Send();

  echo'submitted';
  echo'<script> window.location="../index.html"; </script> ';
}
  ?>

