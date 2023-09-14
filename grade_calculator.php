<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
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
    <h1>Grade Calculator</h1>

    <?php
    $average = "";
    $letter_grade = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = floatval($_POST["score1"]);
        $score2 = floatval($_POST["score2"]);
        $score3 = floatval($_POST["score3"]);

        // Calculate the average of the test scores
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the letter grade
        if ($average >= 90) {
            $letter_grade = "A";
        } elseif ($average >= 80) {
            $letter_grade = "B";
        } elseif ($average >= 70) {
            $letter_grade = "C";
        } elseif ($average >= 60) {
            $letter_grade = "D";
        } else {
            $letter_grade = "F";
        }
    }
    ?>

    <form method="post" action="">
        <div>
            <label for="score1">Test Score 1:</label>
            <input type="number" name="score1" min="0" max="100" required>
        </div>

        <div>
            <label for="score2">Test Score 2:</label>
            <input type="number" name="score2" min="0" max="100" required>
        </div>

        <div>
            <label for="score3">Test Score 3:</label>
            <input type="number" name="score3" min="0" max="100" required>
        </div>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if (!empty($average) && !empty($letter_grade)) {
        echo "<p><strong>Average Score:</strong> $average</p>";
        echo "<p><strong>Letter Grade:</strong> $letter_grade</p>";
    }
    ?>

</body>
</html>
