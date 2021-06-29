<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  // Initialize message variable
  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	
	$text1 = mysqli_real_escape_string($db, $_POST['text1']);

  	$sql = "SELECT * FROM images WHERE product='$text1'";
  	
  }
  $result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="style2.css">
   
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<style>
body {
 background-image: url("back.jpg");
 background-color: #cccccc;
}
.dropdown {
  overflow: hidden;
}


.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: gold;
 
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: offwhite;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  
}

.dropdown-content a:hover {
  background-color: offwhite;
}

.dropdown:hover .dropdown-content {
  display: block;
}
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
	background-color:white;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: center;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
   .add{
	   float:center;
	   background-color:white;
	   align-content:center;
	   padding:10px;
	   width: 50%;
   
   	border: 1px solid #cbcbcb;
	
   }
   .img_text{
	   float:center;
   }
</style>
</head>
<body>
<div class="bg-div">
 
   
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
			<img class="logo" src="logo.png"  alt="align box" >
            <li><a href="event.html">Events</a></li>
            <li><div class="dropdown" >
            <button class="dropbtn">
			Logged In
            <i class="fa fa-caret-down"></i>
            </button>
               <div class="dropdown-content">
                  <a href="#"><?php session_start();  echo  $_SESSION['username']; ?></a>
                  <a href="home.html">Log Out</a>
            </li>
    </div>
  </div> 
        </ul>
    </nav>
</div>
<h1 style="color:white">welcome <?php echo  $_SESSION['username']; ?> !</h1>
<center>
  <div class="add">
  <form method="POST" action="filter.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	
	<div>
	  <input type="text" name="text1" placeholder="filter">
	</div>
	
  	<div>
  		<button type="submit" name="upload">POST</button>

		<a href="new.php">ALL</a>
  	</div>
  </form>
 </div>
 <center>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
		 echo "<div id='img_text'>";
		echo "Name :".$row['name'];
		echo "<p>Category : ".$row['category']."</p>";
		echo "<p>Product : ".$row['product']."</p>";
		echo "<p>Contact no: ".$row['contact']."</p>";
		echo "<p>Address : ".$row['address']."</p>";
      	echo "<p>About Us : ".$row['image_text']."</p>";
      echo "</div>";
	  echo "</div>";
    }
  ?>
  </div>

</body>
</html>