<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  $pdo = new PDO(PDO_DSN, DB_USER, DB_PASSWORD, $options);
  session_start();
  require_once(dirname(__DIR__).'/public_html/view/logout-input.php'); ?>
