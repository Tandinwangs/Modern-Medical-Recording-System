<?php
	$server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "verify";

    
    //Query the database for existing patient.
    $conn = mysqli_connect($server, $username, $password, $dbname);

    //$selected = mysqli_select_db("test", $dbhandle);
    if(isset(($_POST['submit']))){
    	if(!empty($_POST['pname']) && !empty($_POST['cid'])){
    		$Name = $_POST["pname"];
			$CiD = $_POST["cid"];
			$Date = $_POST["date"];
			$Prob = $_POST["hproblem"];
			$Doctor = $_POST["doc"];
			
			$query = "INSERT INTO data(Name, CID, Referred_Date, Problem, Referred) VALUES('$Name', '$CiD', '$Date', '$Prob', '$Doctor')";
			$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
			if($run){
				?>
				<script >
					alert("Update successful!");
				</script>
				<?php
			}else{
				?>
				<script >
					alert("Did not submit!");
				</script>
				<?php
			}

    	}else{
			echo "All fields are required";
		}
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Retrieving Example</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="background-color: gray;">
	<div>
		<div class="row justify-content-center h-100 ">
			<div class="card w-100">
				<div class="card-header text-center bg-primary text-white">
					<img style="border-radius: 50%; width: 70px; height: 70px;" src="logo.png">
				</div>
				<div class="card-body">
					<form method="POST">
						<div class="form-group">
							<label for="PName">Patient Name:</label>
							<input type="text" class="form-control w-50" placeholder="Patient Name" name="pname" required>
						</div>
						<div class="form-group">
							<label for="Name">CID:</label>
							<input type="text" class="form-control w-50" placeholder="CID" name="cid" required>
						</div>
						<div class="form-group">
							<label for="Date">Date:</label>
							<input type="date" class="form-control w-50" placeholder="Reffered Date" name="date" required>
						</div>
						<div>
							<label for="HProblem">Health Problem/Diagnosis</label>
							<textarea type="text" class="form-control w-50" name="hproblem"></textarea>
						</div>
						<div class="form-group">
							<label for="Name">Reffered to</label>
							<input type="text" class="form-control w-50" placeholder="Doctor Name" name="doc">
						</div><br>
						<input type="submit" class="btn btn-primary w-70" value="Update" name="submit"><br>
					</form>
				</div>
				<div class="card-footer text-right
				">
					<small>&copy; MMRS</small>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>