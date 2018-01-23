<?php
  session_start();
  unset($_SESSION['product'][$_REQUEST['id']]);
  require_once(dirname(__DIR__).'/public_html/view/cart-delete.php');
