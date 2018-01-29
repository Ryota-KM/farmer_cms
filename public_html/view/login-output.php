<?php
  require_once(dirname(__DIR__).'/view/shared/header.php');
  require_once '../public_html/functions.php';
?>

  <div class="content">
    <div class="content-wrapper">

      <?php if (isset($customerName)): ?>
        <p>いらっしゃいませ、<?php echo h($customerName) ?>さん。</p>
      <?php else : ?>
        <p>ログイン名またはパスワードが違います。</p>
        <form "onsubmit="return false;" action="login-output.php" method="post">
          <p>ログイン名 : <input type="text" name="login" required></p>
          <br>
          <p>パスワード : <input type="password" name="password" required></p>
          <br>
          <input type="hidden" name="token" value="<?php echo $token ?>">
          <p><input class="std-btn btn" type="submit" value="ログインする"></p>
        </form>
       <?php endif ?>
     </div>
   </div>

<?php require(dirname(__DIR__).'/view/shared/footer.php') ?>
