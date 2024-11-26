<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?php echo isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : '#ffffff'; ?>;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #333;
        }
        .form-container {
            margin-top: 20px;
        }
        input[type="color"], input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }
        button {
            padding: 10px 15px;
            border: none;
            background-color: #3498db;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Change Background Color</h1>
    <div class="form-container">
        <form method="POST" action="">
            <label for="colorPicker">Pick a color:</label>
            <input type="color" id="colorPicker" name="colorPicker" value="#ffffff">
            
            <label for="colorInput">Or enter a color:</label>
            <input type="text" id="colorInput" name="colorInput" placeholder="e.g., #ff5733, red">

            <button type="submit">Change Color</button>
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $color = !empty($_POST['colorInput']) ? htmlspecialchars($_POST['colorInput']) : $_POST['colorPicker'];

        if (preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', $color) || preg_match('/^[a-zA-Z]+$/', $color)) {
            setcookie('bgColor', $color, time() + (86400 * 30), "/");
            if ($_COOKIE['bgColor'] !== $color) {
                echo "<script>window.location.reload();</script>";
            }
        } else {
            echo "<p style='color: red;'>Invalid color input. Please enter a valid color code.</p>";
        }
    }
    ?>
</body>
</html>
