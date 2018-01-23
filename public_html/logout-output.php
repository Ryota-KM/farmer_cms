<?php
  session_start();
  unset($_SESSION['customer']);
  require_once(dirname(__DIR__).'/public_html/view/logout-output.php');
