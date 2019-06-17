<?php

	$firstname 			= 	$_POST["first_name"];
$lastname 			= 	$_POST["last_name"];
 $email 			= 	$_POST["email"];
	$mobile 		= 	$_POST["mobile"];
	$requirement	=	$_POST["message"];
	 $to 			= 	"mcsabreena.events@gmail.com";
	$subject 		= 	"Contact Enquiry From Sabreena Website";
	$message 		= 	"<html>
 <head></head>
<body style='background-color:#f0f0f0; padding:40px 0;'>
<table align='center' cellpadding='10' bgcolor='#FFFFFF' cellspacing='0' border='0' bordercolor='#ccc' style='width:100%; max-width:600px; font-family:Arial, Helvetica, sans-serif; font-size:13px; border:3px solid #e2e2e2;'>
	<tr>
    	<td colspan='2' align='center' style='font-size:25px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;'><h2>Sabreena Website Contact Details<h2></td>
    </tr>
    <tr>
    	<td width='180' valign='top' style='border-right:1px solid #e2e2e2;border-bottom:1px solid #e2e2e2; border-top:1px solid #e2e2e2;'>First Name</td>
        <td valign='top' style='border-bottom:1px solid #e2e2e2;border-top:1px solid #e2e2e2;'> ".$firstname." </td>
    </tr>
    <tr>
    	<td width='180' valign='top' style='border-right:1px solid #e2e2e2;border-bottom:1px solid #e2e2e2; border-top:1px solid #e2e2e2;'>Last Name</td>
        <td valign='top' style='border-bottom:1px solid #e2e2e2;border-top:1px solid #e2e2e2;'> ".$lastname." </td>
    </tr>
    <tr>
    	<td width='180' valign='top' style='border-right:1px solid #e2e2e2; border-bottom:1px solid #e2e2e2;'>E-Mail</td>
        <td valign='top' style='border-bottom:1px solid #e2e2e2;'> ".$email." </td>
    </tr>
	<tr>
    	<td width='180' valign='top' style='border-right:1px solid #e2e2e2; border-bottom:1px solid #e2e2e2;'>Mobile</td>
        <td valign='top' style='border-bottom:1px solid #e2e2e2;'> ".$mobile." </td>
    </tr>
    <tr>
    	<td width='180' valign='top' style='border-right:1px solid #e2e2e2;'>Message</td>
        <td valign='top'> ".$requirement." </td>
    </tr>
</table>
 </body>
</html>
";
	
	
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";  
	$headers .= 'From: ' ."$email". "\r\n";
	mail($to,$subject,$message,$headers);
	header("Location:index.html");
 
?>