<html>
<head>
<meta charset="utf-8">
<title>講義後アンケート</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>講義後アンケート</h1>
<form action="write.php" method="post">
	<div class="Form">
	  <div class="Form-Item">
		<p class="Form-Item-Label">
		  <span class="Form-Item-Label-Required">必須</span>お名前
		</p>
		<input type="text" class="Form-Item-Input" placeholder="例）山田太郎" name="name">
	  </div>
	  <div class="Form-Item">
		<p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
		<input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com" name="mail">
	  </div>
	  <div class="Form-Item">
		<p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>年齢</p>
		<input type="number" class="Form-Item-Input" name="age">
	  </div>
	  <div class="Form-Item">
		<p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>性別</p>
		<input type="radio" id="man" name="sex" value="男性">
		<label for="man">男性</label>
		<input type="radio" id="woman" name="sex" value="女性">
		<label for="woman">女性</label><br>
	  </div>
	  <div class="Form-Item">
		<p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>満足度</p>
		<input type="radio" name="eval" value="5">
		<label for="man">5</label>
		<input type="radio" name="eval" value="4">
		<label for="woman">4</label>
		<input type="radio" name="eval" value="3">
		<label for="man">3</label>
		<input type="radio" name="eval" value="2">
		<label for="woman">2</label>
		<input type="radio" name="eval" value="1">
		<label for="man">1</label><br>
	  </div>
	  <div class="Form-Item">
		<p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>感想</p>
		<input type="text" class="Form-Item-Input" name="impression">
	  </div>
	  <input type="submit" class="Form-Btn" value="送信">
	</div>
</form>

<div class="center">
	<a href="read.php">アンケート結果を見る</a>
</div>

</body>
</html>