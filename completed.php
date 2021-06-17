<?php

if(!empty($_POST) && isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['positions'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $positions = implode("、 ",$_POST['positions']);
    $question = $_POST['question'];
    $content = [$name, $mail, $positions, $question]; 
    // var_dump($_POST);
    // var_dump($content);

    $dsn = 'mysql:dbname=iwafujibaseballclub;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');
    $sql = 'INSERT INTO `recruit` SET `name` = ?, `mail` = ?, `position` = ?, `question` = ?';

    // $contentの配列をつくりだしている
    $stmt = $dbh->prepare($sql);
    $stmt->execute($content);
    // → executeの特徴（引数には配列をいれる）

    $dbh = null;
}

// 変数とタイムゾーンを初期化
$auto_reply_subject = null;
$auto_reply_text = null;
date_default_timezone_set('Asia/Tokyo');

// 件名を設定
$auto_reply_subject = 'お問い合わせありがとうございます。';

// 本文を設定
$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
下記の内容でお問い合わせを受け付けました。\n\n";
$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
$auto_reply_text .= "氏名：" . $_POST['name'] . "\n";
$auto_reply_text .= "メールアドレス：" . $_POST['mail'] . "\n\n";
$auto_reply_text .= "岩藤野球部";

// メール送信
mb_send_mail( $_POST['mail'], $auto_reply_subject, $auto_reply_text);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>送信完了</title>
  <link rel="stylesheet" href="completed.css">
  <link rel="shortcut icon" href="./others/favicon.png">
</head>
<body>
  <?php include('./include/include.php');?>
  <main>
    <h1>◆内容が送信されました</h1>  
    <p>お問い合わせありがとうございます。</p>
    <p>後ほど、ご入力いただきましたメールアドレスにメールを送ります。</p>
    <p>山崎のLINE IDを記載しておりますので、お手数ですが友だち追加の上、ひとことLINEを送ってください。</p>
    <p>試合日程等案内させていただきます。</p>
    <p>メールが届かない場合は入力間違いの可能性があります。</p>
    <p>よくお確かめの上、再度お問い合わせお願い致します。</p>
  </main>
</body>
  <footer>
    日進市軟式野球連盟
  </footer>
</html>
