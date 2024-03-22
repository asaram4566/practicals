<?php

$hostname = "localhost";
$userame = "root";
$password = "";
$dbname = "employee";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Emp_id, Emp_name, Emp_Address, Emp_salary FROM employee_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["Emp_id"]. " - Name: " . $row["Emp_name"]. " - Address: " . $row["Emp_Address"]. " - Salary: " . $row["Emp_salary"]. "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>