<?php
// print_r($_POST);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number_1 = filter_var($_POST['number_1'], FILTER_VALIDATE_FLOAT);
    $number_2 = filter_var($_POST['number_2'], FILTER_VALIDATE_FLOAT);

    if ($_POST['number_1'] != '' && $_POST['number_2'] != '' && $_POST['calculation'] != '') {
        $calculation = $_POST['calculation'];
        $total = 0;

        switch ($calculation) {
            case 'Addition':
                $total = $number_1 + $number_2;
                break;
            case 'Subtraction':
                $total = $number_1 - $number_2;
                break;
            case 'Multiplication':
                $total = $number_1 * $number_2;
                break;
            case 'Division':
                if ($number_2 == 0) {
                    $total = "Undefined";
                    $error = "Devide by 0 is undefined!";
                }
                else {
                    $total = $number_1 / $number_2;
                }
                break;
            default:
                $error = "Something went wrong!";
        }
    }
    else {
        $error = "All fields are required!";
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
                            <h1 class="text-center">Calculator</h1>
                            <?php if($error!=''): ?>
                            <div class="alert alert-warning text-center">
                                <?php echo $error; ?>
                            </div>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-group">
                                    <label for="number_1">Number 1</label>
                                    <input type="number" class="form-control" name="number_1" value="<?php echo $number_1; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="number_2">Number 2</label>
                                    <input type="number" class="form-control" name="number_2" value="<?php echo $number_2; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="calculation">Calculation</label>
                                    <select class="custom-select" name="calculation" required>
                                        <option selected>Please Select</option>
                                        <option value="Addition" <?php echo ($calculation == 'Addition')? 'Selected' : ''; ?>>Addition (+)</option>
                                        <option value="Subtraction" <?php echo ($calculation == 'Subtraction')? 'Selected' : ''; ?>>Subtraction (-)</option>
                                        <option value="Multiplication" <?php echo ($calculation == 'Multiplication')? 'Selected' : ''; ?>>Multiplication (*)</option>
                                        <option value="Division" <?php echo ($calculation == 'Division')? 'Selected' : ''; ?>>Division (/)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="total">Total</label>
                                    <input type="text" class="form-control" name="total" value="<?php echo $total; ?>" disabled>
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
