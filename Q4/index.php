<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d4efdf;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .result {
            margin: 10px 0;
            color: #148f77;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="result">
        <?php
        $numbers = [10, 20, 30, 40, 50];
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        $average = $sum / count($numbers);
        echo "Average: " . $average;
        ?>
    </div>
</body>
</html>
