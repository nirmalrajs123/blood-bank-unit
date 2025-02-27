<?php
include 'registrationf.html';
//include 'urgent.php';
$host ="Localhost";
$user="root";
$pass="";
$database="blood_bank";
$connection=mysqli_connect($host,$user,$pass,$database);
if($connection){
//echo "susses";
}else{
  die("not");
}
$rname = $_GET['rname'];
$rage = $_GET['rage'];
$rcontact_no = $_GET['rcontact_no'];
$rblood = $_GET['rblood'];
$remail = $_GET['remail'];
$rplace = $_GET['rplace'];

$sql ="INSERT INTO blood_donor1(name,age,contact,blood,email,place) VALUES ('$rname','$rage','$rcontact_no','$rblood','$remail','$rplace')";
if(mysqli_query($connection,$sql)){
//echo "install";
}
mysqli_query($connection,$sql);

mysqli_close($connection);
