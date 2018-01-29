<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  $pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8', DB_USER, DB_PASSWORD);
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
