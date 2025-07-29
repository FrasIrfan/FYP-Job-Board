<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo 'You entered: ' . $num1 . ' and ' . $num2 . '<br>';
    echo 'Their Sum is: ' . ($num1 + $num2) . '<br>';
} else {
    echo 'Please provide num1 and num2 as URL parameters. Example: calculator.php?num1=5&num2=3';
}
?>    

</body>
</html>