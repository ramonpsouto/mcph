<?php
require_once 'functions.php';
$tickers = index();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickers list</title>
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Logo</th>
                <th>Ticker</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickers as $ticker): ?> 
            <tr>
                <td>
                    <img src="<?= $ticker['logo']; ?>" alt="<?= $ticker['name']; ?>">
                </td>
                <td>
                    <a href="ticker.php?ticker=<?= $ticker['stock']; ?>"><?= $ticker['stock']; ?></a>
                </td>
                <td><?= $ticker['close']; ?></td>
            </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</body>
</html>