<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  $pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASSWORD);
  $sql = $pdo->prepare('select * from product where id=?');
  $sql->execute([$_REQUEST['id']]);
  $product = $sql->fetchAll();
  mb_internal_encoding('UTF-8');

  function fontSize($commentLen) {
    if ($commentLen < 121 && $commentLen >= 81) {
      echo 'short';
    } elseif ($commentLen < 176 && $commentLen >= 121) {
        echo 'middle';
    } elseif ($commentLen >= 176) {
        echo 'long';
    } elseif ($commentLen >= 20) {
        echo 'description';
    } else {
        echo '';
    }
  }

  require_once(dirname(__DIR__).'/public_html/view/detail.php');
