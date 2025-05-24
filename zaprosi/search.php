<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seatch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
h1>Поиск записи</h1>
<div id="wrapper">
	<form id="delete" method="post" action="searchCode.php" autocomplete="off" method="POST">
        <input type="text" id="avtor" name="avtor" placeholder="автор" />
        <hr>
        <input type="text" id="title" name="title"  placeholder="название" />
        <hr>
        <input type="number" id="price" name="price"  placeholder="цена" />
		<button type="submit">Найти</button>
		<p>Передумали искать? <a href="menu.php">нажмите сюда</a></p>
	</form>
</body>
</html>