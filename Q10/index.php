<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f7;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .result {
            margin: 10px 0;
            color: #1abc9c;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="result">
        <?php
        function isPrime($number) {
            if ($number <= 1) return false;
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) return false;
            }
            return true;
        }
        $number = 29; 
        if (isPrime($number)) {
            echo "$number is a prime number.";
        } else {
            echo "$number is NOT a prime number.";
        }
        ?>
    </div>
</body>
</html>
