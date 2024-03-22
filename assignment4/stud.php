<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "student";


$conn = new mysqli($hostname, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $roll_no = $_POST["roll_no"];
    $class = $_POST["class"];
    $contact = $_POST["contact"];

    
    $sql = "INSERT INTO stud_table (name, roll_no, class, contact) VALUES ('$name', '$roll_no', '$class', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo " record Added  successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>