<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  require_once(dirname(__DIR__).'/public_html/functions.php');

  $name = trim($_REQUEST['name']);
  $price = trim($_REQUEST['price']);
  $comment = trim($_REQUEST['comment']);
  $quantity = trim($_REQUEST['quantity']);
  $unit = $_REQUEST['unit'];
  $id = $_REQUEST['id'];

  require_once(dirname(__DIR__).'/public_html/edit-validation.php');

  if ($validated === true):

    if (isset($_REQUEST['newProduct'])) {
      $insert = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASSWORD);
      $sqlInsert = $insert->prepare('insert into product value (null, ?,?,?,?,?)');
      $sqlInsert->execute([$name, $comment,
      mb_convert_kana($price,"n","utf-8"),
      mb_convert_kana($quantity,"n","utf-8"), $unit]);
      $message = '<p>新しい商品を追加しました。</p>';

        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
          $file = 'image/'.basename($_FILES['file']['name']);
          move_uploaded_file($_FILES['file']['tmp_name'], $file);
          rename($file, 'image/'.$name.'.png');
        }
    }

    if (isset($_REQUEST['updateProduct'])) {
      $update = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASSWORD);
      $sqlUpdate = $update->prepare('update product set name=?, comment=?, quantity=?, unit=?, price=? where id=?');
      $sqlUpdate->execute([$name, $comment,
      mb_convert_kana($quantity, "n", "utf-8"),
      $unit,
      mb_convert_kana($price,"n","utf-8"), $id]);
      $message = '<p>商品の情報を変更しました。</p>';

        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
          $file = 'image/'.basename($_FILES['file']['name']);
          move_uploaded_file($_FILES['file']['tmp_name'], $file);
          rename($file, 'image/'.$name.'.png');
        }
    }

    if (isset($_REQUEST['deleteProduct'])) {
      $delete = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASSWORD);
      $sqldelete = $delete->prepare('delete from product where id=?');
      $sqldelete->execute([$_REQUEST['id']]);
      $message = '<p>商品の登録を削除しました</p>';
    }

  endif;

  if (!(isset($_REQUEST['id']))) {
    $message = '';
  }

  $pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASSWORD);
  $sql = $pdo->query('select * from product order by id desc');
  $items = $sql->fetchAll();
  require_once(dirname(__DIR__).'/public_html/view/edit-desc.php');
