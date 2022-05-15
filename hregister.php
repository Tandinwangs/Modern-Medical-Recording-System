<?php
	$conn = mysqli_connect("localhost", "root", "465661", "MMRS");

	if(!$conn){
		echo "Not success";
	}
	

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$employid = mysqli_real_escape_string($conn, $_POST['employid']);
		$gender = mysqli_real_escape_string($conn, $_POST['Gender']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = md5($password);
		
		$sql = "INSERT INTO hregister (Name, Title, Employid, Gender, Password) VALUES ('$name', '$title', '$employid', '$gender', '$password')";

		if(mysqli_query($conn, $sql)){	
			echo '<script>alert("Registered Successfully")</script>';
			header("Location: untitled-1.html");
			
		}else{
			echo "Registerd failed";	
		}
	}
?>

