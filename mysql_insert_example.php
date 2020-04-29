<!doctype html>
<html lang="en">
<head>
    <?php require_once "_header.php" ?>

    <title>MySQL Insert Examples</title>
</head>
<body>
    <?php require_once "_navbar.php" ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-8 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">MySQL Insert Examples</h1>
                        <hr>

                        <h3 class="text-center">
                            MySQL ইনসার্ট (MySQLi Object-Oriented)
                        </h3>

                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";
$database = "my_database";

// Create connection
$conn = new mysqli ($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO my_database (name, email) VALUES ('Nasir Khan', 'nasir8891@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

                        </pre>

                        <h3 class="text-center">
                            MySQL ইনসার্ট (MySQLi Procedural)
                        </h3>
                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";
$database = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO my_database (name, email) VALUES ('Nasir Khan', 'nasir8891@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

                        </pre>

                        <h3 class="text-center">
                            MySQL ইনসার্ট (PDO)
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

    $sql = "INSERT INTO my_database (name, email) VALUES ('Nasir Khan', 'nasir8891@gmail.com')";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
                        </pre>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "_footer.php" ?>
</body>
</html>
