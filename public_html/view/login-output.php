<?php require_once(dirname(__DIR__).'/view/shared/header.php') ?>

  <div class="content">
    <div class="content-wrapper">

      <?php if (isset($_SESSION['customer'])): ?>
        <p>いらっしゃいませ、<?php echo $_SESSION['customer']['name'] ?>さん。</p>
      <?php else : ?>
        <p>ログイン名またはパスワードが違います。</p>
        <form "onsubmit="return false;" action="login-output.php" method="post">
          <p>ログイン名 : <input type="text" name="login" required></p>
          <br>
          <p>パスワード : <input type="password" name="password" required></p>
          <br>
          <p><input class="std-btn btn" type="submit" value="ログインする"></p>
        </form>
       <?php endif ?>
     </div>
   </div>

<?php require(dirname(__DIR__).'/view/shared/footer.php') ?>
