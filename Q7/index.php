<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment Date</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fcf3cf;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .result {
            margin: 10px 0;
            color: #b9770e;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="result">
        <?php
        $date = "2012-12-21";
        $newDate = date("Y-m-d", strtotime("+1 month", strtotime($date)));
        echo "Original Date: $date<br>";
        echo "New Date: $newDate";
        ?>
    </div>
</body>
</html>
