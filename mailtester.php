<?PHP
$sender = 'jonas.hodde@t-online.de';
$recipient = 'jonas.hodde@uni-oldenburg.de';

$subject = "php mail test";
$message = "recipient: $recipient php test message";
$headers = 'From:' . $sender . 'To:' . §recipient;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>