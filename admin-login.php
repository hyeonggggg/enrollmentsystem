<?php
session_start();

include 'conn.php';
if (isset($_SESSION['user'])) {
  header('Location: adminhome.php');
} else {

  if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $sql = "SELECT * FROM admin WHERE username='$username' AND password ='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $_SESSION['user'] = $username;
        header('Location: adminhome.php');
        exit();
      }
    }
    else {
      $_SESSION['loginstatus'] = "The Username/Password you entered is incorrect. Please try again.";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Home | Plaridel Integrated National High School</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.png" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="css/styles.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<style>
		body {
			background-image: url(faculty.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.btn-login {
			font-size: 0.9rem;
			letter-spacing: 0.05rem;
			padding: 0.75rem 1rem;
		}

		.btn-google {
			color: white !important;
			background-color: #ea4335;
		}

		.btn-facebook {
			color: white !important;
			background-color: #3b5998;
		}

		.centered {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.form-control:focus {
			border-color: #28a745;
			box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
		}

		.form-select:focus {
			border-color: #28a745;
			box-shadow: 0 0 0 0.3rem rgba(40, 167, 69, 0.25);
		}
	</style>
</head>

<body class="d-flex flex-column">
	<main class="flex-shrink-0">
		<nav class="navbar navbar-expand-lg navbar-dark bg-success">
			<div class="container px-5">
				<a class="navbar-brand" href="index">
					<img src="assets/favicon.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-middle">
					<b></b>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link" href="index">Back to Home</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</main>

	<body>
		<div class="centered">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
						<div class="card border-0 shadow rounded-3 my-5">
							<div class="card-body p-4 p-sm-5">
								<h5 class="card-title text-center mb-3 fw-bold fs-1 text-success">ADMIN LOGIN</h5>
								<form class="needs-validation" action="admin-login.php" method="POST" novalidate="">
									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
										<label for="floatingInput">Username</label>
									</div>
									<div class="form-floating mb-3">
										<input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
										<label for="floatingPassword">Password</label>
									</div>
									<div class="d-grid">
										<button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Sign in</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>