<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Operations Result</title>
</head>
<body>
    <h2>Number Operations Result</h2>

    <?php
    if(isset($_POST['number']) && isset($_POST['operation'])) {
        $number = $_POST['number'];
        $operation = $_POST['operation'];

        if($operation === 'Reverse') {
            $result = strrev($number);
            echo "Reverse of $number is: $result";
        }

        if($operation === 'Factorial') {
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            echo "Factorial of $number is: $factorial";
        }

        if($operation === 'Sum') {
            $sum = 0;
            $temp = $number;
            while ($temp != 0) {
                $digit = $temp % 10;
                $sum += $digit;
                $temp = floor($temp / 10);
            }
            echo "Sum of digits of $number is: $sum";
        }
    }
    ?>
</body>
</html>
