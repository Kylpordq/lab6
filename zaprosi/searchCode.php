<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="table.css">
    
</head>
<body>
<div class="main">
    <?php
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
    $price = $_POST['price'];

    $sql =" SELECT * FROM elib  WHERE title= '".$title."' or  author= '".$avtor."' or price= '".$price."' ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table class='table table_dark'>
        <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
        <th>Publishing</th>
        <th>Subjects</th>
        <th>Price</th>
        <th>Photo</th>
        </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td>".$row["id"]."</td>
          <td>".$row["title"]."</td>
          <td>".$row["author"]."</td>
          <td>".$row["yearB"]."</td>
          <td>".$row["publishing"]."</td>
          <td>".$row["subjects"]."</td>
          <td>".$row["price"]."</td>
          <td><img src='img/".$row["photo"]."' width='100px' height='100px' ></td>
          </tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
      
      
      $conn->close();


    ?>
    </div>
	<div class="ramk">
<a href="menu.php"><button>НАЗАД</button></a>
</div>
</body>
</html>