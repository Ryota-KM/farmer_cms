<?php
  require_once(dirname(__DIR__).'/view/shared/header.php');
  require_once '../public_html/functions.php';
?>
<div class="contents">

<?php foreach ($products as $productDetail): ?>
  <div class="detail-content" id="idNum<?php echo $productDetail['id'] ?>">

    <div class="detail-image">
      <img class="change-prev-btn change-product" src="/material/navigate-left.svg">
      <img class="product-image" src="image/<?php echo h($productDetail['name']) ?>.png">
      <img class="change-next-btn change-product" src="/material/navigate-right.svg">
    </div>

    <div class="detail-info">
      <div class="justify">
        <form action="cart-insert.php" method="post">
          <input type="hidden" name="id" value=<?php echo $productDetail['id'] ?>>
          <input type="hidden" name="name" value=<?php echo h($productDetail['name']) ?>>
          <input type="hidden" name="quantity" value=<?php echo h($productDetail['quantity']) ?>>
          <input type="hidden" name="unit" value=<?php echo $productDetail['unit']?>>
          <input type="hidden" name="price" value=<?php echo h($productDetail['price']) ?>></p>
          <h1><?php echo $productDetail['name'] ?></h1>
          <p><?php echo $productDetail['quantity'].$productDetail['unit'] ?>
           :
          <?php echo $productDetail['price'] ?>円 (税込み)</p>
          <?php $commentLen = mb_strlen($productDetail['comment']) ?>
          <p class="<?php echo fontSize($commentLen) ?>"><?php echo h($productDetail['comment']) ?></p>
          <p><a class="btn orange-btn return-btn" href="index.php">< 一覧へ戻る</a>
          <sub>✖️</sub>
          <select id="count" name="count">
            <?php for ($i=1; $i<=10; $i++): ?>
              <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php endfor ?>
          </select><input class="btn std-btn" type="submit" value="カートに追加"></p>
        </form>
      </div>
    </div>

  </div>
<?php endforeach ?>
</div>

<?php require_once(dirname(__DIR__).'/view/shared/footer.php') ?>
