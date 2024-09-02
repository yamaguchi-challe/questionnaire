<?php

include("funcs.php");

$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$eval = $_POST["eval"];
$impression = $_POST["impression"];

// 作成日時,名前,メールアドレス,年齢,性別,睡眠時間
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$age.",".$gender.",".$eval.",".$impression;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>講義後アンケート</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>アンケートの回答ありがとうございました。</h1>
<h2 class="center">次回の講義もよろしくお願いします。</h2>

<a href="post.php">戻る</a></li>

</body>
</html>