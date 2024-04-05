<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>UniSelect - Education</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	
	<!-- Site Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <script src="https://kit.fontawesome.com/12f0858ee3.js" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>(function(w, d) { w.CollectId = "604fc4cb3bb9b94050321ce9"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="login-anc active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a class="reg-anc" href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button class="btn btn-light btn-radius btn-brd grd1 login_btn">
										Submit
									</button>
									<a class="for-pwd">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="name" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1 reg_btn" name="reg_user">Submit</button>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Forget">
						<form>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Enter your email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="New Password" type="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button class="btn btn-light btn-radius btn-brd grd1 login_btn">
										Reset Password
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Programs</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="undergrad.php">Undergraduate</a>
								<a class="dropdown-item" href="postgrad.php">Postgraduate</a>
								<a class="dropdown-item" href="phd.php">PHD</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Community</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="news.php">News</a>
								<a class="dropdown-item" href="forum.php">Forum</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="ranking.php">Ranking</a></li>
						<li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <?php 
							if(isset($_SESSION['name']) && !empty($_SESSION['name']) ) {
								if($_SESSION['admin'] == 1) { 
						?>
									<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="dropdown-a" data-toggle="dropdown"><?php echo $_SESSION['name']; ?></a>
										<div class="dropdown-menu" aria-labelledby="dropdown-a">
											<a class="dropdown-item" href="./admin/index.html">Admin Dashboard</a>
											<a class="dropdown-item" href="./functions/logout.php">Logout</a>
										</div>
									</li>
						<?php
								} else {
						?>
									<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="dropdown-a" data-toggle="dropdown"><?php echo $_SESSION['name']; ?></a>
										<div class="dropdown-menu" aria-labelledby="dropdown-a">
											<a class="dropdown-item" href="settings.php">Settings</a>
											<a class="dropdown-item" href="./functions/logout.php">Logout</a>
										</div>
									</li>
							
						<?php 	} 
							} else {
								echo '<li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Login/Sign-Up</span></a></li>';
							}
						?>
                    </ul>
				</div>
			</div>
		</nav>
	<!-- End header -->
	</header>