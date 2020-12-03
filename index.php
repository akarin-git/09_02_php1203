<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    div {
      padding: 10px;
      font-size: 16px;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <div class="navbar-header">
    <div class="header-left">アンケート</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>



  <div class="main">


    <form action="create.php" method="POST">
      <fieldset>
        <p>お問い合わせ</p>

        <div class="form-item">
          名前:<input type="text" name="name" required>

        </div>
        <div class="form-item">
          年齢 :
          <select name="age">
            <option value="未選択">選択してください</option>
            <?php
            for ($i = 15; $i <= 80; $i++) {
              echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
          </select>
        </div>

        <div class="form-item">カテゴリー:
          <?php
          $types = array('使い方がわからない', '製品について', 'その他');
          ?>
          <select name="category">
            <option value="未選択" required></option>
            <?php
            foreach ($types as $type) {
              echo "<option value='${type}'>${type}</option>";
            }
            ?>
          </select>
        </div>

        <div class="form-item">内容:
          <textarea name="body" cols="30" rows="10" required></textarea>

        </div>

        <form action="create.php" method="post" enctype="multipart/form-data">
          <input type="file" name="fname">
        </form>


        <input type="submit" value="送信">

      </fieldset>
    </form>
  </div>


  </div>

  </form>
  </div>

</body>

</html>