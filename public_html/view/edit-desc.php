<?php require_once(dirname(__DIR__).'/view/shared/edit-header.php') ?>

  <div class="container">
    <p><?php echo $message ?></p>
    <div class="wrapper-new">
      <h1>新規追加</h1>
      <form "onsubmit="return false;" action="http://r-portfolio.xyz/edit-desc.php" method="post" enctype="multipart/form-data">
        <p><input type="hidden" name="id", value="<?php echo $item['id'] ?>">
          <input type="hidden" name="newProduct">
        商品名(9文字まで) :
          <input type="text" class="productName" name="name" required maxlength="9">
        <span>販売単位 :
          <input type="text" class="Quantity" name="quantity"></span><span>
        <select name="unit">
          <span><option value="個">個</option>
            <option value="袋">袋</option>
            <option value="箱">箱</option>
            <option value="g">g</option>
            <option value="㎏">㎏</option>
          </select></span>
          <span> 価格 : <input type="text" class="price" name="price" required maxlength="5"> 円</span>
          <span> 写真 : <input type="file" class="file" id="myfile" name="file" required></span></p>
        <div class="comment">
          <p>コメント : </br>(200字まで)</p>
        </div>
        <p><textarea maxlength="200" class="table rows="4" cols="50" name="comment" required></textarea></p>
        <img id="new-image">
        <p><input class="btn btn-update" type="submit" value="登録する"></p>
      </form>
    </div>
  </div>

  <div class="container">
    <div class="confirm">
      <a class="btn btn-update" href="http://r-portfolio.xyz" target="_blank">ホームページを確認する</a>
    </div>
  </div>

  <?php foreach ($items as $item): $n++ ?>
    <div class="container">
      <div class="wrapper">
        <form "onsubmit="return false;" action="edit-desc.php" method="post" enctype="multipart/form-data">
          <p><input type="hidden" name="id", value="<?php echo $item['id'] ?>">
            <input type="hidden" name="updateProduct">
          商品名(9文字まで) :
            <input type="text" class="productName" name="name" value="<?php echo $item['name'] ?>"
              maxlength="9" required>
          <span>販売単位 :
            <input type="text" class="Quantity" name="quantity" value="<?php echo $item['quantity'] ?>"
              required></span><span>
          <select name="unit" value="<?php echo $item['unit'] ?>">
            <span><option value="<?php echo $item['unit'] ?>"><?php echo $item['unit'] ?></option>
                <option value="個">個</option>
                <option value="袋">袋</option>
                <option value="箱">箱</option>
                <option value="g">g</option>
                <option value="㎏">㎏</option>
            </select></span>
          <span>価格 :
            <input type="text" class="price" name="price" value="<?php echo $item['price'] ?>"
              maxlength="5" required> 円</span>
          <span>写真 :
            <input type="file" id="file-num<?php echo $n ?>" class="file" name="file"></span></p>
          <div class="comment">
            <p>コメント : </br>(200字まで)</p>
          </div>
            <p><textarea maxlength="200" class="table rows="4" cols="50" name="comment" required><?php echo $item['comment'] ?></textarea></p>
          <img id="img-num<?php echo $n ?>" class="image" src="image/<?php echo $item['name'] ?>.png">
          <p><input class="btn btn-update" type="submit" value="更新する"></p>
        </form>
        <form "onsubmit="return false;" action="edit-desc.php" method="post">
          <input type="hidden" name="id", value="<?php echo $item['id'] ?>">
          <input type="hidden" name="deleteProduct">
          <p><input class="btn btn-delete" type="submit" value="削除する"></p>
        </form>
      </div>
    </div>
  <?php endforeach ?>

  </body>
</html>
