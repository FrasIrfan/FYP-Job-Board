<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>JSON Data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

<?php
$users = array(
    array("name" => "Fras", "age" => 21),
    array("name" => "Qazal", "age" => 19),
    array("name" => "Rocky", "age" => 3)
);

echo json_encode($users);
?>

</body>
</html>