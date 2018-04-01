<?php
require_once(dirname(__DIR__).'/public_html/database.php');
$pdo = new PDO(PDO_DSN, DB_USER, DB_PASSWORD, $options);
session_start();

require_once(dirname(__DIR__).'/public_html/validation.php');

if (isset($_SESSION['customer'])) {
	$id = $_SESSION['customer']['id'];
	$sql = $pdo->prepare('select * from customer where id!=? and login=?');
	$sql->execute([$id, $login]);
} else {
	$sql = $pdo->prepare('select * from customer where login=?');
	$sql->execute([$login]);
}

if (empty($sql->fetchAll())) {
	if (isset($_SESSION['customer'])) {
		$sql = $pdo->prepare('update customer set name=?, address=?, login=?, password=? where id=?');
		$sql->execute([$name, $address, $login, $password, $id]);
		$_SESSION['customer'] =
      ['id'=>$id, 'name'=>$name, 'address'=>$address, 'login'=>$login, 'password'=>$password];
		$message = '<p>ご登録内容を変更しました。</p>';
	} else {
		$sql = $pdo->prepare('insert into customer values(null,?,?,?,?)');
		$sql->execute([$name, $address, $login, $password]);
    $_SESSION['customer'] =
    ['name'=>$name, 'address'=>$address, 'login'=>$login, 'password'=>$password];
      $message = '<p>会員登録ありがとうございました。</p><p>引き続きお買い物をお楽しみください。</p>';
  	}
  } else {
  	$message = '<p>申し訳ございません。そのログイン名はすでに使われております</p>
    <p>他のログイン名に変更してください。</p>
    <p><a class="btn std-btn" href="customer-input.php">変更する</a></p>';
  }

require_once(dirname(__DIR__).'/public_html/view/customer-output.php'); ?>
