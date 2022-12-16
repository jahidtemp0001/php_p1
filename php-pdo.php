<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
  $conn_error = $sql . "<br>" . $e->getMessage();
  print_r($conn_error);
  die;
}


// select rows
$sql = "SELECT * FROM `table`";
$result = $conn->exec($sql);

if ($result->num_rows > 0) {
  $rows = $result->fetch_all(MYSQLI_ASSOC);

  foreach($rows as $key => $row){
    
  }

} else {
  echo "0 results";
}

// insert row
$sql = "INSERT INTO `table` (`col_1`) VALUES ('value_1')";
$conn->exec($sql);



$conn = null;
?>