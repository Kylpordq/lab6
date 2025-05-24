<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBooks</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

// Каталог, в который мы будем принимать файл:
$uploaddir = './img/';
$uploadfile = $uploaddir.basename($_FILES['newphoto']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['newphoto']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$title=$_POST['title'];
$avtor = $_POST['avtor'];
$year = $_POST['yearB'];
$publishing = $_POST['publishing'];
$subjects = $_POST['subjects'];
$price = $_POST['price'];
$photo=$_FILES['newphoto']['name'];

$sql = "INSERT INTO elib(title,author,yearB,publishing,subjects,price,photo)
VALUES (
'".$title."',
'".$avtor."',
'".$year."',
'".$publishing."',
'".$subjects."',
'".$price."',
'".$photo."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<a href="AddBook.php"><button class="btn">НАЗАД</button></a>

</body>
</html>