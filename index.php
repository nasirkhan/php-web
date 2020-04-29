<!doctype html>
<html lang="en">
    <head>
        <?php require_once "_header.php" ?>

        <title>PHP Project</title>
    </head>
    <body>
        <?php require_once "_navbar.php" ?>

        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-sm-6 align-self-center">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center">PHP</h1>

                            <hr>
                            <h3 class="text-center">
                                Database
                            </h3>

                            <div class="row mb-4">
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="mysql_connect_example.php">Connect</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="#">Insert</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="#">Prepared</a>
                                </div>
                            </div>
                            <!-- <div class="row mb-4">
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="#">Select</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="#">Update</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="#">Delete</a>
                                </div>
                            </div> -->

                            <h3 class="text-center">
                                Features
                            </h3>

                            <div class="row mb-4">
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="calculator.php">Calculator</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="upload.php">Upload</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="cookies.php">Cookies</a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="session.php">Session</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="filter.php">Filter</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="mail.php">Mail</a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4">

                                </div>
                                <div class="col-4">
                                    <a class="btn btn-outline-primary btn-block" href="regex.php">RegExp</a>
                                </div>
                                <div class="col-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "_footer.php" ?>
    </body>
</html>
