<?php
require_once 'functions.php';
$ticker = ticker();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ticker['shortName']; ?></title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>
<body>

    <h1><?= $ticker['shortName']; ?></h1>
    <img src="<?= $ticker['logourl']; ?>" alt="<?= $ticker['shortName']; ?>">
    <span><?= $ticker['regularMarketPrice']; ?></span>
    <span><?= $ticker['regularMarketChange']; ?></span>
    <span><?= $ticker['regularMarketChangePercent']; ?></span>
    
    <form action="buy.php" method="post">
        <input type="hidden" name="price" value="<?= $ticker['regularMarketPrice']; ?>"> <!-- input hidden para enviar o valor da ação -->
        <label for="qty">Qty:</label>
        <input type="number" name="qty" id="qty">
        <button type="submit">Submit</button>
    </form>

</body>
</html>