<?php

?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>課題・商品検索アプリケーション</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/shoppingcart.css" />
</head>

<body id="products">
	<header>
		<h1>商品検索アプリケーション</h1>
	</header>

	<main>
		<article id="entry">
			<h2>商品検索 - カテゴリ選択</h2>
			<p>商品カテゴリを選択して［検索］ボタンをクリックしてください。</p>
			<p>カテゴリを選択しなかった場合は、全件検索が実施されすべての商品が表示されます。</p>
			<form action="result.php" method="get">
				<table class="borderless">
					<tr>
						<td>
							<input type="radio" name="category" value="book" id="book" checked />
							<label for="book"><a href="result.php" ">書籍</label>
						</td>
						<td>
							<input type="radio" name="category" value="dvd" id="dvd" />
							<label for="dvd"><a href="dvd.php" target="_blank" title="Click ">DVD</label>
						</td>
						<td>
							<input type="submit" value="検索" />
						</td>
					</tr>
				</table>
			</form>
		</article>
	</main>

	<footer>
		<div id="copyright">(C) 2019 The Advanced Course on Web System Development</div>
	</footer>
	
</body>

</html>