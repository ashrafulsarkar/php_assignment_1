<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    $temperature = 15;

    if ($temperature <= 0) {
        $message = "It's freezing!";
    } elseif ($temperature > 0 && $temperature <= 15) {
        $message = "It's cool.";
    } elseif ($temperature > 15) {
        $message = "It's warm.";
    }
    ?>

    <p><strong>Temperature:</strong> <?php echo $temperature; ?>°C</p>
    <p><strong>Weather:</strong> <?php echo $message; ?></p>

</body>
</html>