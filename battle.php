<?php
$hands = ['グー', 'チョキ', 'パー'];

if (isset($_POST['playerHand'])) {
  // プレイヤーの手
  $playerHand = $_POST['playerHand'];

  // pcの手
  $key = array_rand($hands);
  $pcHand = $hands[$key];

  //勝敗を判定
  if ($playerHand == $pcHand) {
    $result = 'あいこ';
  } elseif ($playerHand == 'グー' && $pcHand == 'チョキ') {
    $result = '勝ち';
  } elseif ($playerHand == 'チョキ' && $pcHand == 'パー') {
    $result = '勝ち';
  } elseif ($playerHand == 'パー' && $pcHand == 'グー') {
    $result = '勝ち';
  } else {
    $result = '負け';
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <title>じゃんけん</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="wrapper">
    <header>
      <div class="header-logo">PHPで作った、じゃんけんプログラム</div>
    </header>
    <main>
      <h1>結果は・・・</h1>
      <div>
        <p class="result-word"><?php echo $result; ?>!</p>

        あなた：<?php echo $playerHand; ?><br>
        コンピューター：<?php echo $pcHand; ?><br>

        <p><a class="red" href="index.php">>>もう一度勝負する</a></p>
      </div>
    </main>
    <footer>
      <small>&copy;PHP</small>
    </footer>
  </div>
</body>
</html>