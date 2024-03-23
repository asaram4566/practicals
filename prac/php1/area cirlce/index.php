<!DOCTYPE html>
<html>
<head>
    <title>Circle Calculator</title>
</head>
<body>
    <h2>Calculate Area, Diameter, and Circumference of a Circle</h2>
    <form method="post">
        Enter the radius of the circle: <input type="text" name="radius">
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    $radius = 0;
    $area = 0;
    $diameter = 0;
    $circumference = 0;
    
    if(isset($_POST['radius'])) {
        $radius = $_POST['radius'];
    }

    $area = pi() * $radius * $radius;
    $diameter = 2 * $radius;
    $circumference = 2 * pi() * $radius;

    echo "<h3>Results:</h3>";
    echo "Area of the circle: " . round($area, 2) . "<br>";
    echo "Diameter of the circle: " . round($diameter, 2) . "<br>";
    echo "Circumference of the circle: " . round($circumference, 2);
    ?>
</body>
</html>
