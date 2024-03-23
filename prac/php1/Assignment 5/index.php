<?php
$hour = date("G");

if ($hour < 12) {
    $greeting = "Good morning!";
} elseif ($hour < 18) {
    $greeting = "Good afternoon!";
} else {
    $greeting = "Good evening!";
}

echo $greeting . "<br>";

$currentYear = date("Y"); 
$isLeapYear = (($currentYear % 4 == 0) && ($currentYear % 100 != 0) || ($currentYear % 400 == 0)) ? "Leap year" : "Not a leap year";

echo "The current year $currentYear is $isLeapYear.";
?>
