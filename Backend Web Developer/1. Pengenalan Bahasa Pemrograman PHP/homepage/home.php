<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Tag PHP ke HTML</title>
</head>
<body>
    <?php
        echo "Hello world!";     
    ?>
    <br>
    <?= "Hello world!"; ?>
    <br>
    <ol>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ol>
    <br>
    <?php
        for ($i=1; $i <= 1000; $i++){
    ?>
    <ol>
        <li><?= $i; ?></li>
    </ol>
    <?php
        }
    ?>
</body>
</html>