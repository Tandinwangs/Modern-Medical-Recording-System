<?php
session_start();
	$conn = mysqli_connect("localhost", "root", "465661", "MMRS");

	if(!$conn){
		echo "Not success";
	}
	

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$cid = mysqli_real_escape_string($conn, $_POST['cid']);
		$age = mysqli_real_escape_string($conn, $_POST['age']);
		$message = mysqli_real_escape_string($conn, $_POST['message']);
		$date = mysqli_real_escape_string($conn, $_POST['date']);
        $employid = mysqli_real_escape_string($conn, $_POST['name']);
		
		$sql = "INSERT INTO precord (CID, Age, Problem, VisitDate, EmployId) VALUES ('$cid', '$age', '$message', '$date', '$employid')";

		if(mysqli_query($conn, $sql)){	
			header("Location: untitled-1.html");
			
		}else{
			echo '<script>alert("The patient is not registered. Please register first!")</script>';
		}
	}
	
?>
