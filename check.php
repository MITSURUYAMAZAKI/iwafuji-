<?php
    if(!empty($_POST) && isset($_POST['name']) && isset($_POST['line']) && isset($_POST['positions'])){
      $name = $_POST['name'];
      $line = $_POST['line'];
      $positions = implode("、 ",$_POST['positions']);
      $question = $_POST['question'];
      // $content = [$name, $line, $positions, $question]; 
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
</head>
<body>
  <header>
    <ul>
      <li><a href="./home.html">ホーム</a></li>
      <li><a href="./schedule.php">試合予定・結果</a></li>
      <li><a href="./player.php">選手紹介</a></li>
      <li><a href="./form.html">選手募集</a></li>
    </ul>
  </header>

    <?php if (empty($_POST['name'])) { ?>
    <h1>お名前を入力してください</h1>
    <?php }  elseif (empty($_POST['line'])){ ?>
    <h1>LINE IDを入力してください</h1>
    <?php }  elseif (empty($_POST['positions'])){ ?>
    <h1>希望ポジションを入力してください</h1>
    <?php } else { ?>
    <h1>内容をご確認ください</h1>
    <h2>(1)お名前</h2>
    <?php echo $name;?>
    <h2>(2)LINE ID</h2>
    <?php echo $line;?>
    <h2>(3)希望ポジション</h2>
    <?php echo $positions;?>
    <h2>(4)質問など</h2>
    <?php echo $question;?>
    <form action="completed.php" method="POST">
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="line" value="<?php echo $line; ?>">
      <input type="hidden" name="positions[]" value="<?php echo $positions; ?>">
      <input type="hidden" name="question" value="<?php echo $question; ?>">
      <input type="button" onclick="history.back()" value="戻る">
      <input type="submit" value="送信"> 
    <?php } ?>
    </form>
</body>
</html>

