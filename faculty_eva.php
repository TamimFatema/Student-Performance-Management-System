
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard</title>

	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="web.css">
	<link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
	<link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">
	<link rel="stylesheet" href="assets/modules/apexcharts/apexcharts.css">

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
						<a class="dropdown-item" href="my-profile.html"><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
						<a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i> <span>Settings</span></a>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="log out.html"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>Log out</span></a>
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
					<a href="homepage.html" class="active">
						<i class='bx bxs-dashboard icon' ></i> Dashboard
					</a>
				</li>

				<li>
                    <a href="course_outline.html">
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
                    	<li><a href="spring.html">Spring</a></li>
					    <li><a href="Summer.html">Summer</a></li>
					    <li><a href="Autumn.html">Autumn</a></li>
                    </ul>
                </li>

				<li>
                    <a href="stud_info.html">
						<i class='bx bxs-widget icon' ></i> 
                        Students
					</a>
                </li>
                <li>
                    <a href="PLO_CO_maping.html">
						<i class='bx bxs-bar-chart-alt-2 icon' ></i> 
						PLO Analysis
					</a>
                </li>
				<li>
                    <a href="PLO_CO_maping.html">
						<i class='bx bxs-widget icon' ></i> 
						Assesment Data
					</a>
                </li>
				<li >
					<a href="Evaluting_data.html">
						<i class="bx bx-columns icon"></i>
						<p>Evaluting Data</p>
					</a>
				</li>
				
                    <a href="faculty_eva.html">
						<i class='bx bxs-widget icon' ></i> 
						Review
					</a>
                </li>

				<li>
                    <a href="#">
						<i class='bx bxs-bar-chart-alt-2 icon' ></i> 
						Spider Chart
						<i class='bx bx-chevron-right icon-right' ></i>
					</a>
                    <ul class="side-dropdown">
                        <li><a href="">PLO's</a></li>
                        <li><a href="">CO's</a></li>
                    </ul>
                </li>
				<li>
                    <a href="log out.html">
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
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">View Student Review</h4>
                  </div>
                  <table class="table table-hover" id="dev-table">
                    <thead>
                      <tr>
              
                        <th>Student Name</th>
                        <th>Section</th>
                        <th>Review</th>
                      </tr>
                    </thead>
                    <tr>
              
                      <td>A</td>
                      <td>2</td>
                      <td>1</td>
                      <td><a class="btn btn-primary btn-xs" href=""><span class="fas fa-eye f-left"></span></a></td>
                      
                    </tr>
                  </table>
                </div>
              </div>
        
        </div>
    </div>


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
</html>