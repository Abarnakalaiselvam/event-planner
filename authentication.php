<?php      
    include('connection.php');  
	session_start();
    $username = $_POST['user'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script>alert('Sussessfully logged in')</script>"; 
        }  
        else{  
            echo "<script>alert('password or username incorrect!')</script>"; 
        }   
        $_SESSION['username'] = $username;
           header("location: new.php");		
?>  
