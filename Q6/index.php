<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Maximum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8daef;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .result {
            margin: 10px 0;
            color: #6c3483;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="result">
        <?php
        $numbers = [10, 30, 20];
        $max = $numbers[0];
        if ($numbers[1] > $max) {
            $max = $numbers[1];
        }
        if ($numbers[2] > $max) {
            $max = $numbers[2];
        }
        echo "Maximum Number: " . $max;
        ?>
    </div>
</body>
</html>
