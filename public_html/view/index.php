<?php
  require_once(dirname(__DIR__).'/view/shared/header.php');
  require_once '../public_html/functions.php';
?>

    <div class="content">
      <?php foreach ($products as $product): ?>
        <div class="content-columns">
          <div class="product">
            <a href="detail.php?id=<?php echo $product['id'] ?>"><img src="image/<?php echo h($product['name']) ?>.png"></a>
            <a class="font-size-static" href="detail.php?id='<?php echo $product['id'] ?>'"><?php echo h($product['name']) ?></a>
            <p><?php echo $product[quantity].$product[unit].' : '.h($product['price']) ?> 円</p>
            <a class="btn std-btn" href="detail.php?id=<?php echo $product['id'] ?>">商品詳細 >></a>
          </div>
        </div>
      <?php endforeach ?>
    </div>

    <?php if ($hasNext): ?>
      <a class="btn next-btn orange-btn <?php echo $btnPosition ?>"
        href="index.php?page=<?php echo ($page + 1) ?>">次のページ >></a>
    <?php endif ?>
    <?php if ($hasPrevious): ?>
      <a class="btn previous-btn orange-btn" href="index.php?page=<?php echo ($page -1) ?>"><< 前のページ</a>
    <?php endif ?>
<?php require_once(dirname(__DIR__).'/view/shared/footer.php') ?>
