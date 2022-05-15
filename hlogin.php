
<?php
$conn = mysqli_connect('localhost', 'root', '465661', 'MMRS');
if(!$conn){  
    echo "Not a success";
      }  
      else  
      {  
       $employid = mysqli_real_escape_string($conn, $_POST["employid"]);  
       $password = mysqli_real_escape_string($conn, $_POST["password"]);  
       $password = md5($password);
       $query = "SELECT * FROM hregister WHERE Employid = '$employid' AND Password = '$password'";  
       $result = mysqli_query($conn, $query);  
       if(mysqli_num_rows($result) > 0)  
       {  
            echo '<script>alert("Login Successful")</script>' && header("Location: untitled-1.html");
            
       }  
       else  
       {  
            echo '<script>alert("Wrong User Details")</script>';  
       }  
 
 }  
 ?>  

