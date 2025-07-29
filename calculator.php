<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<form method="post">
    Number 1: <input type="number" name="num1" required><br>
    Number 2: <input type="number" name="num2" required><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo 'You entered: ' . $num1 . ' and ' . $num2 . '<br>';
    echo 'Their Sum is: ' . ($num1 + $num2) . '<br>';
}
?>    

</body>
</html>