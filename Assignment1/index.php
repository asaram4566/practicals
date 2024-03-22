<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemberShip Form</title>
</head>

<body>
    <h2>Membership Form</h2>
    <form action="display.php" method="post">
        <label for="username">First Name:</label>
        <input type="text" name="username" required><br><br>

        <label for="username">Last Name:</label>
        <input type="text" name="lastName" required><br><br>

        <label for="password">Choose a Password</label>
        <input type="password" name="password" required><br><br>

        <label for="password">Retype a Password</label>
        <input type="password" name="password" required><br><br>


        <label for="male">Male</label>
        <input type="radio" name="gender" value="male">

        <label for="female">Female</label>
        <input type="radio" name="gender" value="female"> <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email">

        <input type="submit" value=" Send Details">
        <input type="reset">
    </form>
</body>

</html>