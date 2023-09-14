<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <style>
        body {
            text-align: center;
        }
        div {
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    $result = "";
    $converted_temperature = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = floatval($_POST["temperature"]);
        $conversion_type = $_POST["conversion_type"];

        if ($conversion_type == "celsius_to_fahrenheit") {
            $converted_temperature = ($temperature * 9/5) + 32;
            $result = "{$temperature}°C is equal to {$converted_temperature}°F";
        } elseif ($conversion_type == "fahrenheit_to_celsius") {
            $converted_temperature = ($temperature - 32) * 5/9;
            $result = "{$temperature}°F is equal to {$converted_temperature}°C";
        }
    }
    ?>

    <form method="post" action="">
        <div>
            <label for="conversion_type">Choose Conversion:</label>
            <select name="conversion_type" required>
                <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
            </select>
        </div>
        <div>
            <label for="temperature">Enter Temperature:</label>
            <input type="number" name="temperature" required>
        </div>
        <div>
            <input type="submit" value="Convert">
        </div>
    </form>

    <?php
    if (!empty($result)) {
        echo "<p><strong>Result:</strong> $result</p>";
    }
    ?>

</body>
</html>