<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
</head>
<body>
    <h1>Number Comparison Tool</h1>

    <?php
    $num1 = "";
    $num2 = "";
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);

        // Use the ternary operator to determine the larger number
        $result = ($num1 > $num2) ? "$num1 is larger." : "$num2 is larger.";
    }
    ?>

    <form method="post" action="">
        <label for="num1">Enter Number 1:</label>
        <input type="number" name="num1" required>
        
        <label for="num2">Enter Number 2:</label>
        <input type="number" name="num2" required>

        <input type="submit" value="Compare">
    </form>

    <?php
    if (!empty($result)) {
        echo "<p><strong>Result:</strong> $result</p>";
    }
    ?>

</body>
</html>
