<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>CATS VS DOGS</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<h2><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></h2>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<button style = 'border:none; border-radius:15%; background:azure;;width:145px; height:35px; font-size:30px;'/> <a href="users.php?">USERS</a> </p></button>
		<?php endif ?>
	</div>

	<div class="grid-container">
  <div class="grid-item"> <img src="cats.jpg" alt="Cats"/></div>
  <div class="grid-item"> <iframe width="560" height="315" src="https://www.youtube.com/embed/URMB-8JYJWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
  <div class="grid-item"> <img src="dogs.jpg" alt="Dogs"/> </div>  
</div>
<div class='text'>
		<center> <H1> Cats vs Dogs</H1>
	
	<p>Cats and dogs are in war forever ormaybe not at all</p>
	
		</center>

  </div>

</body>
</html>