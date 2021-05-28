<?php
$data = "https://spreadsheets.google.com/feeds/list/1_HvD4uDWGngPrQ510bkntrhtJYxxQK-ELhClIO2maz8/od6/public/values?alt=json";
$json = file_get_contents($data);
$json_decode = json_decode($json);

$players = $json_decode->feed->entry;

foreach ($players as $player) {
    echo $player->{'gsx$number'}->{'$t'};
    echo $player->{'gsx$name'}->{'$t'};
        echo ",";
}
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
  <h1>選手紹介</h1>
  <div class="playerbox">
    <div class="box">
      <div class="box-top">
        <div class="number">28</div>
        <div class="name">山崎　満</div>
      </div>
      <div class="box-bottom">
        <img src="./20210314_210520.jpg" alt="山崎満" class="photo">
        <div>
          <span>監督</span>
          <ul>
            <li>1993年7月18日生</li>
            <li>右投左打</li>
            <li>捕手・外野手</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="box-top">
        <div class="number">28</div>
        <div class="name">山崎　満</div>
      </div>
      <div class="box-bottom">
        <img src="./20210314_210520.jpg" alt="山崎満" class="photo">
        <div>
          <span>監督</span>
          <ul>
            <li>1993年7月18日生</li>
            <li>右投左打</li>
            <li>捕手・外野手</li>
          </ul>
        </div>
      </div>
    </div>  <div class="box">
      <div class="box-top">
        <div class="number">28</div>
        <div class="name">山崎　満</div>
      </div>
      <div class="box-bottom">
        <img src="./20210314_210520.jpg" alt="山崎満" class="photo">
        <div>
          <span>監督</span>
          <ul>
            <li>1993年7月18日生</li>
            <li>右投左打</li>
            <li>捕手・外野手</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="box-top">
        <div class="number">28</div>
        <div class="name">山崎　満</div>
      </div>
      <div class="box-bottom">
        <img src="./20210314_210520.jpg" alt="山崎満" class="photo">
        <div>
          <span>監督</span>
          <ul>
            <li>1993年7月18日生</li>
            <li>右投左打</li>
            <li>捕手・外野手</li>
          </ul>
        </div>
      </div>
    </div>  <div class="box">
      <div class="box-top">
        <div class="number">28</div>
        <div class="name">山崎　満</div>
      </div>
      <div class="box-bottom">
        <img src="./20210314_210520.jpg" alt="山崎満" class="photo">
        <div>
          <span>監督</span>
          <ul>
            <li>1993年7月18日生</li>
            <li>右投左打</li>
            <li>捕手・外野手</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<!-- https://docs.google.com/spreadsheets/d/1_HvD4uDWGngPrQ510bkntrhtJYxxQK-ELhClIO2maz8/edit?usp=sharing -->