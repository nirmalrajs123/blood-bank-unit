<?php
include "display.html";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_bank";
	
// connect the database with the server
$conn = new mysqli($servername,$username,$password,$dbname);
	
	// if error occurs
	if ($conn -> connect_errno)
	{
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
	}

	$sql = "select DISTINCT name,age,contact_no,blood,email,place from blood_urgent";
	$result = ($conn->query($sql));
	//declare array to store the data of database
	$row = [];

	if ($result->num_rows > 0)
	{
		// fetch all data from db into array
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}
?>

<!DOCTYPE html>
<html>
<style>

	td,th {
		border: 1px solid black;
		padding: 70px;
		margin: 50px;
		text-align: center;
	}
</style>

<body>
<img src="https://i.ibb.co/3znv1Hx/image-2.png" width="1332" height="500">
    <h2>List Of Registered Urgent Recevier </h2>
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
                <td><?php echo $rows['contact_no']; ?></td>
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
	mysqli_close($conn);
?>
