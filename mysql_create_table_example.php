<!doctype html>
<html lang="en">
<head>
    <?php require_once "_header.php" ?>

    <title>MySQL Create Table Examples</title>
</head>
<body>
    <?php require_once "_navbar.php" ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-8 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">MySQL Table Create Examples</h1>
                        <hr>

                        <h3 class="text-center">
                            MySQL টেবিল তৈরী (MySQLi Object-Oriented)
                        </h3>

                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE `users` (
`id` INT UNSIGNED AUTO_INCREMENT ,
`name` VARCHAR(191) NOT NULL ,
`email` VARCHAR(191) NOT NULL ,
PRIMARY KEY (`id`)
);";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

                        </pre>

                        <h3 class="text-center">
                            MySQL টেবিল তৈরী (MySQLi Procedural)
                        </h3>
                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "my_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE `users` (
`id` INT UNSIGNED AUTO_INCREMENT ,
`name` VARCHAR(191) NOT NULL ,
`email` VARCHAR(191) NOT NULL ,
PRIMARY KEY (`id`)
);";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

                        </pre>

                        <h3 class="text-center">
                            MySQL টেবিল তৈরী (PDO)
                        </h3>
                        <pre>
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "my_database";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE `users` (
`id` INT UNSIGNED AUTO_INCREMENT ,
`name` VARCHAR(191) NOT NULL ,
`email` VARCHAR(191) NOT NULL ,
PRIMARY KEY (`id`)
);";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table MyGuests created successfully";
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
