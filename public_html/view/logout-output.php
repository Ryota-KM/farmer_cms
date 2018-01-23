<?php require_once(dirname(__DIR__).'/header.php') ?>

  <div class="content">
    <div class="content-wrapper">
      <p>ログアウトしました。</p>
      <?php echo $_SESSION['customer']['name'] ?>
    </div>
  </div>

<?php require_once(dirname(__DIR__).'/footer.php') ?>
