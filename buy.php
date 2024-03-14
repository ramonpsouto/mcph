<?php
session_start();
$qty = $_POST['qty'];
$price = $_POST['price'];

$total = $qty * $price;

if($_SESSION['cash'] > $total)
{
    $_SESSION['cash'] -= $total;
    echo 'comprou com sucesso, agr tem '.$_SESSION['cash'];
} else {
    echo 'vc n tem dinheiro pobre';
}
