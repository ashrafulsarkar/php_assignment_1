<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>
<body>

<?php
$name = "Ashraful Sarkar";
$age = 25;
$country = "Bangladesh";
$introduction = "Hello, I'm " . $name . ". I am " . $age . " years old, and I'm from " . $country . ".";


echo "<h1>Personal Information</h1>";
echo "<p><strong>Name:</strong> " . $name . "</p>";
echo "<p><strong>Age:</strong> " . $age . "</p>";
echo "<p><strong>Country:</strong> " . $country . "</p>";
echo "<p><strong>Introduction:</strong> " . $introduction . "</p>";
?>

</body>
</html>