<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <?php require_once "_header.php" ?>

        <title>Session</title>
    </head>
    <body>
        <?php require_once "_navbar.php" ?>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-sm-6 align-self-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1>Session</h1>
                            <hr>
                            <?php
                            // Storing session data
                            echo "<br> Name: ".$_SESSION["name"] = "Nasir Khan";
                            echo "<br> Website: ".$_SESSION["website"] = "nasirkhn.com";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "_footer.php" ?>
    </body>
</html>
