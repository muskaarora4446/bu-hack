<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive">
	<meta name="author" content="Bootlab">

	<title>DataTables Buttons | Medi Lab - Admin </title>

	<link rel="canonical" href="tables-datatables-buttons.php" />
	

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2120269,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script><script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q3ZYEKLQ68');
</script></head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	
		







<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar" style="background: #ca5151;">
				<a class="sidebar-brand" href="index.php">
          <!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
            <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z"/>
            <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z"/>
            <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z"/>
          </svg> -->
    
          <span class="align-middle mr-3">Medi Lab</span>
        </a>

				
					<li class="sidebar-item active">
						<a href="#datatables" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="list"></i> <span class="align-middle">DataTables</span>
            </a>
						<ul id="datatables" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-responsive.php">Responsive Table</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-buttons.php">Table with Buttons</a></li>
							<li class="sidebar-item active"><a class="sidebar-link" href="tables-datatables-column-search.php">Column Search</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-multi.php">Multi Selection</a></li>
													</ul>
					</li>

					
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
						<div class="input-group-append">
							<button class="btn" type="button">
                <i class="align-middle" data-feather="search"></i>
              </button>
						</div>
					</div>
				</form>

				<ul class="navbar-nav">
					<li class="nav-item px-2 dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mega menu
            </a>
						<div class="dropdown-menu dropdown-menu-left dropdown-mega" aria-labelledby="servicesDropdown">
							<div class="d-md-flex align-items-start justify-content-start">
								<div class="dropdown-mega-list">
									<!-- <div class="dropdown-header">UI Elements</div>
									<a class="dropdown-item" href="#">Alerts</a>
									<a class="dropdown-item" href="#">Buttons</a>
									<a class="dropdown-item" href="#">Cards</a>
									<a class="dropdown-item" href="#">Carousel</a>
									<a class="dropdown-item" href="#">General</a>
									<a class="dropdown-item" href="#">Grid</a>
									<a class="dropdown-item" href="#">Modals</a>
									<a class="dropdown-item" href="#">Tabs</a>
									<a class="dropdown-item" href="#">Typography</a>
								</div> -->
								<!-- <div class="dropdown-mega-list">
									<div class="dropdown-header">Forms</div>
									<a class="dropdown-item" href="#">Layouts</a>
									<a class="dropdown-item" href="#">Basic Inputs</a>
									<a class="dropdown-item" href="#">Input Groups</a>
									<a class="dropdown-item" href="#">Advanced Inputs</a>
									<a class="dropdown-item" href="#">Editors</a>
									<a class="dropdown-item" href="#">Validation</a>
									<a class="dropdown-item" href="#">Wizard</a>
								</div> -->
								<div class="dropdown-mega-list">
									<div class="dropdown-header">Tables</div>
									<a class="dropdown-item" href="#">Basic Tables</a>
									<a class="dropdown-item" href="#">Responsive Table</a>
									<a class="dropdown-item" href="#">Table with Buttons</a>
									<a class="dropdown-item" href="#">Column Search</a>
									<a class="dropdown-item" href="#">Muulti Selection</a>
									
								</div>
							</div>
						</div>
					</li>
				</ul>

				
			</nav>




			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">DataTables Buttons</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Table with Buttons</h5>
									<h6 class="card-subtitle text-muted">This extension provides a framework with common options that can be used with DataTables. See official documentation <a href="https://datatables.net/extensions/buttons/"
										 target="_blank" rel="noopener noreferrer nofollow">here</a>.</h6>
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
									<thead>
											<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone number</th>
<th>Gender</th>
<th>Address</th>
<th>DOB</th>
<th>Blood Group</th>
											</tr>
										</thead>
										
											<tr>
												

<?php
$server="localhost";
$username="root";
$password="";
// $server="sql309.unaux.com";
// $username="unaux_28299464";
// $password="wkdb0xh3";

$con=mysqli_connect($server,$username,$password,"medic");
if(!$con){
    die("connection to this database failed due to" .mysqli_connect_error());
}

$sql="SELECT `first`, `last`, mail,phn,gender,addd,dob,blood from pers ";
$result=$con->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

       echo "<tr><td>".$row["first"]."</td>"."<td>".$row["last"]."</td>".
        "<td>".$row["mail"]."</td>"."<td>".$row["phn"]."</td>".
        "<td>".$row["gender"]."</td>"."<td>".$row["addd"]."</td>".
        "<td>".$row["dob"]."</td>"."<td>".$row["blood"]."</td></tr>";

    }
    echo"</table>";
}
else{
    echo "0 result";
}
$con->close();
?> 
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
							</ul>
						</div>
						<div class="col-6 text-right">
							<p class="mb-0">
								&copy; 2021 - <a href="index.php" class="text-muted">Medi Lab</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables with Buttons
			var datatablesButtons = $("#datatables-buttons").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
		});
	</script>
</body>


</html>