<?php

if(!empty($_GET) && isset($_GET['name'])){
  $name = $_GET['name'];
  $line = $_GET['line'];
  $position = $_GET['position'];
      // foreach($positions as $position){}
      
  $question = $_GET['question'];
  $content = [$name, $line, $position, $question]; 
  var_dump($_GET);

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
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// 設置した場所のパスを指定する
require('./PHPMailer/src/PHPMailer.php');
require('./PHPMailer/src/Exception.php');
require('./PHPMailer/src/SMTP.php');

// Composerを利用した場合、requireは下記だけでOK
// require('path/to/vendor/autoload.php');

// 文字エンコードを指定
mb_language('uni');
mb_internal_encoding('UTF-8');

// インスタンスを生成（true指定で例外を有効化）
$mail = new PHPMailer(true);

// 文字エンコードを指定
$mail->CharSet = 'utf-8';

try {
  // デバッグ設定
  // $mail->SMTPDebug = 2; // デバッグ出力を有効化（レベルを指定）
  // $mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str<br>";};

  // SMTPサーバの設定
  $mail->isSMTP();                          // SMTPの使用宣言
  $mail->Host       = 'smtp.gmail.com';   // SMTPサーバーを指定
  $mail->SMTPAuth   = true;                 // SMTP authenticationを有効化
  $mail->Username   = 'n90.yamazaki.mitsuru@gmail.com';   // SMTPサーバーのユーザ名
  $mail->Password   = 'mo55ori4na31';           // SMTPサーバーのパスワード
  $mail->SMTPSecure = 'tls';  // 暗号化を有効（tls or ssl）無効の場合はfalse
  $mail->Port       = 465; // TCPポートを指定（tlsの場合は465や587）

  // 送受信先設定（第二引数は省略可）
  $mail->setFrom('n90.yamazaki.mitsuru@gmail.com', '岩藤野球部'); // 送信者
  $mail->addAddress('zakiyama.com12.aaa@gmail.com', '山崎満');   // 宛先
  // $mail->addReplyTo('n90.yamazaki.mitsuru@gmail.com', 'お問い合わせ'); // 返信先
  // $mail->addCC('cc@example.com', '受信者名'); // CC宛先
  $mail->Sender = 'return@example.com'; // Return-path

  // 送信内容設定
  $mail->Subject = '件名';
  $mail->Body    = 'テスト';

  // 送信
  $mail->send();
} catch (Exception $e) {
  // エラーの場合
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>