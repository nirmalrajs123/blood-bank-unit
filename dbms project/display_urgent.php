<?php
$server="localhost";
$username="root";
$pass="";
$db="blood_bank";
$connection= new mysqli($server,$username,$pass,$db);
if($connection->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name,age,contact_no,blood,email,place FROM blood_urgent";
$result=$connection->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
    echo "Name: &nbsp". $row["name"]. "&nbsp age:&nbsp " . $row["age"]. " &nbspcontact_no&nbsp" . $row["contact_no"]."&nbspblood&nbsp ". $row["blood"]. " &nbspemail&nbsp" . $row["email"]. " &nbspplace&nbsp" . $row["place"]. "<br>";
}

}else{
    echo "0 results";
}
?>
