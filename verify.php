<?php
	$server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    
    //Query the database for existing patient.
    $dbhandle = mysqli_connect($server, $username, $password, $dbname);

    //$selected = mysqli_select_db("test", $dbhandle);

    if(isset(($_POST['submit']))){
    	if(!empty($_POST['name']) && !empty($_POST['cid'])){
    		$Name = $_POST["name"];
			$CiD = $_POST["cid"];

			$user = mysqli_query($dbhandle, "SELECT CID_No FROM pregister WHERE CID_No = '$CiD'");
			$res = mysqli_num_rows($user);
			if('CID_No' == '$CiD'){
				echo "Logged in. Welcome ".$Name;
			}else{
				echo "Login Failed! ".mysqli_error($dbhandle);
			}
    	}else{
			echo "All fields are required";
		}
    }
?>