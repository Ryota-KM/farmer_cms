<?php
  define('DB_HOST', 'sample');
  define('DB_NAME', 'sampleName');
  define('DB_USER', 'sampleUser');
  define('DB_PASSWORD', 'password');
  define('PDO_DSN', 'mysql:host='.DB_HOST.'; dbname='.DB_NAME.';');
  $options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET CHARACTER SET 'utf8'");
