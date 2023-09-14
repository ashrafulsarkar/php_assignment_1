<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd Checker</title>
</head>
<body>
    <h1>Even/Odd Checker</h1>

    <?php
    $number = "";
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $result = "The number $number is even.";
        } else {
            $result = "The number $number is odd.";
        }
    }
    ?>

    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if (!empty($result)) {
        echo "<p><strong>Result:</strong> $result</p>";
    }
    ?>

</body>
</html>