<?php
include 'registrationf.html';
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

$rsname = $_GET['rsname'];
$rsage = $_GET['rsage'];
$rscontact_no = $_GET['rscontact_no'];
$rsblood = $_GET['rsblood'];
$rsemail = $_GET['rsemail'];
$rsplace = $_GET['rsplace'];


$sql ="INSERT INTO blood_urgent(name,age,contact_no,blood,email,place) VALUES ('$rsname','$rsage','$rscontact_no','$rsblood','$rsemail','$rsplace')";
if(mysqli_query($connection,$sql)){
//echo "install";
}
mysqli_query($connection,$sql);

mysqli_close($connection);
