<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive">
	<meta name="author" content="Bootlab">

	<title>Tables | Medi Lab - Admin </title>

	<link rel="canonical" href="tables-bootstrap.php" />
	
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
         <!--  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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

					<h1 class="h3 mb-3">Tables</h1>

					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic Table</h5>
									<h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
								</div>
								<table class="table">
									<thead>
										<tr>
											<th style="width:40%;">Name</th>
											<th style="width:25%">Phone Number</th>
											<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Ashley Briggs</td>
											<td>864-348-0485</td>
											<td class="d-none d-md-table-cell">June 21, 1961</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Carl Jenkins</td>
											<td>914-939-2458</td>
											<td class="d-none d-md-table-cell">May 15, 1948</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Bertha Martin</td>
											<td>704-993-5435</td>
											<td class="d-none d-md-table-cell">September 14, 1965</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Stacie Hall</td>
											<td>765-382-8195</td>
											<td class="d-none d-md-table-cell">April 2, 1971</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Amanda Jones</td>
											<td>202-672-1407</td>
											<td class="d-none d-md-table-cell">October 12, 1966</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Striped Rows</h5>
									<h6 class="card-subtitle text-muted">Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</h6>
								</div>
								<table class="table table-striped">
									<thead>
										<tr>
											<th style="width:40%;">Name</th>
											<th style="width:25%">Phone Number</th>
											<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Ashley Briggs</td>
											<td>864-348-0485</td>
											<td class="d-none d-md-table-cell">June 21, 1961</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Carl Jenkins</td>
											<td>914-939-2458</td>
											<td class="d-none d-md-table-cell">May 15, 1948</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Bertha Martin</td>
											<td>704-993-5435</td>
											<td class="d-none d-md-table-cell">September 14, 1965</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Stacie Hall</td>
											<td>765-382-8195</td>
											<td class="d-none d-md-table-cell">April 2, 1971</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Amanda Jones</td>
											<td>202-672-1407</td>
											<td class="d-none d-md-table-cell">October 12, 1966</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Condensed Table</h5>
									<h6 class="card-subtitle text-muted">Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.</h6>
								</div>
								<table class="table table-striped table-sm">
									<thead>
										<tr>
											<th>Operation System</th>
											<th class="text-right">Users</th>
											<th class="text-right">Share</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Windows</td>
											<td class="text-right">8.232</td>
											<td class="text-right">40%</td>
										</tr>
										<tr>
											<td>Mac OS</td>
											<td class="text-right">3.322</td>
											<td class="text-right">20%</td>
										</tr>
										<tr>
											<td>Linux</td>
											<td class="text-right">4.232</td>
											<td class="text-right">34%</td>
										</tr>
										<tr>
											<td>FreeBSD</td>
											<td class="text-right">1.121</td>
											<td class="text-right">12%</td>
										</tr>
										<tr>
											<td>Chrome OS</td>
											<td class="text-right">1.331</td>
											<td class="text-right">15%</td>
										</tr>
										<tr>
											<td>Android</td>
											<td class="text-right">2.301</td>
											<td class="text-right">20%</td>
										</tr>
										<tr>
											<td>iOS</td>
											<td class="text-right">1.162</td>
											<td class="text-right">14%</td>
										</tr>
										<tr>
											<td>Windows Phone</td>
											<td class="text-right">562</td>
											<td class="text-right">7%</td>
										</tr>
										<tr>
											<td>Other</td>
											<td class="text-right">1.181</td>
											<td class="text-right">14%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Hoverable Rows</h5>
									<h6 class="card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</h6>
								</div>
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Phone Number</th>
											<th>Date of Birth</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="img/avatars/avatar-5.jpg" width="48" height="48" class="rounded-circle mr-2" alt="Avatar"> Ashley Briggs
											</td>
											<td>864-348-0485</td>
											<td>June 21, 1961</td>
										</tr>
										<tr>
											<td>
												<img src="img/avatars/avatar-2.jpg" width="48" height="48" class="rounded-circle mr-2" alt="Avatar"> Carl Jenkins
											</td>
											<td>914-939-2458</td>
											<td>May 15, 1948</td>
										</tr>
										<tr>
											<td>
												<img src="img/avatars/avatar-3.jpg" width="48" height="48" class="rounded-circle mr-2" alt="Avatar"> Bertha Martin
											</td>
											<td>704-993-5435</td>
											<td>September 14, 1965</td>
										</tr>
										<tr>
											<td>
												<img src="img/avatars/avatar-4.jpg" width="48" height="48" class="rounded-circle mr-2" alt="Avatar"> Stacie Hall
											</td>
											<td>765-382-8195</td>
											<td>April 2, 1971</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Bordered Table</h5>
									<h6 class="card-subtitle text-muted">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</h6>
								</div>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width:40%;">Name</th>
											<th style="width:25%">Phone Number</th>
											<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Ashley Briggs</td>
											<td>864-348-0485</td>
											<td class="d-none d-md-table-cell">June 21, 1961</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Carl Jenkins</td>
											<td>914-939-2458</td>
											<td class="d-none d-md-table-cell">May 15, 1948</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Bertha Martin</td>
											<td>704-993-5435</td>
											<td class="d-none d-md-table-cell">September 14, 1965</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Stacie Hall</td>
											<td>765-382-8195</td>
											<td class="d-none d-md-table-cell">April 2, 1971</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Amanda Jones</td>
											<td>202-672-1407</td>
											<td class="d-none d-md-table-cell">October 12, 1966</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Contextual Classes</h5>
									<h6 class="card-subtitle text-muted">Use contextual classes to color table rows or individual cells.</h6>
								</div>
								<table class="table">
									<thead>
										<tr>
											<th style="width:40%;">Name</th>
											<th style="width:25%">Phone Number</th>
											<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Ashley Briggs</td>
											<td>864-348-0485</td>
											<td class="d-none d-md-table-cell">June 21, 1961</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr class="table-primary">
											<td>Carl Jenkins</td>
											<td>914-939-2458</td>
											<td class="d-none d-md-table-cell">May 15, 1948</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Bertha Martin</td>
											<td>704-993-5435</td>
											<td class="d-none d-md-table-cell">September 14, 1965</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr class="table-success">
											<td>Stacie Hall</td>
											<td>765-382-8195</td>
											<td class="d-none d-md-table-cell">April 2, 1971</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Amanda Jones</td>
											<td>202-672-1407</td>
											<td class="d-none d-md-table-cell">October 12, 1966</td>
											<td class="table-action">
												<a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Always responsive</h5>
									<h6 class="card-subtitle text-muted">Across every breakpoint, use <code>.table-responsive</code> for horizontally scrolling tables.</h6>
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
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

</body>


</html>