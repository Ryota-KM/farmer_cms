<?php require_once(dirname(__DIR__) .'/view/shared/header.php') ?>

<div class="content">
  <div class="content-wrapper">

    <?php if ($_SESSION['customer']): ?>
      <p>※お客様はすでにログインしています。</p>
      <p>ユーザーを変更したい場合は以下から再度ログインしてください。</p>
    <?php endif ?>

    <form "onsubmit="return false;" action="login-output.php" method="post">
      <p>ログイン名 : <input type="text" name="login" required></p>
      <br>
      <p>パスワード : <input type="password" name="password" required></p>
      <br>
      <p><input class="std-btn btn" type="submit" value="ログインする"></p>
      <input type="hidden" name="token" value="<?php echo $token ?>">
    </form>
  </div>
</div>

<?php require(dirname(__DIR__).'/view/shared/footer.php') ?>
