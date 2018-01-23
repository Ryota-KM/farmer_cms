<?php
  require_once(dirname(__DIR__).'/public_html/database.php');
	session_start();
	unset($_SESSION['product']);
  require_once(dirname(__DIR__).'/public_html/view/purchase-output.php');
