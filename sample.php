<?php
if($_POST["submit"]) {
    $recipient="eustacia.velu@gmail.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["qualification"];
    $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
	if(mail($recipient, $subject, $mailBody){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}
    
    
    header("Location: index.html"); // Set here redirect page or destination page
}
?>