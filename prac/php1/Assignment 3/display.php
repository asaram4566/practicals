<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Results</title>
</head>
<body>
    <h2>Comparison Results</h2>

    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 == $num2) {
        echo "Condition 1: $num1 and $num2 are equal. <br>";
    }

    if ($num1 > $num2) {
        echo "Condition 2: $num1 is greater than $num2. <br>";
    }

    if ($num1 <= $num2) {
        echo "Condition 3: $num1 is less than or equal to $num2. <br>";
    }

    if ($num1 != $num2) {
        echo "Condition 4: $num1 and $num2 are not equal. <br>";
    }
    ?>
</body>
</html>
