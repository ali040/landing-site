<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

ob_start();
session_start();
if ($_POST['g-recaptcha-response'] == '') {
	$url = "contact-error.php";
	header("Location: " . $url);
	exit(0);
} else {
}




$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
// $date = $_POST['date'];
// $service = $_POST['service'];
// $doctor = $_POST['doctor'];
$message = $_POST['message'];



$ref = $_SERVER['HTTP_REFERER'];

$ref = $_SERVER['HTTP_REFERER'];

$mail = new PHPMailer();
$mail->SMTPDebug = 1;
$mail->Mailer = "smtp";
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'ssoftstrikerss@gmail.com';
$mail->Password = 'daiuvqlfbyxbtnhu';

$mail->IsHTML(true);
$mail->AddAddress("info@tyt.us");
$mail->SetFrom($email);
$mail->AddReplyTo("info@tyt.us");
$mail->Subject = "Enquiry Form";



	$message = '<table width=100% border=0 border-color:none cellspacing=3 cellpadding=3 class=text style="font-family:Arial; line-height:160% word-spacing:0.4em font-size:14px; border: 1px solid" bgcolor="#F9F9F9" color:"#465864">
<tr >
<td colspan="4"  align="center" bgcolor="#e0e1e1" ><strong >Enquiry Form ( indianglory ) : Enquiry from ' . $first_name . $last_name . '</strong></td>
</tr>

<tr> <td>Full Name </td> <td> : </td> <td >' . $first_name . $last_name . '</td> </tr>
<tr> <td>Email Address </td> <td> : </td><td>' . $email . '</td> </tr>
<tr> <td>Phone Number No </td> <td> : </td> <td>' . $mobile . '</td> </tr>
<tr> <td>Message </td> <td> : </td> <td>' . $message . '</td> </tr>
  
</table>';

$mail->MsgHTML($message); 
if(!$mail->Send()) {
      $url = "mail-successfully.php";
		die (header("Location: " . $url));
} else {

      $url = "mail-sent-error.php";
		die (header("Location: " . $url));  
}