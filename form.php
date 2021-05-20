<?php
    if(!empty($_GET) && isset($_GET['text'])){
      $text = $_GET['text'];
    }

  $dsn = 'mysql:dbname=recruit;host=localhost';
  $user = 'root';
  $password='';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  $sql = 'INSERT INTO `apply` SET `id`=?, `name` = ?, `line` = ?, `position` = ?, `question` = ?';
  $content[] =  $text;
  // $contentの配列をつくりだしている
  $stmt = $dbh->prepare($sql);
  $stmt->execute($content);
  // → executeの特徴（引数には配列をいれる）
  var_dump($dbh);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>体験応募</title>
</head>
<body>
  <h1>体験応募</h1>
  <p>選手・マネージャー・カメラマン募集中</p>
  <p>まずは体験からでもOKです</p>
  <form action="#" method="GET">
    <div>
      <h2>(1)あなたのお名前を教えてください</h2>
      <input type="text" name="name">
    </div>
    <div>
      <h2>(2)あなたのLINE IDを教えてください</h2>
      <p>LINE以外の連絡手段をを希望される場合は(4)にてその旨をご記載ください</p>
      <input type="text" name="line">
    </div>
    <div>
      <h2>(3)希望ポジションを教えてください（複数選択可）</h2>
      <input type="checkbox" name="position" value="pitcher"> 投手
      <input type="checkbox" name="position" value="catcher"> 捕手
      <input type="checkbox" name="position" value="first-baseman"> 一塁手
      <input type="checkbox" name="position" value="second-baseman"> 二塁手
      <input type="checkbox" name="position" value="third-baseman"> 三塁手
      <input type="checkbox" name="position" value="shortstop"> 遊撃手
      <input type="checkbox" name="position" value="outfielder"> 外野手
      <input type="checkbox" name="position" value="manager"> マネージャー
      <input type="checkbox" name="position" value="cameraman"> カメラマン
    </div>
    <div>
      <h2>(4)質問などあればご記入ください</h2>
      <textarea name="question" cols="50" rows="10"></textarea>
    </div>
    <div>
      <input type="submit" value="応募する">
    </div>
  </form>
</body>
</html>