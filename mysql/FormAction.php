<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Action</title>
</head>
<body>

	<h1>Form Action</h1>


	<?php 


	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test1";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$religion = $_POST['religion'];
		$pres= $_POST['preAdd'];
		$perm = $_POST['perAdd'];
		$telephone = $_POST['telephone'];
		$email = $_POST['email'];
		$url = $_POST['url'];
		$username = $_POST['username'];
		$password= $_POST['password'];
	?>

	<hr>

	<p> Retrieved values: 
	</p>

	First Name: <?php echo $firstname; ?>
	<br>
	Last Name: <?php echo $lastname; ?>
	<br>
	Gender: <?php echo $gender; ?>
	<br>
	Date of Birth: <?php echo $dob; ?>
	<br>
	Religion : <?php echo $religion; ?>
	<br>
	Present Address: <?php echo $pres; ?>
	<br>
	Parmanent Address: <?php echo $perm; ?>
	<br>
	Telephone: <?php echo $telephone; ?>
	<br>
	Email : <?php echo $email; ?>
	<br>
	Website : <?php echo $url; ?>
	<br>
	User Name: <?php echo $username; ?>
	<br>
	Password : <?php echo $password; ?>


	<hr>

	<p>Validate data: 
		
	</p>

	<?php
		$isValid = false;

		if (empty($firstname)){
			$isValid = false;
		}
		if (empty($lastname)){
			$isValid = false;
		}
		if (empty($gender)){
			$isValid = false;
		}
		if (empty($dob)){
			$isValid = false;
		}
		if (empty($religion)){
			$isValid = false;
		}
		if (empty($email)){
			$isValid = false;
		}
		if (empty($username)){
			$isValid = false;
		}
		if (empty($password)){
			$isValid = false;
		}
		else{
			$isValid = true;
		}
	?>

	<?php
		if ($isValid) { 
			
			

			$sql = "INSERT INTO user (Fname, Lname, Gender, Dob, Rel, PreAdd, PerAdd, Phone,Email, Pwl, Uname, Upass) VALUES ('$firstname', '$lastname', '$gender', '$dob', '$religion', '$pres', '$perm', '$telephone', '$email', '$url', '$username', '$password')";

			$ins = $connection->query($sql);
		}

		
		if ($ins === true) {
		echo "Data Inserted Succssfully";
	}
	else {
		echo "Error while saving";
	}

	$connection->close();
	?>

	<hr>


</body>
</html>