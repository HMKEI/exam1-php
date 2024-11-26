<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fef9e7;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .result {
            margin: 10px 0;
            color: #af601a;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="result">
        <?php
        $array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
        // Ascending Sort
        for ($i = 0; $i < count($array) - 1; $i++) {
            for ($j = $i + 1; $j < count($array); $j++) {
                if ($array[$i] > $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
        echo "Ascending Order: " . implode(", ", $array) . "<br>";

        // Descending Sort
        for ($i = 0; $i < count($array) - 1; $i++) {
            for ($j = $i + 1; $j < count($array); $j++) {
                if ($array[$i] < $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
        echo "Descending Order: " . implode(", ", $array);
        ?>
    </div>
</body>
</html>
