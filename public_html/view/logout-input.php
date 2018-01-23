<?php require_once(dirname(__DIR__) .'/header.php') ?>

  <div class="content">
    <div class="content-wrapper">
      <?php if (!($_SESSION['customer'])): ?>
        <p>お客様はすでにログアウトしています。</p>
      <?php else: ?>
        <p>ログアウトしますか？</p>
        <a class="btn std-btn" href="logout-output.php">ログアウト</a>
      <?php endif ?>
    </div>
  </div>

<?php require(dirname(__DIR__).'/footer.php') ?>
