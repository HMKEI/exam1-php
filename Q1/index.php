<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .chessboard {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            border: 2px solid #333;
            background-color: #fff;
        }
        .chessboard div {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: #000;
        }
        .white {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="chessboard">
        <?php
        for ($row = 0; $row < 8; $row++) {
            for ($col = 0; $col < 8; $col++) {
                $class = ($row + $col) % 2 == 0 ? 'white' : 'black';
                echo "<div class='$class'></div>";
            }
        }
        ?>
    </div>
</body>
</html>
