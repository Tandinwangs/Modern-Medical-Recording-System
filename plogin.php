<?php
$conn = mysqli_connect("localhost", "root", "465661", "MMRS");

if(!$conn){
	echo "Not";
	}
	else
		{  
       $cid = mysqli_real_escape_string($conn, $_POST["cid"]);   

       $query = "SELECT * FROM precord WHERE CID = '$cid'";
       $sql = "SELECT * FROM pregister WHERE CID='$cid'";

       $res = mysqli_query($conn, $sql);
       $detail = mysqli_fetch_assoc($res); 
       $result = mysqli_query($conn, $query);
       if(mysqli_num_rows($result) > 0){
       		echo '<script>alert("Login Successful")</script>';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Connectivity</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md bg-success navigation-clean">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><img class="rounded-circle" src="assets/img/log.png" width="100" height="100">
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <h2><strong>MODERN MEDICAL RECORDING SYSTEM</strong></h2>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link border rounded-0 shadow-lg d-inline float-right" data-bs-hover-animate="pulse" href="untitled-1.html"><strong>LOGOUT</strong></a></li>
                </ul>
        </div>
        </div>
    </nav>
<br>
<br>
<div class="table-responsive">
<table class="table" width="600" border="3px"  cellpadding="10" cellspacing="15" style=" ">
	<tr style="background-color: grey;">
		<th>Age</th>
		<th>Problem</th>
		<th>Date 0f Visit</th>
		<th>Referred To</th>
	</tr>

<?php
echo "<b>"."<p>"."Name: ".$detail['Name']."</p>"."</b>";
echo "<b>"."<p>"."Citizenship ID Card Number: ".$detail['CID']."</p>"."</b>";
while ($row = mysqli_fetch_assoc($result) ) {
	echo "<tr>";

	echo "<td>".$row['Age']."</td>";

	echo "<td>".$row['Problem']."</td>";

	echo "<td>".$row['VisitDate']."</td>";


	echo "<td>".$row['EmployId']."</td>";

	echo "</tr>";
}
?>

</table> 
</div>
<br> <br> 
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Mission</h3>
                    <ul>
                        <li><a href="#"></a></li>
                        <li></li>
                        <li><a href="#"></a></li>
                    </ul>
                    <p class="text-white-50">To keep the systematic records of every patient.                                 To transform the manual work into digitalized way.</p>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Vision</h3>
                    <p class="text-white-50">To replace the Health Book that contains valuable information on a patient’s medical report which could be lost easily. </p>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>MMRS</h3>
                    <p></p>
                    <p class="text-white" style="color: rgb(240,249,255);">We will give our best service to the people of Gyalpozhing with utmost dedication.</p><p class="text-white" style="color: rgb(240,249,255);">Scope: Our project is for recording the patient detail in the database and it is scope only to the Gyalpozhing BHU.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">MMRS © 2021</p>
        </div>
    </footer>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>
</html>
       
<?php
       }else {
            echo '<script>alert("Wrong User Details")</script>';  
       
       }  
 
?>
<?php 
}
?>