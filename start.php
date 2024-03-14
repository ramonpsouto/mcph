<?php
session_start();
$_SESSION['cash'] = 1000;
$conn = new PDO("mysql:host=localhost", 'root', '');
$sql = "CREATE DATABASE mcph";
$conn->exec($sql);
