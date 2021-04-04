<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive">
	<meta name="author" content="Bootlab">

	<title>Responsive DataTables | Medi Lab - Admin </title>

	<link rel="canonical" href="tables-datatables-responsive.php" />
	

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

					<h1 class="h3 mb-3">Responsive DataTables</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Responsive DataTables</h5>
									<h6 class="card-subtitle text-muted">Highly flexible tool that many advanced features to any HTML table. See official documentation <a href="https://datatables.net/extensions/responsive/" target="_blank"
										 rel="noopener noreferrer nofollow">here</a>.</h6>
								</div>
								<div class="card-body">
									<table id="datatables-reponsive" class="table table-striped" style="width:100%">
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
										<tbody>
											<!-- <tr>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>
												<td>2011/04/25</td>
												<td>$320,800</td>
											</tr>
											<tr>
												<td>Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>63</td>
												<td>2011/07/25</td>
												<td>$170,750</td>
											</tr>
											<tr>
												<td>Ashton Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>66</td>
												<td>2009/01/12</td>
												<td>$86,000</td>
											</tr>
											<tr>
												<td>Cedric Kelly</td>
												<td>Senior Javascript Developer</td>
												<td>Edinburgh</td>
												<td>22</td>
												<td>2012/03/29</td>
												<td>$433,060</td>
											</tr>
											<tr>
												<td>Airi Satou</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>33</td>
												<td>2008/11/28</td>
												<td>$162,700</td>
											</tr>
											<tr>
												<td>Brielle Williamson</td>
												<td>Integration Specialist</td>
												<td>New York</td>
												<td>61</td>
												<td>2012/12/02</td>
												<td>$372,000</td>
											</tr>
											<tr>
												<td>Herrod Chandler</td>
												<td>Sales Assistant</td>
												<td>San Francisco</td>
												<td>59</td>
												<td>2012/08/06</td>
												<td>$137,500</td>
											</tr>
											<tr>
												<td>Rhona Davidson</td>
												<td>Integration Specialist</td>
												<td>Tokyo</td>
												<td>55</td>
												<td>2010/10/14</td>
												<td>$327,900</td>
											</tr>
											<tr>
												<td>Colleen Hurst</td>
												<td>Javascript Developer</td>
												<td>San Francisco</td>
												<td>39</td>
												<td>2009/09/15</td>
												<td>$205,500</td>
											</tr>
											<tr>
												<td>Sonya Frost</td>
												<td>Software Engineer</td>
												<td>Edinburgh</td>
												<td>23</td>
												<td>2008/12/13</td>
												<td>$103,600</td>
											</tr>
											<tr>
												<td>Jena Gaines</td>
												<td>Office Manager</td>
												<td>London</td>
												<td>30</td>
												<td>2008/12/19</td>
												<td>$90,560</td>
											</tr>
											<tr>
												<td>Quinn Flynn</td>
												<td>Support Lead</td>
												<td>Edinburgh</td>
												<td>22</td>
												<td>2013/03/03</td>
												<td>$342,000</td>
											</tr>
											<tr>
												<td>Charde Marshall</td>
												<td>Regional Director</td>
												<td>San Francisco</td>
												<td>36</td>
												<td>2008/10/16</td>
												<td>$470,600</td>
											</tr>
											<tr>
												<td>Haley Kennedy</td>
												<td>Senior Marketing Designer</td>
												<td>London</td>
												<td>43</td>
												<td>2012/12/18</td>
												<td>$313,500</td>
											</tr>
											<tr>
												<td>Tatyana Fitzpatrick</td>
												<td>Regional Director</td>
												<td>London</td>
												<td>19</td>
												<td>2010/03/17</td>
												<td>$385,750</td>
											</tr>
											<tr>
												<td>Michael Silva</td>
												<td>Marketing Designer</td>
												<td>London</td>
												<td>66</td>
												<td>2012/11/27</td>
												<td>$198,500</td>
											</tr>
											<tr>
												<td>Paul Byrd</td>
												<td>Chief Financial Officer (CFO)</td>
												<td>New York</td>
												<td>64</td>
												<td>2010/06/09</td>
												<td>$725,000</td>
											</tr>
											<tr>
												<td>Gloria Little</td>
												<td>Systems Administrator</td>
												<td>New York</td>
												<td>59</td>
												<td>2009/04/10</td>
												<td>$237,500</td>
											</tr>
											<tr>
												<td>Bradley Greer</td>
												<td>Software Engineer</td>
												<td>London</td>
												<td>41</td>
												<td>2012/10/13</td>
												<td>$132,000</td>
											</tr>
											<tr>
												<td>Dai Rios</td>
												<td>Personnel Lead</td>
												<td>Edinburgh</td>
												<td>35</td>
												<td>2012/09/26</td>
												<td>$217,500</td>
											</tr>
											<tr>
												<td>Jenette Caldwell</td>
												<td>Development Lead</td>
												<td>New York</td>
												<td>30</td>
												<td>2011/09/03</td>
												<td>$345,000</td>
											</tr>
											<tr>
												<td>Yuri Berry</td>
												<td>Chief Marketing Officer (CMO)</td>
												<td>New York</td>
												<td>40</td>
												<td>2009/06/25</td>
												<td>$675,000</td>
											</tr>
											<tr>
												<td>Caesar Vance</td>
												<td>Pre-Sales Support</td>
												<td>New York</td>
												<td>21</td>
												<td>2011/12/12</td>
												<td>$106,450</td>
											</tr>
											<tr>
												<td>Doris Wilder</td>
												<td>Sales Assistant</td>
												<td>Sidney</td>
												<td>23</td>
												<td>2010/09/20</td>
												<td>$85,600</td>
											</tr>
											<tr>
												<td>Angelica Ramos</td>
												<td>Chief Executive Officer (CEO)</td>
												<td>London</td>
												<td>47</td>
												<td>2009/10/09</td>
												<td>$1,200,000</td>
											</tr>
											<tr>
												<td>Gavin Joyce</td>
												<td>Developer</td>
												<td>Edinburgh</td>
												<td>42</td>
												<td>2010/12/22</td>
												<td>$92,575</td>
											</tr>
											<tr>
												<td>Jennifer Chang</td>
												<td>Regional Director</td>
												<td>Singapore</td>
												<td>28</td>
												<td>2010/11/14</td>
												<td>$357,650</td>
											</tr>
											<tr>
												<td>Brenden Wagner</td>
												<td>Software Engineer</td>
												<td>San Francisco</td>
												<td>28</td>
												<td>2011/06/07</td>
												<td>$206,850</td>
											</tr>
											<tr>
												<td>Fiona Green</td>
												<td>Chief Operating Officer (COO)</td>
												<td>San Francisco</td>
												<td>48</td>
												<td>2010/03/11</td>
												<td>$850,000</td>
											</tr>
											<tr>
												<td>Shou Itou</td>
												<td>Regional Marketing</td>
												<td>Tokyo</td>
												<td>20</td>
												<td>2011/08/14</td>
												<td>$163,000</td>
											</tr>
											<tr>
												<td>Michelle House</td>
												<td>Integration Specialist</td>
												<td>Sidney</td>
												<td>37</td>
												<td>2011/06/02</td>
												<td>$95,400</td>
											</tr>
											<tr>
												<td>Suki Burks</td>
												<td>Developer</td>
												<td>London</td>
												<td>53</td>
												<td>2009/10/22</td>
												<td>$114,500</td>
											</tr>
											<tr>
												<td>Prescott Bartlett</td>
												<td>Technical Author</td>
												<td>London</td>
												<td>27</td>
												<td>2011/05/07</td>
												<td>$145,000</td>
											</tr>
											<tr>
												<td>Gavin Cortez</td>
												<td>Team Leader</td>
												<td>San Francisco</td>
												<td>22</td>
												<td>2008/10/26</td>
												<td>$235,500</td>
											</tr>
											<tr>
												<td>Martena Mccray</td>
												<td>Post-Sales support</td>
												<td>Edinburgh</td>
												<td>46</td>
												<td>2011/03/09</td>
												<td>$324,050</td>
											</tr>
											<tr>
												<td>Unity Butler</td>
												<td>Marketing Designer</td>
												<td>San Francisco</td>
												<td>47</td>
												<td>2009/12/09</td>
												<td>$85,675</td>
											</tr>
											<tr>
												<td>Howard Hatfield</td>
												<td>Office Manager</td>
												<td>San Francisco</td>
												<td>51</td>
												<td>2008/12/16</td>
												<td>$164,500</td>
											</tr>
											<tr>
												<td>Hope Fuentes</td>
												<td>Secretary</td>
												<td>San Francisco</td>
												<td>41</td>
												<td>2010/02/12</td>
												<td>$109,850</td>
											</tr>
											<tr>
												<td>Vivian Harrell</td>
												<td>Financial Controller</td>
												<td>San Francisco</td>
												<td>62</td>
												<td>2009/02/14</td>
												<td>$452,500</td>
											</tr>
											<tr>
												<td>Timothy Mooney</td>
												<td>Office Manager</td>
												<td>London</td>
												<td>37</td>
												<td>2008/12/11</td>
												<td>$136,200</td>
											</tr>
											<tr>
												<td>Jackson Bradshaw</td>
												<td>Director</td>
												<td>New York</td>
												<td>65</td>
												<td>2008/09/26</td>
												<td>$645,750</td>
											</tr>
											<tr>
												<td>Olivia Liang</td>
												<td>Support Engineer</td>
												<td>Singapore</td>
												<td>64</td>
												<td>2011/02/03</td>
												<td>$234,500</td>
											</tr>
											<tr>
												<td>Bruno Nash</td>
												<td>Software Engineer</td>
												<td>London</td>
												<td>38</td>
												<td>2011/05/03</td>
												<td>$163,500</td>
											</tr>
											<tr>
												<td>Sakura Yamamoto</td>
												<td>Support Engineer</td>
												<td>Tokyo</td>
												<td>37</td>
												<td>2009/08/19</td>
												<td>$139,575</td>
											</tr>
											<tr>
												<td>Thor Walton</td>
												<td>Developer</td>
												<td>New York</td>
												<td>61</td>
												<td>2013/08/11</td>
												<td>$98,540</td>
											</tr>
											<tr>
												<td>Finn Camacho</td>
												<td>Support Engineer</td>
												<td>San Francisco</td>
												<td>47</td>
												<td>2009/07/07</td>
												<td>$87,500</td>
											</tr>
											<tr>
												<td>Serge Baldwin</td>
												<td>Data Coordinator</td>
												<td>Singapore</td>
												<td>64</td>
												<td>2012/04/09</td>
												<td>$138,575</td>
											</tr>
											<tr>
												<td>Zenaida Frank</td>
												<td>Software Engineer</td>
												<td>New York</td>
												<td>63</td>
												<td>2010/01/04</td>
												<td>$125,250</td>
											</tr>
											<tr>
												<td>Zorita Serrano</td>
												<td>Software Engineer</td>
												<td>San Francisco</td>
												<td>56</td>
												<td>2012/06/01</td>
												<td>$115,000</td>
											</tr>
											<tr>
												<td>Jennifer Acosta</td>
												<td>Junior Javascript Developer</td>
												<td>Edinburgh</td>
												<td>43</td>
												<td>2013/02/01</td>
												<td>$75,650</td>
											</tr>
											<tr>
												<td>Cara Stevens</td>
												<td>Sales Assistant</td>
												<td>New York</td>
												<td>46</td>
												<td>2011/12/06</td>
												<td>$145,600</td>
											</tr>
											<tr>
												<td>Hermione Butler</td>
												<td>Regional Director</td>
												<td>London</td>
												<td>47</td>
												<td>2011/03/21</td>
												<td>$356,250</td>
											</tr>
											<tr>
												<td>Lael Greer</td>
												<td>Systems Administrator</td>
												<td>London</td>
												<td>21</td>
												<td>2009/02/27</td>
												<td>$103,500</td>
											</tr>
											<tr>
												<td>Jonas Alexander</td>
												<td>Developer</td>
												<td>San Francisco</td>
												<td>30</td>
												<td>2010/07/14</td>
												<td>$86,500</td>
											</tr>
											<tr>
												<td>Shad Decker</td>
												<td>Regional Director</td>
												<td>Edinburgh</td>
												<td>51</td>
												<td>2008/11/13</td>
												<td>$183,000</td>
											</tr>
											<tr>
												<td>Michael Bruce</td>
												<td>Javascript Developer</td>
												<td>Singapore</td>
												<td>29</td>
												<td>2011/06/27</td>
												<td>$183,000</td>
											</tr>
											<tr>
												<td>Donna Snider</td>
												<td>Customer Support</td>
												<td>New York</td>
												<td>27</td>
												<td>2011/01/25</td>
												<td>$112,000</td> -->

												

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
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				responsive: true
			});
		});
	</script>
</body>


</html>