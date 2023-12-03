<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['admin_username'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM department_master WHERE `EMAIL`='$email' AND `PASS_WORD`='$password'";
	$result = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($result);
	if ($num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['admin_username'] = $row['DEPT_NAME'];
		$_SESSION['dept_id'] = $row['DEPT_ID'];
		header("Location: dashboard.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM department_master WHERE `EMAIL`='UDIT@gmail.com' AND `PASS_WORD`='$password'";
	$result = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($result);
	if ($num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['admin_username'] = $row['DEPT_NAME'];
		$_SESSION['dept_id'] = $row['DEPT_ID'];
		header("Location: admin/admin.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">

	<title>Login</title>
</head>
<body>

<nav class="navbar">
<div class="items">
  <img src="assets\img\mumbai-university-removebg-preview.png" alt="image" height="100px" width="">
  <h1>University Of Mumbai</h1>
  <img src="assets\img\nirf-full-removebg-preview.png" alt="image" height="90px" width="">
</div>
</nav>
	<div class="main">

		<div class="container news">
			<p id="news">Instructions</p>
			<p id="newsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus corporis reprehenderit pariatur, soluta, exercitationem assumenda in reiciendis sequi vitae enim, quisquam suscipit dolorem eum quasi nesciunt totam sit adipisci facere!
			Temporibus consequatur itaque amet, dolorum fuga beatae veniam. Perspiciatis totam suscipit, harum obcaecati quam dolores consequatur atque, cum, aspernatur qui maxime tenetur. Minima ducimus modi dignissimos commodi, vitae architecto magnam.</p>
		</div>
		
		<div class="container">
			<form action="" method="POST" class="login-email" onsubmit="return validateForm()">
				<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
				<div class="input-group">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<div class="input-group">
					<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				</div>
				
				<div class="input-group">
					<button name="submit" class="btn">Login</button>
				</div>

				
					<button name="login" class="nodal-officer">Login as a nodal Officer</button>
			</form>
		</div>
		
		<div class="container helpdesk">
			<p id="help">Helpdesk</p>
			<p id="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga odio quam nulla laboriosam exercitationem a, asperiores dolore amet dolores nobis. Voluptatem porro nisi facilis odit aliquid aperiam soluta totam nemo?
			Cumque hic, repellendus consequatur quasi porro a maxime aspernatur dignissimos totam voluptatibus suscipit sint quam. Officia pariatur, iusto obcaecati veritatis quibusdam inventore adipisci unde optio vitae quaerat quasi hic debitis.</p>
		</div>
	</div>
</body>
</html>


