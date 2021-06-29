<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = $_POST['image_text'];

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
	
  }
  
  $result = mysqli_query($db, "SELECT * FROM images");
?>



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
	width:50%;
	margin:20px auto;
	borde:1px solid #cbcbcb;
	
}
form{
	width:50%;
	margin:20px auto;
	
}
form.div{
	margin-top:5px;
	
}
#img_div
{
	width:80%;
	padding:5px;
	margin:15px auto;
	border:1px solid #cbcbcb;
}
#img_div:after{
	content:"";
	display:block;
	clear:both;
}
img{
	float:left;
	margin:5px;
	width:300px;
	height:140px;
}
</style>

</head>
<body>
<div class="bg-div">
 
   
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
			<img class="logo" src="logo.png" width="130" height="130" alt="align box" >
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
<h4 style="color:white">welcome <?php echo  $_SESSION['username']; ?></h4>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="new.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
<button type="submit" name="filter">Filter</button>
</body>
</html>