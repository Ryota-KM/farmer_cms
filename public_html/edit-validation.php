<?php
  mb_convert_kana($price,"n","utf-8");

  if (!(isset($_REQUEST['deleteProduct']))) {

    if (!($name) || !($comment) || !($price) || !($quantity) ||
    (preg_match("/^[0-9０-９]+$/u", $quantity)) == 0 ||
    (preg_match("/^[0-9０-９]+$/u", $price)) == 0)
    {
      $message = "<p>商品の登録に必要な項目が空白、あるいは入力が不適切だったため登録できませんでした。</p><p>もう一度入力、または選択し直してください。</p>";
      $validated = false;

    } else {
      $validated = true;
    }

  } else {
    $validated = true;
  }
