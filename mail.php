<?php
// All Error Reporting Enabled
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once "_header.php" ?>

    <title>PHP mail()</title>
</head>
<body>
    <?php require_once "_navbar.php" ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-6 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">PHP mail()</h1>
                        <hr>
                        <?php
                        $to = 'nasir8891@gmail.com';
                        $subject = 'Welcome ';
                        $message = 'Dear Nasir, Welcome from PHP mail().';
                        $headers = "From: webmaster@example.com" . "\r\n" .
                        "CC: somebodyelse@example.com";

                        // Sending email
                        if(mail($to, $subject, $message,$headers)){
                            echo 'Your mail has been sent successfully.';
                        } else{
                            echo 'Unable to send email. Please try again.';
                        }
                        ?>
                        <hr>
                        <h1 class="text-center">HTML Email</h1>
                        <hr>
                        <?php
                        $to = "somebody@example.com, somebodyelse@example.com";
                        $subject = "HTML email";

                        $message = "
                        <html>
                        <head>
                        <title>HTML email</title>
                        </head>
                        <body>
                        <p>This email contains HTML Tags!</p>
                        <table>
                        <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        </tr>
                        <tr>
                        <td>Nasir</td>
                        <td>Khan</td>
                        </tr>
                        </table>
                        </body>
                        </html>
                        ";

                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                        // More headers
                        $headers .= 'From: <webmaster@example.com>' . "\r\n";
                        $headers .= 'Cc: myboss@example.com' . "\r\n";

                        // Sending email
                        if(mail($to, $subject, $message,$headers)){
                            echo 'Your mail has been sent successfully.';
                        } else{
                            echo 'Unable to send email. Please try again.';
                        }
                        ?>

                        <hr>
                        <h1 class="text-center">PHPMailer Email</h1>
                        <hr>
                        <?php
                        // Instantiation and passing `true` enables exceptions
                        $mail = new PHPMailer(true);

                        try {
                            //Server settings
                            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                            $mail->isSMTP();                                            // Send using SMTP
                            $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                            $mail->Username   = 'user@example.com';                     // SMTP username
                            $mail->Password   = 'secret';                               // SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                            //Recipients
                            $mail->setFrom('from@example.com', 'Mailer');
                            $mail->addAddress('nasir@example.net', 'Nasir Khan'); // Add a recipient
                            $mail->addAddress('ellen@example.com'); // Name is optional
                            $mail->addReplyTo('info@example.com', 'Information');
                            $mail->addCC('cc@example.com');
                            $mail->addBCC('bcc@example.com');

                            // Attachments
                            $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
                            $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

                            // Content
                            $mail->isHTML(true); // Set email format to HTML
                            $mail->Subject = 'Here is the subject';
                            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            $mail->send();
                            echo 'Message has been sent';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "_footer.php" ?>
</body>
</html>
