<?php
	$conn = mysqli_connect("localhost", "root", "465661", "MMRS");

	if(!$conn){
		echo "Not success";
	}
	

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$cid = mysqli_real_escape_string($conn, $_POST['cid']);
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$dob = mysqli_real_escape_string($conn, $_POST['dob']);
		$gender = mysqli_real_escape_string($conn, $_POST['Gender']);
        $phoneNo = mysqli_real_escape_string($conn, $_POST['phone']);
		
		$sql = "INSERT INTO pregister (CID, Name, Address, DOB, Gender, PhoneNo) VALUES ('$cid', '$name', '$address', '$dob', '$gender', '$phoneNo')";

		if(mysqli_query($conn, $sql)){	
			header("Location: untitled-1.html");
			
		}else{
			echo "Registerd failed";	
		}
	}
?>

