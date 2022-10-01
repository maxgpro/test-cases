<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>
		Я бы формировал миниатюры при загрузке изображения и использовал бы их.
	</p>
	<form action="script.php" enctype="multipart/form-data" method="POST">
		<input name="image" type="file">
		<button name="submit">Submit</button>
	</form>
</body>
</html>