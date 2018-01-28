<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
  session_start();

  $token = sha1(uniqid(mt_rand(), true));
  $_SESSION['token'] = $token;

  $total=0;
  $show = true;

  if (!isset($_SESSION['customer'])) {
  	$message = '<p>購入手続きを行うにはログインしてください。</p>';
    $show = false;
  } elseif (!($_SESSION['product'])) {
  	$message = '<p>カートに商品がありません。</p>';
    $show = false;
  } else {
    $message = '';
  }

  require_once(dirname(__DIR__).'/public_html/view/purchase-input.php');
