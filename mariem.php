<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Checker</title>
</head>
<body>

    <h2>Enter the temperature:</h2>
    <form method="post">
        <input type="number" name="temp" required>
        <button type="submit">اعرض النتيجة</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST["temp"];

        if($temp < 0) {
            echo "<p>❄️ The weather is very cold</p>";
        }
        elseif($temp >= 0 && $temp < 15) {
            echo "<p>🌬️ The weather is cold</p>";
        }
        elseif($temp >= 15 && $temp < 30) {
            echo "<p>🌤️ The weather is warm</p>";
        }
        else {
            echo "<p>🔥 The weather is hot</p>";
        }
    }
    ?>

</body>
</html>
