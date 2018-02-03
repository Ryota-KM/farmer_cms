<?php require_once(dirname(__DIR__).'/view/shared/header.php') ?>

<div class="contents">
  <div class="content-wrapper">
    <?php if ($validated): ?>
      <p>入力した内容に不適切な文字が含まれるため登録できませんでした。</p>
      <p>ご登録内容を変更してください。(例 : スペース等の除去</p>
      <p><a class="btn orange-btn" href="customer-input.php"><< 入力画面へ戻る</a></p>
    <?php  else: ?>
    <?php echo $message ?>
    <?php endif ?>
  </div>
</div>
<?php require(dirname(__DIR__).'/view/shared/footer.php') ?>
