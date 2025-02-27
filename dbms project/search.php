<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method="post">
    Search For Blood : <input type="text" name="search">
      <input type="submit">
    </form>
</body>
</html>
<?php
$servername ="Localhost";
$username = "root";
$password = "";
$dbname = "blood_bank";
$module = $_POST[ 'search' ];
//$module='o';
//$search = $_GET['search'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,age,contact_no,blood,email,place FROM blood_donor WHERE blood ='".$module."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: &nbsp". $row["name"]. "&nbsp age:&nbsp " . $row["age"]. " &nbspcontact_no&nbsp" . $row["contact_no"]."&nbspblood&nbsp ". $row["blood"]. " &nbspemail&nbsp" . $row["email"]. " &nbspplace&nbsp" . $row["place"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>