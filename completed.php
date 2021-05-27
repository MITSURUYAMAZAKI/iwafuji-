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

<h1>内容が送信されました</h1>