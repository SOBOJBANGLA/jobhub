<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['submit'])){
$mail = new PHPMailer(true);

$mail ->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'abuhmdabdullah72@gmail.com';
$mail->Password = 'rcymekpczebqsoiq';
$mail->SMTPSecure ='ssl';
$mail->Port = 465;

$mail->setFrom('abuhmdabdullah72@gmail.com');

$mail->addAddress($_POST["email"]);

$mail->Subject = $_POST['stat'];

$mail->Body = $_POST['msz'];

$mail->send();



echo "

<script>
alert('Sent Successfully');
document.location.href = 'index.php';

</script>

";

}

?>