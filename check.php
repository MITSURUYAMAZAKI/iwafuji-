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
</head>
<body>
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
    </form>
</body>
</html>

