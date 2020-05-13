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
                        <h1 class="text-center">MySQL Database Create Examples</h1>
                        <hr>

                        <h3 class="text-center">
                            MySQL ডাটাবেজ তৈরী (MySQLi Object-Oriented)
                        </h3>

                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE my_database";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
                        </pre>

                        <h3 class="text-center">
                            MySQL ডাটাবেজ তৈরী (MySQLi Procedural)
                        </h3>
                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE my_database";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
                        </pre>

                        <h3 class="text-center">
                            MySQL ডাটাবেজ তৈরী (PDO)
                        </h3>
                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE my_database";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
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
