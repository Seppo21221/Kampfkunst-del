<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

try {
    //Server settings
    $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
    $mail->SMTPDebug = false;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'securesmtp.t-online.de';                   
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'jonas.hodde@t-online.de';                     // SMTP username
    $mail->Password   = '47pzWJnMRFELMEQa';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('jonas.hodde@t-online.de');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kontaktanfrage, Telefon (falls angegeben): ' . $tel;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    echo 'Ihre Nachricht wurde gesendet, vielen Dank!';
    header('Location: '."../kontakt-success.php");
    die();
} catch (Exception $e) {
    echo "Ihre Nachricht konnte nicht gesendet werden. Mailer Error: {$mail->ErrorInfo}";
    sleep(5);
    header('Location: '."../kontakt-failure.php");
    die();
}
?>
