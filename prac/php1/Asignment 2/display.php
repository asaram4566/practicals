<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arithmetic Operations Result</title>
</head>
<body>
    <h2>Arithmetic Operations Result</h2>

    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;
    $quotient = $num1 / $num2;
    $remainder = $num1 % $num2;

    echo "Sum: $num1 + $num2 = $sum <br>";
    echo "Difference: $num1 - $num2 = $difference <br>";
    echo "Product: $num1 * $num2 = $product <br>";
    echo "Quotient: $num1 / $num2 = $quotient <br>";
    echo "Remainder: $num1 % $num2 = $remainder <br>";
    ?>
</body>
</html>
