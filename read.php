
<?php

include("funcs.php");

$f_handle = fopen('data/data.txt', 'r');
//テーブルの見出し項目のHTMLをechoで表示
echo '<table border="1">
  <tr>
  <th>投稿時間</th>
  <th>名前</th>
  <th>メールアドレス</th>
  <th>年齢</th>
  <th>性別</th>
  <th>満足度</th>
  <th>感想</th>
  </tr>';

// csvデータを一行ずつ処理
while($data = fgetcsv($f_handle)){
   // テーブルに配列の値を格納。
  echo '<tr>';
  echo '<td>'.h($data[0]).'</td>';
  echo '<td>'.h($data[1]).'</td>';
  echo '<td>'.h($data[2]).'</td>';
  echo '<td>'.h($data[3]).'</td>';
  echo '<td>'.h($data[4]).'</td>';
  echo '<td>'.h($data[5]).'</td>';
  echo '<td>'.h($data[6]).'</td>';
  echo '</tr>';
}
// テーブルを閉じる。
echo '</table>';
// fopen関数により開いたファイルを閉じる。
fclose($f_handle);
?>

<html>
<head>
<meta charset="utf-8">
<title>アンケート結果</title>
<link rel="stylesheet" href="css/read.css">
</head>
<body>

<a href="post.php">戻る</a>

</body>
</html>