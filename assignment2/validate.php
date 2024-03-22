<?php

$firstName = $lastName = $password = $confirmPassword = $email = $mobileNumber = '';
$firstNameError = $lastNameError = $passwordError = $confirmPasswordError = $emailError = $mobileNumberError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    if (empty($firstName)) {
        $firstNameError = 'First name is required';
    } elseif (!preg_match("/^[a-zA-Z'-]+$/", $firstName)) {
        $firstNameError = 'Invalid first name';
    }

    $lastName = $_POST["lastName"];
    if (empty($lastName)) {
        $lastNameError = 'Last name is required';
    } elseif (!preg_match("/^[a-zA-Z'-]+$/", $lastName)) {
        $lastNameError = 'Invalid last name';
    }

    $password = $_POST["password"];
    if (empty($password)) {
        $passwordError = 'Password is required';
    }

    $confirmPassword = $_POST["confirmPassword"];
    if (empty($confirmPassword)) {
        $confirmPasswordError = 'Confirm password is required';
    } elseif ($password !== $confirmPassword) {
        $confirmPasswordError = 'Passwords do not match';
    }

    $email1 = $_POST["email"];
    $pattern = '/^([a-zA-Z0-9._-])+@([a-zA-Z0-9.-])+(\.[a-zA-Z]{2,3})$/';

    if (empty($email1)) {
        $emailError = 'Email is required';
    } elseif (!preg_match($email1,$pattern)) {
        $emailError = 'Invalid email format';
    }

    $mobile = $_POST["mobileNumber"];
    if (empty($mobile)) {
        $mobileNumberError = 'Mobile number is required';
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $mobileNumberError = 'Invalid mobile number';
    }

    if (empty($firstNameError) && empty($lastNameError) && empty($passwordError) && empty($confirmPasswordError) && empty($emailError) && empty($mobileNumberError)) {
        echo 'Form submitted successfully!';
    }
}
?>

<form method="post" action="validate.php">
    First Name: <input type="text" name="firstName" value="<?php echo $firstName; ?>">
    <span class="error"><?php echo $firstNameError; ?></span>
    <br>

    Last Name: <input type="text" name="lastName" value="<?php echo $lastName; ?>">
    <span class="error"><?php echo $lastNameError; ?></span>
    <br>

    Password: <input type="password" name="password">
    <span class="error"><?php echo $passwordError; ?></span>
    <br>

    Confirm Password: <input type="password" name="confirmPassword">
    <span class="error"><?php echo $confirmPasswordError; ?></span>
    <br>

    Email: <input type="text" name="email" ?>
    <span class="error"><?php echo $emailError; ?></span>
    <br>

    Mobile Number: <input type="text" name="mobileNumber" value="">
    <span class="error"><?php echo $mobileNumberError; ?></span>
    <br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php 
   if(isset($_POST["submit"])){
        echo " First Name = " . $firstName ."<br>";
        echo "Last Name = " . $lastName . "<br>";
        echo "Email = " . $email1 . "<br>";
        echo "Mobile Number = " . $mobile . "<br>";
    }
?>