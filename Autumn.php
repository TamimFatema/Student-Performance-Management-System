
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Autumn semester</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="web.css">
    <link rel="stylesheet" href="question.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">

</head>
<body>
  <!--Topbar -->
  <div class="topbar transition">
	<div class="bars">
		<button type="button" class="btn transition" id="sidebar-toggle">
			<i class="fa fa-bars"></i>
		</button>
	</div>
		<div class="menu">
			<ul>
				  <li class="nav-item dropdown"> 
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Faculty
                        <img src="faculty.png" alt="">
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="my-profile.php"><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
						<a class="dropdown-item" href="settings.php"><i class="fa fa-cog size-icon-1"></i> <span>Settings</span></a>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="log out.php"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>Log out</span></a>
					</ul>
				  </li>
			</ul>
		</div>
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
		<div class="sidebar-content">
			<div id="sidebar">
	
				<!-- Logo -->
				<div class="logo">
					<h2 class="mb-0"><img src="logo.png"> IUB</h2>
				</div>
	
				<ul class="side-menu">
					<li>
						<a href="homepage.php" class="active">
							<i class='bx bxs-dashboard icon'></i> Dashboard
						</a>
					</li>
	
					<li>
						<a href="course_outline.php">
							<i class='bx bx-columns icon'></i>
							Course Outline
						</a>
					</li>
	
					<li>
						<a href="#">
							<i class='bx bxs-notepad icon'></i>
							Questions
							<i class='bx bx-chevron-right icon-right'></i>
						</a>
						<ul class="side-dropdown">
							<li><a href="spring.php">Spring</a></li>
							<li><a href="Summer.php">Summer</a></li>
							<li><a href="Autumn.php">Autumn</a></li>
						</ul>
					</li>
	
					<li>
						<a href="stud_info.php">
							<i class='bx bxs-widget icon'></i>
							Students
						</a>
					</li>
					<li>
						<a href="PLO_CO_maping.php">
							<i class='bx bxs-bar-chart-alt-2 icon'></i>
							PLO Analysis
						</a>
					</li>
					<li>
						<a href="assessment_data_entry.php">
							<i class='bx bxs-widget icon'></i>
							Assesment Data
						</a>
					</li>
					<li>
						<a href="Evaluting_data.php">
							<i class="bx bx-columns icon"></i>
							Evaluting Data
						</a>
					</li>
	
					<a href="faculty_eva.php">
						<i class='bx bxs-widget icon'></i>
						Review
					</a>
					</li>
	
					<li>
						<a href="#">
							<i class='bx bxs-bar-chart-alt-2 icon'></i>
							Spider Chart
							<i class='bx bx-chevron-right icon-right'></i>
						</a>
						<ul class="side-dropdown">
							<li><a href="">PLO's</a></li>
							<li><a href="">CO's</a></li>
						</ul>
					</li>
					<li>
						<a href="log out.php">
							<i class='fa fa-sign-out icon'></i>
							Log out
						</a>
					</li>
				</ul>
			</div>
	
		</div>
	</div>
	</div>

	<!--Content Start-->
	<div class="content-start transition">
		<div class="container-fluid dashboard">
	
	
		 <div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3">
				<div class="card bg-c-blue order-card">
				  <div class="card-block">
					<h6 class="m-b-20"> <a href="Add_quiz.php" style="text-decoration: none;color:white;">Quiz</a> </h6>
					<h2 class="text-right"><i class="fas fa-plus f-left"></i></h2>
				  </div>
				</div>
			  </div>
		  
			  <div class="col-md-6 col-lg-3">
				<div class="card bg-c-green order-card">
				  <div class="card-block">
					<h6 class="m-b-20"><a href="add_exam.php" style="text-decoration: none;color:white;">Mid-term</a> </h6>
					<h2 class="text-right"><i class="fas fa-plus f-left"></i></h2>
				  </div>
				</div>
			  </div>
	
			  <div class="col-md-6 col-lg-3">
				<div class="card bg-c-green order-card">
				  <div class="card-block">
					<h6 class="m-b-20"><a href="View_Final.php" style="text-decoration: none;color:white;">Final-Term</a> </h6>
					<h2 class="text-right"><i class="fas fa-plus f-left"></i></h2>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
	
		</div>
	</div><!-- End Content -->

	<!-- JS Libraies -->
	<script src="assets/modules/jquery/jquery.min.js"></script>
	<script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/modules/popper/popper.min.js"></script>
 
    <!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
 </body>
</html>