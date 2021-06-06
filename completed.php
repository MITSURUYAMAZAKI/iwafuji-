<?php

if(!empty($_POST) && isset($_POST['name']) && isset($_POST['line']) && isset($_POST['positions'])){
          $name = $_POST['name'];
    $line = $_POST['line'];
    $positions = implode("、 ",$_POST['positions']);
    $question = $_POST['question'];
    $content = [$name, $line, $positions, $question]; 
    // var_dump($_POST);
    // var_dump($content);

    $dsn = 'mysql:dbname=recruit;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');
    $sql = 'INSERT INTO `apply` SET `name` = ?, `line` = ?, `position` = ?, `question` = ?';

    // $contentの配列をつくりだしている
    $stmt = $dbh->prepare($sql);
    $stmt->execute($content);
    // → executeの特徴（引数には配列をいれる）

    $dbh = null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
    <link rel="stylesheet" href="completed.css">
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
<h1>内容が送信されました</h1>
</body>
</html>
