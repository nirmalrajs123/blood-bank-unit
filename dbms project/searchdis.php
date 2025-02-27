<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
</body>
</html>
<?php
include "display.html";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_bank";
if(isset($_POST['search'])){
$module = $_POST[ 'search' ];
// connect the database with the server
$conn = new mysqli($servername,$username,$password,$dbname);
	
	// if error occurs
	if ($conn -> connect_errno)
	{
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
	}

	$sql = "select DISTINCT name,age,contact,blood,email,place from blood_donor1  WHERE blood ='".$module."'";
	$result = ($conn->query($sql));
	//declare array to store the data of database
	$row = [];

	if ($result->num_rows > 0)
	{
		// fetch all data from db into array
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}}
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Blood Blank Unit</title>
    <link rel="icon" href="https://w7.pngwing.com/pngs/401/187/png-transparent-blood-donation-computer-icons-blood-bank-donation-blood-miscellaneous-donation-logo.png" type="image/gif" sizes="16x16"> 
	</head>
<style>

	td,th {
		border: 1px solid black;
		padding: 60px;
		margin: 50px;
		text-align: center;
	}
</style>

<body>
<img src="https://i.ibb.co/GMVNLv8/image-3.png" width="1332" height="500">
<form action="searchdis.php" method="post">
    Search For Blood : <input type="text" name="search">
	<input type="submit" value="SUBMIT" name="">
    </form>

    <h2>List Of Donor Matched Blood Group</h2>
	<table>
		<thead>
			<tr>
				<th>NAME</th>
				<th>AGE</th>
                <th>CONTACT NO</th>
                <th>BLOOD GROUP</th>
                <th>EMAIL</th>
				<th>PLACE</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
			foreach($row as $rows)
			{
			?>
			<tr>

				<td><?php echo $rows['name']; ?></td>
				<td><?php echo $rows['age']; ?></td>
                <td><?php echo $rows['contact']; ?></td>
                <td><?php echo $rows['blood']; ?></td>
                <td><?php echo $rows['email']; ?></td>
				<td><?php echo $rows['place']; ?></td>
               
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>

<?php
	//mysqli_close($conn);
?>
