<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
require "query.php";
?>

<div class="container">
    <h1 align="center">Список сотрудников</h1>
        <table border="1">
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Email</th>
            </tr>
            <?php
            foreach ($result as $value) { ?>
            <tr>
                <td><?= $value["name"] ?></td>
                <td><?= $value["surname"] ?></td>
                <td><?= $value["email"] ?></td>
            </tr>
            <?php } ?>
        </table>
</div>
</body>
</html>