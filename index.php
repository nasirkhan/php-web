<?php
// print_r($_POST);

$number_1 = $_POST['number_1'];
$number_2 = $_POST['number_2'];
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
        $total = $number_1 / $number_2;
        break;
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Calculator</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-sm-6 align-self-center">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center">Calculator</h1>
                            <form method="POST" action="index.php">
                                <div class="form-group">
                                    <label for="number_1">Number 1</label>
                                    <input type="text" class="form-control" name="number_1" value="<?php echo $number_1; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="number_2">Number 2</label>
                                    <input type="text" class="form-control" name="number_2" value="<?php echo $number_2; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="calculation">Calculation</label>
                                    <select class="custom-select" name="calculation">
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
    </body>
</html>
