<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $to = $_POST['to'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $headers = "From: zakiyama.com12.aaa@gmail.com";
      $pfrom = "zakiyama.com12.aaa@gmail.com";
      if(mb_send_mail($to, $title, $content, $headers, $pfrom)){
        echo "メールを送信しました";
      } else {
        echo "メールの送信に失敗しました";
      };
      var_dump($_POST)
    ?>
</body>
</html>