<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <?php require_once "_header.php" ?>

        <title>RegExp - Regular expression</title>
    </head>
    <body>
        <?php require_once "_navbar.php" ?>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-sm-6 align-self-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1>RegExp - Regular expression</h1>
                            <hr>
                            <h3>
                                preg_match()
                            </h3>
                            <hr>
                            <?php
                            $string = "www.nasirkhn.com";
                            $pattern = "/nasir/";

                            if (preg_match($pattern, $string))
                            {
                                echo "The url '$string' contains 'nasir'";
                            }
                            else
                            {
                                echo "The url '$string' does not contain 'nasir'";
                            }
                            ?>
                            <hr>
                            <h3>
                                preg_split()
                            </h3>
                            <hr>
                            <?php
                            $string = "I Love Regular Expressions";
                            $pattern = "/ /";

                            echo "String: $string <br>";
                            $return_array = preg_split($pattern, $string);

                            print_r($return_array );
                            ?>
                            <hr>
                            <h3>
                                preg_replace()
                            </h3>
                            <hr>
                            <?php
                            $string = "My website address is nasirkhn.com";
                            $pattern = "/nasirkhn.com/";
                            $replacement = "http://nasirkhn.com";

                            echo "String: $string <br>";

                            $string_new =  preg_replace($pattern, $replacement, $string);

                            echo "$string_new";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "_footer.php" ?>
    </body>
</html>
