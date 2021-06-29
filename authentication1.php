<?php      
    include('connection.php');  
	    session_start();
        $username = mysqli_real_escape_string($con,$_POST['user']);  
        $password = mysqli_real_escape_string($con,$_POST['password']);  
		
		
        
		
        $sql =  "INSERT INTO login(username, password) VALUES ('$username','$password')"; 
          if (mysqli_query($con, $sql)) {
            echo "New record created successfully";
          }
		  else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
           $_SESSION['username'] = $username;
           header("location: login1.html");
       
?>  
