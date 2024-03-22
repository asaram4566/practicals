<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
    body {
        font-style: italic;
    }

    h2 {
        color: blue;
    }
    </style>
</head>

<body>
    <h2>Thank You</h2>
    <h3>Thank You For Registering. Here is the Information You Submitted</h3>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $lastName = $_POST["lastName"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];

        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Last Name:</strong> $lastName</p>";
        echo "<p><strong>Password:</strong> $password</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Email:</strong> $email</p>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
</body>

</html>