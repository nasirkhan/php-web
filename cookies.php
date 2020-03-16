<?php
$cookie_name = "author";
$cookie_value = "Nasir Khan";
setcookie($cookie_name, $cookie_value, time() + (60 * 60 * 24 * 30), "/"); // 60 seconds, 60 minutes, 24 hours, 30 days
?>
<!doctype html>
<html lang="en">
    <head>
        <?php require_once "_header.php" ?>

        <title>Cookies</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-sm-6 align-self-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1>Cookies</h1>
                            <hr>
                            <?php
                            if(count($_COOKIE) > 0) {
                                if(!isset($_COOKIE[$cookie_name])) {
                                   echo "Cookie named '" . $cookie_name . "' is not set!";
                                } else {
                                   echo "Cookie '" . $cookie_name . "' is set!<br>";
                                   echo "Value is: " . $_COOKIE[$cookie_name];
                                }
                            } else {
                                echo "Cookies are disabled.";
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
