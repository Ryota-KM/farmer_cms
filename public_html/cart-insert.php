<?php
  session_start();

  $id = $_REQUEST['id'];
  if (!isset($_SESSION['product'])) {
  	$_SESSION['product'] = [];
  }

  $count = 0;

  if (isset($_SESSION['product'][$id])) {
  	$count = $_SESSION['product'][$id]['count'];
  }

  $_SESSION['product'][$id] =
   [
  	'name' => $_REQUEST['name'],
  	'price' => $_REQUEST['price'],
    'quantity' => $_REQUEST['quantity'],
    'unit' => $_REQUEST['unit'],
  	'count' => $count + $_REQUEST['count']
  ];

  require_once(dirname(__DIR__).'/public_html/view/cart-insert.php');
