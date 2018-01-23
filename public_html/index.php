<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  $pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASSWORD);

  $page = ((int)$_GET['page'] > 0) ? (int)$_GET['page'] : 1;

  $stmt = $pdo->query('select count(*) from product');
  $stmt->execute();
  $total = $stmt->fetchColumn();
  $hasNext = ($page * 4 < $total);
  $hasPrevious = ($page >= 2);
  $btnPosition = $hasPrevious ? 'btn-position' : '';

  $offset = ($page - 1) * 4;
  $sql = $pdo->query("select * from product order by id desc limit {$offset}, 4");
  $sql->execute();
  $products = $sql->fetchAll();
  
  require_once(dirname(__DIR__).'/public_html/view/index.php');
