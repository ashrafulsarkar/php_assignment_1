<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body {
            text-align: center;
        }
        div{
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>

    <?php
    $num1 = "";
    $num2 = "";
    $operation = "";
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        $operation = $_POST["operation"];

        // Perform the selected operation
        switch ($operation) {
            case "addition":
                $result = $num1 + $num2;
                break;
            case "subtraction":
                $result = $num1 - $num2;
                break;
            case "multiplication":
                $result = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero is not allowed.";
                }
                break;
            default:
                $result = "Invalid operation.";
        }
    }
    ?>

    <form method="post" action="">
        <div>
            <label for="num1">Enter Number 1:</label>
            <input type="number" name="num1" required>
        </div>
        
        <div>
            <label for="operation">Select Operation:</label>
            <select name="operation" required>
                <option value="addition">Addition (+)</option>
                <option value="subtraction">Subtraction (-)</option>
                <option value="multiplication">Multiplication (*)</option>
                <option value="division">Division (/)</option>
            </select>
        </div>
        
        <div>
            <label for="num2">Enter Number 2:</label>
            <input type="number" name="num2" required>
        </div>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if (!empty($result)) {
        echo "<p><strong>Result:</strong> $result</p>";
    }
    ?>

</body>
</html>