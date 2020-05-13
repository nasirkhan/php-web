<!doctype html>
<html lang="en">
<head>
    <?php require_once "_header.php" ?>

    <title>MySQL Create Examples</title>
</head>
<body>
    <?php require_once "_navbar.php" ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-8 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">MySQL Connect Examples</h1>
                        <hr>

                        <h3 class="text-center">
                            MySQL কানেক্ট (MySQLi Object-Oriented)
                        </h3>

                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";
$database = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
                        </pre>

                        <h3 class="text-center">
                            MySQL কানেক্ট (MySQLi Procedural)
                        </h3>
                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";
$database = "my_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
                        </pre>

                        <h3 class="text-center">
                            MySQL কানেক্ট (PDO)
                        </h3>
                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";
$database = "my_database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
                        </pre>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "_footer.php" ?>
</body>
</html>
