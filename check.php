<?php
    if(!empty($_GET) && isset($_GET['name'])){
      $name = $_GET['name'];
      $line = $_GET['line'];
      $position = $_GET['position'];
      $question = $_GET['question'];
      $content = [$name, $line, $position, $question]; 
      // var_dump($_GET);

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>内容をご確認ください</h1>
<?php echo $name;
echo $name;
echo $name;




?>
</body>
</html>

