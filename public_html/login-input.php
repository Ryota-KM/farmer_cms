<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  $pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASSWORD);
  session_start();
  $token = sha1(uniqid(mt_rand(), true));
  $_SESSION['token'] = $token;
  require_once(dirname(__DIR__).'/public_html/view/login-input.php'); ?>
