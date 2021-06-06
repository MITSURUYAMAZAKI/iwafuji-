<?php
    $dsn = 'mysql:dbname=recruit;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');  
    $sql = 'SELECT * FROM `players`';
    $stmt = $dbh->query($sql);
    // var_dump($stmt);
    $dbh = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>選手紹介</title>
  <link rel="stylesheet" href="./player.css">
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
  <h1>選手紹介</h1>
  <div class="players-box">
    <?php foreach( $stmt as $value ) { ?>
    <div class="box">
      <div class="box-top">
        <h2 class="number"><?php echo "$value[number]";?></h2>
        <h2 class="name"><?php echo "$value[name]";?></h2>
      </div>
      <div class="box-bottom">
        <img src="./<?php echo "$value[img]";?>" alt="<?php echo "$value[name]";?>" class="photo">
        <div class="bottom-right">
          <?php if (empty($value[3])){ ?>
            <span><?php echo "</br>";?></span>
          <?php } else{ ?>
            <span class="manager"><?php echo "$value[manager]";?></span>
          <?php } ?>
          <ul>
            <li class="detail"><?php echo "$value[birth]";?></li>
            <li class="detail"><?php echo "$value[hand]";?></li>
            <li class="detail"><?php echo "$value[position]";?></li>
          </ul>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</body>
</html>
