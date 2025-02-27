<?php
$servername = "Localhost";
$username = "root";
$password = "";
$database="blood_bank";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$rname = $_GET['rname'];
$rage = $_GET['rage'];
$rcontact_no = $_GET['rcontact_no'];
$rblood = $_GET['rblood'];
$remail = $_GET['remail'];
$rplace = $_GET['rplace'];
$sql ="INSERT INTO details_donor(name,age,contact_no,blood,email,place) VALUES ('$rname','$rage','$rcontact_no','$rblood','$remail','$rplace')";
?> 
