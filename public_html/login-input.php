<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  $pdo = new PDO(PDO_DSN, DB_USER, DB_PASSWORD, $options);
  session_start();
  $token = sha1(uniqid(mt_rand(), true));
  $_SESSION['token'] = $token;
  require_once(dirname(__DIR__).'/public_html/view/login-input.php'); ?>
