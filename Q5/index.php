<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Odd Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fbeee6;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .result {
            margin: 10px 0;
            color: #d35400;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="result">
        <?php
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $filtered = [];
        foreach ($numbers as $number) {
            if ($number % 2 != 0) {
                $filtered[] = $number;
            }
        }
        echo "Filtered Array: " . implode(", ", $filtered);
        ?>
    </div>
</body>
</html>
