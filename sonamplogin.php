<?php
	$server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $error = "";
    $success = "";

    //Query the database for existing patient.
    $dbhandle = mysqli_connect($server, $username, $password, $dbname);

    //$selected = mysqli_select_db("test", $dbhandle);

    if(isset(($_POST['submit']))){
    	if(!empty($_POST['dob']) && !empty($_POST['cid'])){
    		$DoB = $_POST["dob"];
			$CiD = $_POST["cid"];

			$user = mysqli_query($dbhandle, "SELECT * FROM pregister WHERE DoB = '$DoB' and CID_No = '$CiD'");
			$res = mysqli_fetch_assoc($user);
			if($res['DoB'] == $DoB){
				if($res['CID_No'] == $CiD){
					$error = "";
					$success = "Welcome ".$CiD;
					// Redirecting to the health worker home page
					header("Location: pverify.php");
				}else{
					$error = "Invalid DoB or CID_No!!!";
					$success = "";
				}
			}else{
				$error = "Invalid DoB or CID_No!!!";
				$success = "";
			}
    	}else{
			echo "All fields are required";
		}
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
	<div class="container vh-100 ">
		<div class="row justify-content-center h-100 ">
			<div class="card w-35 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
					Modern Medical Recording System <br>
					འབྲུག་གསོ་བའི་ཞབས་ཏོག
				</div>
				<div class="text-center">
					<img style="background-color: white; width: 60px; height: 60px;" src="lock.jpg">
				</div>
				<div class="card-body">
					<p style="text-align: center; color: red;"><?php echo $error; ?></p><p style="text-align: center; color: green;"><?php echo $success; ?></p>
					<form method="POST">
						<div class="form-group">
							<label for="dob">Date of Birth:</label>
							<input type="date" class="form-control" placeholder="DoB" name="dob">
							<label for="CID_No">CID No.:</label>
							<input type="text" class="form-control" placeholder="CID" name="cid">
						</div>
						<input type="submit" class="btn btn-primary w-100" value="Login" name="submit">
					</form>
				</div>
				<div class="card-footer text-right">
					<small>&copy; MMRS</small>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>