<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Database Connection failed: " . $conn->connect_error);
}

// select data
$sql = "SELECT id, firstname, lastname FROM MyGuests";
// $sql = "SELECT id, firstname, lastname FROM MyGuests"; // select %
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    
    // Do your stuff here

  }
} else {
  echo "0 results";
}


// insert data
$sql = "INSERT INTO `table` (`col_1`) VALUES ('value_1')";
$conn->query($sql);



$conn->close();
?>