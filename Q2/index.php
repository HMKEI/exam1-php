<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Triangle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e9f7ef;
        }
        .triangle {
            text-align: center;
            font-size: 20px;
            color: #2e86c1;
        }
    </style>
</head>
<body>
    <div class="triangle">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $i . " ";
            }
            echo "<br>";
        }
        ?>
    </div>
</body>
</html>
