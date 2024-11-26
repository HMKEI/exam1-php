<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previous Month</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d6eaf8;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .result {
            margin: 10px 0;
            color: #21618c;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="result">
        <?php
        $currentMonth = date("n");
        $previousMonth = $currentMonth - 1;
        if ($previousMonth == 0) {
            $previousMonth = 12; 
        }
        echo "Current Month: $currentMonth<br>";
        echo "Previous Month: $previousMonth";
        ?>
    </div>
</body>
</html>
