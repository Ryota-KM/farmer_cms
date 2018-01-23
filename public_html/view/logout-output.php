<?php require_once(dirname(__DIR__).'/view/shared/header.php') ?>

  <div class="content">
    <div class="content-wrapper">
      <p>ログアウトしました。</p>
      <?php echo $_SESSION['customer']['name'] ?>
    </div>
  </div>

<?php require_once(dirname(__DIR__).'/view/shared/footer.php') ?>
