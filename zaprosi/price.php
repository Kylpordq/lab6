<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price</title>
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
     $sred = "SELECT publishing AS P, AVG(price) AS AvgPrice FROM elib GROUP BY publishing";
     $result = $conn->query($sred);
   
     echo "<br>";
     echo "<table class='table table_dark'>";
     echo "<th> Publishing"  ;
     echo "</th>";
     echo "<th> AVG Price"  ;
     echo "</th>";
     while ($row = $result->fetch_assoc()) {
        echo "<tr>";
       echo "<td>";
       echo $row["P"];
       echo "</td>";

       echo "<td>";
       echo round($row["AvgPrice"]);
       echo "</td>";
       echo "</tr>";
     }
    
     echo "</table>";
       $conn->close();
    ?>
    
    </div>
    <div class="ramk">
<a href="menu.php"><button>НАЗАД</button></a>
</div>
</body>
</html>