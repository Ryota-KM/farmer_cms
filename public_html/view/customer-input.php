<?php require_once(dirname(__DIR__).'/view/shared/header.php') ?>

  <div class="content">
    <div class="content-wrapper">
      <p>ご登録、または変更に必要な情報を入力してください。</p>
      <p>ログイン名、パスワードに使える文字は半角英数字(大小)のみです。</p>

      <form "onsubmit="return false;" action="customer-output.php" method="post">

        <table>
          <tr>
            <td class="td-centering">お名前 : </td>
            <td><input class="customer-input" type="text" name="name" value="<?php echo $name ?>" required></td>
          </tr>
          <tr>
            <td class="td-centering">ご住所 : </td>
            <td><input type="text" name="address" value="<?php echo $address ?>"required></td>
          </tr>
          <tr>
            <td>ログイン名 : </td>
            <td><input class="customer-input" type="text" name="login" value="<?php echo $login ?>"required></td>
          </tr>
          <tr>
            <td>パスワード : </td>
            <td><input class="customer-input" type="password" name="password" value="<?php echo $password ?>"required></td>
          </tr>
        </table>

        <?php if (isset($_SESSION['customer'])): ?>
          <p><input class="btn std-btn" type="submit" value="内容を変更する"></p>
        <?php else: ?>
          <p><input class="btn std-btn" type="submit" value="登録してログイン"></p>
        <?php endif ?>

      </form>
    </div>
  </div>

<?php require_once(dirname(__DIR__).'/view/shared/footer.php') ?>
