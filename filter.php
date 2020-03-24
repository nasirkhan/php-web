<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <?php require_once "_header.php" ?>

        <title>Filter</title>
    </head>
    <body>
        <?php require_once "_navbar.php" ?>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-sm-6 align-self-center">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1>Filter</h1>
                            <hr>
                            <h3>
                                filter_var()
                            </h3>
                            <hr>

                            <?php
                            // for filters that accept options, use this format
                            $options = array(
                                'options' => array(
                                    'default' => 3, // value to return if the filter fails
                                    // other options here
                                    'min_range' => 0
                                ),
                                'flags' => FILTER_FLAG_ALLOW_OCTAL,
                            );
                            $var = filter_var('0755', FILTER_VALIDATE_INT, $options);
                            var_dump($var);

                            // for filters that only accept flags, you can pass them directly
                            $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
                            var_dump($var);

                            // for filters that only accept flags, you can also pass as an array
                            $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN,
                            array('flags' => FILTER_NULL_ON_FAILURE));
                            var_dump($var);

                            // callback validate filter
                            function foo($value)
                            {
                                // Expected format: Surname, GivenNames
                                if (strpos($value, ", ") === false) return false;
                                list($surname, $givennames) = explode(", ", $value, 2);
                                $empty = (empty($surname) || empty($givennames));
                                $notstrings = (!is_string($surname) || !is_string($givennames));
                                if ($empty || $notstrings) {
                                    return false;
                                } else {
                                    return $value;
                                }
                            }
                            $var = filter_var('Nasir, Khan Saikat', FILTER_CALLBACK, array('options' => 'foo'));
                            ?>

                            <hr>
                            <h3>
                                filter_list()
                            </h3>
                            <hr>

                            <?php
                            error_reporting(E_ALL | E_STRICT);
                            $data = [
                                'product_id' => 'Bangla<script>',
                                'component' => '10',
                                'versions' => '2.0.33',
                                'testscalar' => array('2', '23', '10', '12'),
                                'testarray' => '2',
                            ];
                            print_r($data);
                            print_r('<br>');

                            $args = [
                                'product_id' => FILTER_SANITIZE_ENCODED,
                                'component' => [
                                    'filter' => FILTER_VALIDATE_INT,
                                    'flags' => FILTER_FORCE_ARRAY,
                                    'options' => ['min_range' => 1, 'max_range' => 10]
                                ],
                                'versions' => FILTER_SANITIZE_ENCODED,
                                'doesnotexist' => FILTER_VALIDATE_INT,
                                'testscalar' => [
                                    'filter' => FILTER_VALIDATE_INT,
                                    'flags' => FILTER_REQUIRE_SCALAR,
                                ],
                                'testarray' => [
                                    'filter' => FILTER_VALIDATE_INT,
                                    'flags' => FILTER_FORCE_ARRAY,
                                ]
                            ];

                            $result = filter_var_array($data, $args);

                            var_dump($result);
                            echo "\n";
                            ?>

                            <hr>
                            <h3>
                                filter_list()
                            </h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Filter Name</th>
                                        <th>Filter ID</th>
                                    </tr>
                                    <?php
                                    foreach (filter_list() as $id =>$filter) {
                                        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "_footer.php" ?>
    </body>
</html>
