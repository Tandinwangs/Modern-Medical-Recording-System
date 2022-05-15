<?php
	$server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(isset(($_POST['submit']))){
    	if(!empty($_POST['name']) && !empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['pass']) && !empty($_POST['gender'])){
    		$Name = $_POST["name"];
			$EmpID = $_POST["id"];
			$Title = $_POST["title"];
			$Pass = md5($_POST["pass"]);
			$Gender = $_POST["gender"];
			
			$user = mysqli_query($conn, "SELECT Emp_ID, Password FROM hregister WHERE Emp_ID = '$EmpID' and Password = '$Pass'");
			$res = mysqli_num_rows($user);
			if($res > 0){
				?>
				<script >
					alert("This employment ID is already in used!");
				</script>
				<?php
			}else{
				$query = "INSERT INTO hregister(Name, Emp_ID, Title, Gender, Password) VALUES('$Name', '$EmpID', '$Title', '$Gender', '$Pass')";
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