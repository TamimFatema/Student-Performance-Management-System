<!doctype php>
<php lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>h.auth_view_course_outline</title>

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
                        Higher Authority
                        <img src="High_auth.png" alt="">
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href=""><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
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
					<a href="higher_auth_dashboard.php" class="active">
						<i class='bx bxs-dashboard icon' ></i> Dashboard
					</a>
				</li>

				<li>
                    <a href="h.auth_course_outline.php">
						<i class='bx bx-columns icon' ></i> 
						Course Outline
					</a>
                </li>

                <li>
                    <a href="#">
						<i class='bx bxs-notepad icon' ></i> 
						Questions
						<i class='bx bx-chevron-right icon-right' ></i>
					</a>
                    <ul class="side-dropdown">
                    	<li><a href="h.auth_spring.php">Spring</a></li>
					    <li><a href="h.auth_summer.php">Summer</a></li>
					    <li><a href="h.auth_autumn.phpl">Autumn</a></li>
                    </ul>
                </li>

                <li>
                    <a href="">
						<i class='bx bxs-bar-chart-alt-2 icon' ></i> 
						PLO Analysis
					</a>
                </li>
				
                <li>
                    <a href="log out.php">
						<i class='fa fa-sign-out icon' ></i> 
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
		 <div class="Course-box">
			<h2>All Course Outline</h2>
            <br>
		 </div>
		 <div class="search">
			<input type="text" class="searchTerm" placeholder="Search">
			<button type="submit" class="searchButton">
			  <i class="fa fa-search"></i>
		   </button>
		 </div><br>
          <table class="table table-hover" id="dev-table">
            <thead>
              <tr>
                <th>Course Name</th>
                <th>School</th>
                <th>Course Credit</th>
                <th>View Course Outline</th>
              </tr>
            </thead>
            <tr>
      
              <td>CSE303</td>
              <td>SETS</td>
              <td>03</td>
              <td><a class="btn btn-primary btn-xs" href="">
                  <span class="fas fa-eye f-left"></span></a></td>
            </tr>
			<tr>
      
				<td>MIS442</td>
				<td>SBE</td>
				<td>03</td>
				<td><a class="btn btn-primary btn-xs" href="">
					<span class="fas fa-eye f-left"></span></a></td>
			  </tr>
			  <tr>
      
				<td>CMN201</td>
				<td>SLASS</td>
				<td>03</td>
				<td><a class="btn btn-primary btn-xs" href="">
					<span class="fas fa-eye f-left"></span></a></td>
			  </tr>
			  <tr>
      
				<td>CSE203</td>
				<td>SETS</td>
				<td>03</td>
				<td><a class="btn btn-primary btn-xs" href="">
					<span class="fas fa-eye f-left"></span></a></td>
			  </tr>
			  <tr>
      
				<td>ACN201</td>
				<td>SBE</td>
				<td>03</td>
				<td><a class="btn btn-primary btn-xs" href="">
					<span class="fas fa-eye f-left"></span></a></td>
			  </tr>
          </table>
			<br><br><br><br>
		  </div>
		</div>
		</div>
	</div>

	<!-- Preloader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<!-- Loader -->
	<div class="loader-overlay"></div>

	<!-- General JS Scripts -->
	<script src="assets/js/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="assets/modules/jquery/jquery.min.js"></script>
	<script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/modules/popper/popper.min.js"></script>
 
    <!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
 </body>
</php>