<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Color</title>
</head>
<body>
    <h2>Favorite Color</h2>

    <?php
    if(isset($_POST['color'])) {
        $color = $_POST['color'];

        switch($color) {
            case 'red':
                echo "Your favorite color is red.";
                break;
            case 'blue':
                echo "Your favorite color is blue.";
                break;
            case 'green':
                echo "Your favorite color is green.";
                break;
            default:
                echo "Your favorite color is $color.";
        }
    }
    ?>
</body>
</html>
