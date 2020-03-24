<!doctype html>
<html lang="en">
<head>
    <?php require_once "_header.php" ?>

    <title>Calculator</title>
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
                        $to = 'nasir@example.com';
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

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "_footer.php" ?>
</body>
</html>
