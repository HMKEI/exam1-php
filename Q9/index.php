<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Contains</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9ebea;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .result {
            margin: 10px 0;
            color: #cb4335;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="result">
        <?php
        $mainString = "Hello, this is a PHP example.";
        $searchString = "PHP";
        if (preg_match("/$searchString/", $mainString)) {
            echo "The string '$searchString' is found in the main string.";
        } else {
            echo "The string '$searchString' is NOT found in the main string.";
        }
        ?>
    </div>
</body>
</html>
