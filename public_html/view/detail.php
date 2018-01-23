<?php require_once(dirname(__DIR__).'/header.php') ?>

<div class="content">
  <?php foreach ($product as $productDetail): ?>
    <div class="detail-image">
      <img src="image/<?php echo $productDetail['name'] ?>.png">
    </div>

    <div class="detail-info">
      <div class="justify">
        <form action="cart-insert.php" method="post">
          <input type="hidden" name="id" value=<?php echo $productDetail['id'] ?>>
          <input type="hidden" name="name" value=<?php echo $productDetail['name'] ?>>
          <input type="hidden" name="quantity" value=<?php echo $productDetail['quantity'] ?>>
          <input type="hidden" name="unit" value=<?php echo $productDetail['unit']?>>
          <input type="hidden" name="price" value=<?php echo $productDetail['price'] ?>></p>
          <h1><?php echo $productDetail['name'] ?></h1>
          <p><?php echo $productDetail['quantity'].$productDetail['unit'] ?>
           :
          <?php echo $productDetail['price'] ?>円 (税込み)</p>
          <?php $commentLen = mb_strlen($productDetail['comment']) ?>
          <p class="<?php echo fontSize($commentLen) ?>"><?php echo $productDetail['comment'] ?></p>
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

  <?php endforeach ?>
</div>

<?php require_once(dirname(__DIR__).'/footer.php') ?>
