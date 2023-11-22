<?php
include "./connection/dbconfig.php";
$query = $pdo->query("select * from users where id='1'");
$result = $query->fetch();
print_r($result) ;
echo $result['name'];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="color:red;"><?= $result['name'] ?></p>
</body>
</html>


