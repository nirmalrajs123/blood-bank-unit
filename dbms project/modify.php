
<?php
include 'edit.html';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_bank";

$rname = $_GET['rsname'];
$rage = $_GET['rsage'];
$rcontact_no = $_GET['rscontact_no'];
$rblood = $_GET['rsblood'];
$remail = $_GET['rsemail'];
$rplace = $_GET['rsplace'];

$block = $_GET['block'];
$data = $_GET['data'];
$blocks=" $block ";
echo "&nbspModify Item : $blocks<br>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE blood_donor1 SET $blocks = '".$data."' WHERE name ='".$rname."' && age ='".$rage."'&& contact ='".$rcontact_no."'&& blood ='".$rblood."'&& email ='".$remail."'&& place ='".$rplace."' ";
$result = $conn->query($sql);
if($result)
{
echo "&nbspRegister Modify Successfully";

}
else
{
echo "&nbspError";

}
mysqli_query($conn,$sql);

  $conn->close();