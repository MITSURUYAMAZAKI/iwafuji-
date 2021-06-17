<?php
    $dsn = 'mysql:dbname=iwafujibaseballclub;host=localhost';
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
  <link rel="shortcut icon" href="./favicon.png">
</head>
<body>
  <?php include('./include/include.php');?>
  <main>
    <div class="content">
      <h1>◆選手紹介</h1>
      <div class="players-box">
        <?php foreach( $stmt as $value ) { ?>
        <div class="box">
          <div class="box-top">
            <h2 class="number"><?php echo "$value[number]";?></h2>
            <h2 class="name"><?php echo "$value[name]";?></h2>
          </div>
          <div class="box-bottom">
            <img src="./players_photo/<?php echo "$value[img]";?>" alt="<?php echo "$value[name]";?>" class="photo">
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
    </div>
  </main>
  <footer>
    日進市軟式野球連盟
  </footer>
</body>
</html>
