<html>
<head>
	<img src="https://richardmiddleton.me/comic-60.png" alt="">
	<ul>
		<li><a href="">Home</a></li>
		<li><a href="">About</a></li>
		<li><a href="">Blog</a></li>
		<li><a href="">Signup</a></li>
		<li><a href="">Contact</a></li>
	</ul>
</head>
<style>
$blue: #1686d9;

h1, h3 {
	color: white;
	font-weight: 400;
}

header {
	display: flex;
	padding: 0 15px;
	max-width: 800px;
	margin: 0 auto;
	justify-content: space-between;
	align-items: center;
	img {
		width: 30px;
	}
}

ul {
	list-style: none;
}

li {
	display: inline;
	padding: 6px;
	a {
		text-decoration: none;
		color: black;
		&:hover {
			text-decoration: underline;
		}
	}
}

.hero {
	background-image: url("http://richardmiddleton.me/modal-hero.jpg");
	background-size: cover;
	height: 420px;
	width: 100%;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
}

.button {
	background-color: $blue;
	border: 2px solid white;
	border-radius: 30px;
	text-decoration: none;
	padding: 10px 28px;
	color: white;
	margin-top: 10px;
	display: inline-block;
	&:hover {
		background-color: white;
		color: $blue;
		border: 2px solid $blue;
	}
}

.card-container {
	max-width: 800px;
	margin: 50px auto;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
}

.card {
	height: 300px;
	width: 230px;
	border: 1px solid darkgray;
	border-radius: 3px;
	margin: 10px;
}

// MODAL STARTS HERE //

.bg-modal {
	background-color: rgba(0, 0, 0, 0.8);
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	display: none;
	justify-content: center;
	align-items: center;
}

.modal-contents {
	height: 300px;
	width: 500px;
	background-color: white;
	text-align: center;
	padding: 20px;
	position: relative;
	border-radius: 4px;
}

input {
	margin: 15px auto;
	display: block;
	width: 50%;
	padding: 8px;
	border: 1px solid gray;
}

.close {
	position: absolute;
	top: 0;
	right: 10px;
	font-size: 42px;
	color: #333;
	transform: rotate(45deg);
	cursor: pointer;
	&:hover {
		color: #666;
	}
}

</style>
<script>
document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});
</script>
<body>
<!-- Hero Image -->

<section class="hero">
	<div class="hero-content">
		<h1>Let's create a modal</h1>
		<h3>Sign Up Now</h3>
		<a href="#" id="button" class="button">Click Me</a>
	</div>
</section>

<!-- Card Section -->

<section class="card-container">
	<div class="card"></div>
	<div class="card"></div>
	<div class="card"></div>
</section>

<!-- Modal Section -->

<div class="bg-modal">
	<div class="modal-contents">

		<div class="close">+</div>
		<img src="https://richardmiddleton.me/comic-100.png" alt="">

		<form action="">
			<input type="text" placeholder="Name">
			<input type="email" placeholder="E-Mail">
			<a href="#" class="button">Submit</a>
		</form>

	</div>
</div>
</body>
</html>