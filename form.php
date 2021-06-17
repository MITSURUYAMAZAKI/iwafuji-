<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>選手募集</title>
  <link rel="stylesheet" href="form.css">
  <link rel="shortcut icon" href="./others/favicon.png">
</head>
<body>
  <?php include('./include/include.php');?>
  <main>
    <div class="content">
      <h1>◆選手募集</h1>
      <p>選手・マネージャー・カメラマン募集中。</p>
      <p>まずは体験からでもOKです。</p>
      <br>
      <p>【服装について（選手）】</p>
      <p>アンダーシャツ、ベルト、ソックスの色は黒（ブラック）か紺（ネイビー）。</p>
      <p>ズボンは白の無地です（裾の長さは自由）。</p>
      <p>スパイクは金属歯スパイク、ポイントスパイクどちらでも可です。</p>
      <form action="check.php" method="POST">
        <div class="content">
          <h2>(1)あなたのお名前（フルネーム）を教えてください</h2>
          <input type="text" name="name">
        </div>
        <div class="content">
          <h2>(2)あなたのメールアドレスを教えてください</h2>
          <input type="text" name="mail" size="50">
        </div>
        <div class="content">
          <h2>(3)希望ポジションを教えてください（複数選択可）</h2>
          <input type="checkbox" name="positions[]" value="投手"> 投手
          <input type="checkbox" name="positions[]" value="捕手"> 捕手
          <input type="checkbox" name="positions[]" value="一塁手"> 一塁手
          <input type="checkbox" name="positions[]" value="二塁手"> 二塁手
          <input type="checkbox" name="positions[]" value="三塁手"> 三塁手
          <input type="checkbox" name="positions[]" value="遊撃手"> 遊撃手
          <input type="checkbox" name="positions[]" value="外野手"> 外野手
          <input type="checkbox" name="positions[]" value="マネージャー"> マネージャー
          <input type="checkbox" name="positions[]" value="カメラマン"> カメラマン
        </div>
        <div class="content">
          <h2>(4)質問などあればご記入ください</h2>
          <textarea name="question" cols="50" rows="10"></textarea>
        </div>
        <div>
          <input class="recruit" type="submit" value="応募する">
        </div>
      </form>
    </div>
  </main>
  <footer>
    日進市軟式野球連盟
  </footer>
</body>
</html>