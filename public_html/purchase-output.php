<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
	session_start();

  if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
  die('不正なアクセスが行われました');
  }

	unset($_SESSION['product']);
  require_once(dirname(__DIR__).'/public_html/view/purchase-output.php');
