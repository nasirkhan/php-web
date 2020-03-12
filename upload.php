<?php
// print_r($_POST);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file_field"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file_field"]["tmp_name"]);
        if($check !== false) {
            $error_message = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error_message = "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $error_message = "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["file_field"]["size"] > 500000) {
        $error_message = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $error_message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error_message = "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file_field"]["tmp_name"], $target_file)) {
            $success_message = "The file ". basename( $_FILES["file_field"]["name"]). " has been uploaded.";
        } else {
            $error_message = "Sorry, there was an error uploading your file.";
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <?php include "_header.php" ?>

    <title>Calculator</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-6 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">File Upload</h1>
                        <?php if($error_message!=''): ?>
                            <div class="alert alert-warning text-center">
                                <?php echo $error_message; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($success_message!=''): ?>
                            <div class="alert alert-success text-center">
                                <?php echo $success_message; ?>
                            </div>
                        <?php endif; ?>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="total">Select image to upload:</label>
                                <input type="file" name="file_field" id="file_field">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "_footer.php" ?>
</body>
</html>
