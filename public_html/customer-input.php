<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  $pdo = new PDO(PDO_DSN, DB_USER, DB_PASSWORD, $options);
  session_start();
  $name = $address = $login = $password = '';

  if (isset($_SESSION['customer'])) {
    $name = $_SESSION['customer']['name'];
    $address = $_SESSION['customer']['address'];
    $login = $_SESSION['customer']['login'];
    $password = $_SESSION['customer']['password'];
  }

  require_once(dirname(__DIR__).'/public_html/view/customer-input.php'); ?>
