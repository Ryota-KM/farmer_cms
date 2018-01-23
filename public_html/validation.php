<?php
  $name = $_REQUEST['name'];
  $address = $_REQUEST['address'];
  $login = mb_convert_kana($_REQUEST['login'], "s", 'utf-8');
  $password = mb_convert_kana($_REQUEST['password']);
  $validatedName = preg_match("/[\t\s\r\n]/", $name);
  $validatedAddress = preg_match("/[\t\s\r\n]/", $address);
  $validatedLogin = preg_match("/[^a-zA-Z0-9\t\s\r\n]+$/", $login);
  $validatedPassword = preg_match("/[^a-zA-Z0-9\t\s\r\n]+$/", $password);

  $validated = (!($name) || !($address) || !($login) || !($password) || $validatedName === 1 || $validatedAddress === 1 || $validatedLogin === 1 || $validatedPassword === 1);
