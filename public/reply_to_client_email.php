<?php

if (isset($_POST['to'])) {

    $to = $_POST['to'];  
    $from=$_POST['from'];
    $new_message = $_POST['message'];   
    $ogMessage= $_POST['ogmessage'];   
    $companyname= $_POST['companyname'];   
    
    

    
    //  echo "to and message field has been received. To: $to and from: $from and Message: $new_message. Original Message: $ogMessage";
   // echo "Message: $new_message";
    $subject= "Message from $companyname";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <webmaster@signup.government.co.za>' . "\r\n";
$message = "From: $from <br/><br/>". "\r\n";
$message.= "Message:<br/> $new_message <br/><br/>". "\r\n";
$message.= "In response to your message:<br/>";
$message.= "$ogMessage";


$send_success = mail($to,$subject,$message,$headers);

if ($send_success){
    echo  "Message sent successfully!";
}
	
else{
    echo "Message not sent - please try again!";
}


} 

else {
    echo "Invalid request.";
}




?>