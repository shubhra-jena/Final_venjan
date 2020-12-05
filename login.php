<!DOCTYPE html>
<html lang="en">

<head>
	<title>Venjan Tutorials</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="College, Pokhara, IT College, Lions Marga, college in pokhara, nepalIT">
	<meta name="author" content="Bishworaj Poudel">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="javascript/js.js"></script>
	<script src="javascript/login.js"></script>

</head>

<body class="body">
	<header class="mainheader">
		<img src="images/logo.png">
		<content id="search">
			<form>
				<input type="text" name="search" placeholder="Search anything..." onclick="window.location.href='search.php'">
			</form>
		</content>
		<nav>
			<!--<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="course.php">Course</a></li>
			<li><a href="referencebook.php">Reference Books</a></li>
			<li><a href="notes.php">Notes</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="login.php">Login</a></li>	
		</ul>-->
			<div class="topnav" id="myTopnav">
				<a href="index.php" class="active">Home</a>
				<div class="dropdown">
					<button class="dropbtn">About Us
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="privacy policy.php">Privacy Policy</a>
						<a href="Terms&condition.php">Terms and Conditions</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Study Material
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="notes.php">Notes</a>
						<a href="referencebook.php">Reference Books</a>
						<a href="Qpaper.php">Sample Ques. Papers</a>
					</div>
				</div>
				<a href="course.php">Courses</a>
				<a href="contact.php">Contact</a>
				<a href="Gallery.php">Gallery</a>
				<a href="login.php">Login</a>
				<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
		</nav><br>
	</header>

	<div class="container">
		<div class="main">

			<h3>Please fill out the following fields to login:</h3>
			<hr />

			<form id="form_id" method="post" name="myform" action="login_process.php">
				<strong>Email :</strong></br>
				<input type="text" name="username" id="username" /></br>

				<strong>Password :</strong></br>
				<input type="password" name="password" id="password" /></br>

				<!-- <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> -->
				<!-- <label for="vehicle1"> Remember me</label><br> -->
				<br>

				<a href="https://www.w3schools.com/">Forgot Password?</a>
				<br>
				<br>

				<input type="submit" name="login" value="Login" id="submit" />
			</form>
			<br>
			<span><b class="note">Note : </b>If not registered yet, Register here.<br /><b class="valid"></span>

			<input type="submit" value="Register" id="submit" onclick="location.href='register.php'"/>
		</div>



		<div class="fugo">
			<img src="images/4957136.jpg" style="width:520px;height:600px" /></img>
		</div>
	</div>

	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>


	<footer class="mainFooter">

		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/aaryan.raina.7"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/aaryan_raina/"><i class="fa fa-instagram"></i></a>
				<a href="https://www.linkedin.com/in/hemkesh-raina-90a37a146/?originalSubdomain=in"><i class="fa fa-linkedin"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="JobOppurtunities.php"> Job Opportunities</a>
				</p>

				<p id="cpy">Venjan Tutorials&copy; 2020<br><br>I am very passionate about sharing my knowledge to the students for free!</p>
			</div>

		</footer>
	</footer>
	<script type="text/javascript">
		document.title = "Login";
	</script>
</body>

</html>