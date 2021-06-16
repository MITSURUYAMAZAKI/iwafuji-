<?php
    $dsn = 'mysql:dbname=iwafujibaseballclub;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');  
    $sql = 'SELECT * FROM `schedule`';
    $stmt = $dbh->query($sql);
    // var_dump($stmt);
    $dbh = null;
    // echo mb_substr("あいうえお",3,1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>スケジュール</title>
  <link rel="stylesheet" href="./schedule.css">
</head>
<body>
  <?php include('./include/include.php');?>
  <main>
    <div class="content">
      <h1>◆試合予定・結果</h1>
      <?php foreach( $stmt as $value ) { ?>
      <div class="result">
        <ul class="game">
          <li><?php echo "$value[date]";?>　<?php echo "$value[time]";?></li>
          <li><?php echo "$value[name]";?></li>
          <?php if ($value[4] != NULL) {?>
              <li>vs <?php echo "$value[opponent]";?></li>
          <?php } ?>
          <li>＠<?php echo "$value[place]";?></li>
        </ul>
        <img src="./score/<?php echo mb_substr($value[1], 0, mb_strlen($value[1])-3); echo $value[4];?>.png" alt="" height="200px">
        <p><?php echo "$value[comment]";?></p>
        <a href="<?php echo "$value[link]";?>" target="_blank"><?php echo "$value[link]";?></a> 
      </div>
      <?php } ?>
      <!-- <div class="result">
        <ul class="game">
          <li>2021.5.16(日)</li>
          <li>9時〜</li>
          <li>日進市春季トーナメント2回戦</li>
          <li>中央可鍛野球部</li>
          <li>＠日進市総合運動公園</li>
        </ul>
        <img src="./score/2021.5.16中央可鍛.png" alt="" width="50%">
        <p>コメント</p>
      </div> -->
    </div>
  </main>
  <footer>
    日進市軟式野球連盟
  </footer>
</body>
</html>