<?php 
$Name =$_POST['nom']; //senders name 
$email =$_POST['mail']; //senders e-mail adress 
$recipient = "aminechourou88@gmail.com"; //recipient 
$mail_body =$_POST['message']; //mail body 
$subject =$_POST['sujet']; //subject 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 
echo $subject;
echo $email;
mail($recipient, $subject, $mail_body, $header);
 //echo '<body onLoad="alert(\'Mail envoyé avec succés...\')">';
  //echo '<meta http-equiv="refresh" content="0;URL=index.php">';
  ?>