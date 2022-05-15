<?php
	$server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(isset(($_POST['submit']))){
    	if(!empty($_POST['name']) && !empty($_POST['cid']) && !empty($_POST['address']) && !empty($_POST['mobile']) && !empty($_POST['gender'])){
    		$Name = $_POST["name"];
			$CiD = $_POST["cid"];
			$Address = $_POST["address"];
			$MobileNo = $_POST["mobile"];
			$Gender = $_POST["gender"];
			$DoB = $_POST["dob"];

			$user = mysqli_query($conn, "SELECT CID_No, DoB FROM pregister WHERE CID_No = '$CiD' and DoB = '$DoB'");
			$res = mysqli_num_rows($user);
			if($res > 0){
				?>
				<script >
					alert("This CID is already registered by another user!");
				</script>
				<?php
			}else{
				$query = "INSERT INTO pregister(Patient_Name, CID_No, Address, Mobile_No, Gender, DoB) VALUES('$Name', '$CiD', '$Address', '$MobileNo', '$Gender', '$DoB')";
				$run = mysqli_query($conn, $query) or die(mysqli_error($conn));

				if($run){
					?>
					<script >
						alert("Form submitted Successfully!");
					</script>
					<?php
				}else{
					?>
					<script >
						alert("Form did not submitted!");
					</script>
					<?php
				}
			}
    		
    	}else{
			echo "All fields are required";
		}
    }
    //mysql_close();
?>

