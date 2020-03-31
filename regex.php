<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <?php require_once "_header.php" ?>

        <title>RegExp - Regular Expression</title>
    </head>
    <body>
        <?php require_once "_navbar.php" ?>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-sm-6 align-self-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1>RegExp - Regular Expression</h1>
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
                            <?php
                            $pattern = "/ca[kf]e/";
                            $text = "He was eating cake in the cafe.";
                            echo "Pattern: $pattern <br>";
                            echo "Text: $text <br>";
                            if(preg_match($pattern, $text)){
                                echo "Match found!";
                            } else{
                                echo "Match not found.";
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
                            <?php
                            $pattern = "/[\s,]+/";
                            $text = "My favourite colors are red, green and blue";
                            echo "String: $text <br>";
                            $parts = preg_split($pattern, $text);

                            // Loop through parts array and display substrings
                            foreach($parts as $part){
                                echo $part . "<br>";
                            }
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

                            <hr>

                            <?php
                            $pattern = "/\s/";
                            $replacement = "-";
                            $text = "Earth revolves around\nthe\tSun";

                            echo "Pattern: $pattern <br>";
                            echo "Text: <pre>$text</pre> <br>";

                            // Replace spaces, newlines and tabs
                            $text_new = preg_replace($pattern, $replacement, $text);
                            echo "Text: <pre>$text_new</pre> <br>";
                            // Replace only spaces
                            $text_new = str_replace(" ", "-", $text);
                            echo "Text: <pre>$text_new</pre> <br>";
                            ?>

                            <hr>
                            <?php
                            $pattern = '/\bcar\w*/';
                            $replacement = '<b>$0</b>';
                            $text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';

                            echo "Pattern: $pattern <br>";
                            echo "Text: <pre>$text</pre> <br>";

                            $text_new = preg_replace($pattern, $replacement, $text);
                            echo "New Text: <pre>$text_new</pre> <br>";
                            ?>



                            <hr>
                            <h3>
                                preg_grep()
                            </h3>
                            <hr>
                            <?php
                            $pattern = "/^B/";
                            $names = array("Bangladesh", "Nepal", "Bhutan");
                            echo "Names: ";
                            print_r($names);
                            $matches = preg_grep($pattern, $names);

                            // Loop through matches array and display matched names
                            echo "<br><br>Names starts with B<br>";
                            foreach($matches as $match){
                                echo $match . "<br>";
                            }
                            ?>

                            <hr>
                            <h3>
                                preg_match_all()
                            </h3>
                            <hr>
                            <?php
                            $pattern = "/color/i";
                            $text = "Color red is more visible than color blue in daylight.";
                            echo "Pattern: $pattern <br>";
                            echo "Text: $text <br>";

                            $matches = preg_match_all($pattern, $text, $array);
                            echo $matches . " matches were found.";
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "_footer.php" ?>
    </body>
</html>
