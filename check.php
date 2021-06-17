<?php
    if(!empty($_POST) && isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['positions'])){
      $name = $_POST['name'];
      $mail = $_POST['mail'];
      $positions = implode("、 ",$_POST['positions']);
      $question = $_POST['question'];
      // var_dump($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認画面</title>
  <link rel="stylesheet" href="./check.css">
  <link rel="shortcut icon" href="./favicon.png">
</head>
<body>
  <?php include('./include/include.php');?>
  <main>
    <?php if (empty($_POST['name'])) { ?>
    <div class="content">
      <h1>◆お名前（フルネーム）を入力してください</h1>
    </div>
    <?php }  elseif (empty($_POST['mail'])){ ?>
    <h1>◆LINE IDを入力してください</h1>
    <?php }  elseif (empty($_POST['positions'])){ ?>
    <h1>◆希望ポジションを入力してください</h1>
    <?php } else { ?>
    <div class="content">
      <h1>◆内容をご確認ください</h1>
      <div class="content">
        <h2>(1)お名前（フルネーム）</h2>
        <?php echo $name;?>
      </div>
      <div class="content">
        <h2>(2)メールアドレス</h2>
        <?php echo $mail;?>
      </div>
      <div class="content">
        <h2>(3)希望ポジション</h2>
        <?php echo $positions;?>
      </div>
      <div class="content">
        <h2>(4)質問など</h2>
        <?php echo $question;?>
      </div>
      <form action="completed.php" method="POST">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="positions[]" value="<?php echo $positions; ?>">
        <input type="hidden" name="question" value="<?php echo $question; ?>">
        <input class="back" type="button" onclick="history.back()" value="戻る">
        <input class="recruit" type="submit" value="送信する"> 
      <?php } ?>
      </form>
    </div>
  </main>
  <footer>
    日進市軟式野球連盟
  </footer>
</body>
</html>

