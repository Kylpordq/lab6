<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBooks</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="form.css">
</head>
<body>
<h1>Добавить новую запись</h1>
<div id="wrapper">
	<form id="delete" method="post" action="AddBookCode.php" autocomplete="off" method="POST" enctype=multipart/form-data>
		<input type="text" id="title" name="title" required placeholder="название" />
        <hr>
		<input type="text" id="avtor" name="avtor" required placeholder="автор" />
        <hr>
        <input type="number" id="yearB" name="yearB" required placeholder="год" />
        <hr>
        <input type="text" id="publishing" name="publishing" required placeholder="публикация" />
        <hr>
        <input type="text" id="subjects" name="subjects" required placeholder="детали о книге" />
        <hr>
        <input type="number" id="price" name="price" required placeholder="цена" />
        <hr>
        <input type="file" id="photo" name="newphoto" required placeholder="фото" />
        
		<button type="submit">Добавить</button>
		<p>Передумали добавлять? <a href="menu.php">нажмите сюда</a></p>
	</form>
</body>
</html>