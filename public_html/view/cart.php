<?php
  require_once(dirname(__DIR__).'/view/shared/header.php');
  require_once '../public_html/functions.php';
?>

  <div class="contents">
    <div class="content-wrapper">
      <?php if ($_SESSION['product']) : ?>
        <table>
          <th>商品名</th><th>価格</th><th>単位</th><th>数量</th><th>小計</th><th>取消</th>
            <?php $total=0 ?>
            <?php foreach ($_SESSION['product'] as $id=>$product): ?>
              <tr>
                <td><a class="font-size-static" href="detail.php?id=<?php echo $id ?>"><?php echo h($product['name']) ?></a></td>
                <td><?php echo h($product['price']) ?>円</td>
                <td><?php echo h($product['quantity'].$product['unit']) ?></td>
                <td class="td-centering"><?php echo $product['count'] ?></td>
                  <?php
                   $subtotal = $product['price'] * $product['count'];
                   $total += $subtotal;
                  ?>
                <td><?php echo $subtotal ?>円</td>
                <td><a class="font-size-static" href="cart-delete.php?id=<?php echo $id ?>">削除</a></td>
              </tr>
            <?php endforeach ?>
          <tr><td class="td-centering" colspan="4">合計金額</td><td><?php echo $total ?>円</td></tr>
        </table>
      <?php else: ?>
        <?php echo 'カートに商品がありません' ?>
      <?php endif ?>
    </div>
  </div>
<?php require_once(dirname(__DIR__).'/view/shared/footer.php') ?>
