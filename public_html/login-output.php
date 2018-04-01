<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  $pdo = new PDO(PDO_DSN, DB_USER, DB_PASSWORD, $options);
  session_start();

  if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました');
  }
  $token = $_REQUEST['token'];
  $sql = $pdo->prepare('select * from customer where login=? and password=?');
  $sql->execute([$_REQUEST['login'], $_REQUEST['password']]);

  foreach ($sql->fetchAll() as $data):
  	$_SESSION['customer'] =
      [
        'id' => $data['id'],
        'name' => $data['name'],
        'address' => $data['address'],
        'login' => $data['login'],
        'password' => $data['password']
      ];
  endforeach;

$customerName = $_SESSION['customer']['name'];
require_once(dirname(__DIR__).'/public_html/view/login-output.php');
