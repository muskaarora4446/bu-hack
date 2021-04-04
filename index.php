

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' id='desktop-css'  href='./desktop.min3ec8.css?ver=1.1.6' type='text/css' media='all' />


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />



<!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


<!--  Main CSS File -->
  <link href="assets/css/lul.css" rel="stylesheet">


<link rel='stylesheet' id='fonts-css'  href='../wp-content/themes/zorka/fonts/stylesheet3ec8.css' type='text/css' media='all' />
<link rel='stylesheet' id='desktop-css'  href='../wp-content/themes/zorka/css/desktop.min3ec8.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='../wp-includes/css/dist/block-library/style.mine23c.css?ver=5.7' type='text/css' media='all' />
<link rel="stylesheet" href="css.css">
<body>


<!-- modal -->
<div class="w3-container">

<!-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-red w3-large">Login</button>
 -->
<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-red w3-xlarge w3-display-topright">&times;</span>
   <h2></h2>
  </header>
  <div class="row">
  <div class="w3-bar w3-border-bottom col-6">
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'London')">Patient</button>
   </div>
   <div class="w3-bar w3-border-bottom col-6">
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'Tokyo')">Admin</button>
  </div>
</div>
  <div id="London" class="w3-container city">
  
   <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
  <form class="w3-container">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
          <div class="row">
          <div class="col-6">
          <button class="w3-button w3-block w3-red w3-section w3-padding " type="submit"><a class="to" href="./Patient/index.php">Login</a></button>
          </div>
          <div class="col-6">
         <button href="" class="w3-button w3-block w3-red w3-section w3-padding " type="submit" ><a class="to" href="form.php
         ">Sign-Up</a></button>
          </div>
          </div>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>
  </div>

 <!--  <div id="Paris" class="w3-container city">
   <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="Avatars-23-256.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
  <form class="w3-container" action="">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <div class="row">
          <div class="col">
          <button class="w3-button w3-block w3-red w3-section w3-padding " type="submit">Login</button>
          </div> -->
<!--           <div class="col-6">
          <button class="w3-button w3-block w3-red w3-section w3-padding " type="submit">Sign-Up</button>
          </div> -->
          <!-- </div>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>
  </div> -->
 

  <div id="Tokyo" class="w3-container city">
    <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="img_avatar-png-6.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
   <form class="w3-container" action="./appstack.bootlab.io/tables-datatables-responsive.php
   ">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
         <div class="row">
          <div class="col">
          <button class="w3-button w3-block w3-red w3-section w3-padding " type="submit">Login</button>
          </div>
         <!--  <div class="col-6">
          <button class="w3-button w3-block w3-red w3-section w3-padding " type="submit">Sign-Up</button>
          </div> -->
          </div>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>
  </div>

  <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>
 </div>
</div>

</div>
<!-- modal end -->

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="top: 0px;">

    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Medilab</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          
          
          <li><a class="nav-link scrollto" href="#about">About-Us</a></li>
          <li><a class="nav-link scrollto" href="#counts">Departments</a></li>
    
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"  onclick="document.getElementById('id01').style.display='block'"><span class="d-none d-md-inline">Login</span> </a>

    </div>
  </header> <!-- End Header-->





<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <!-- <h1>Welcome to Medilab</h1> -->
     
      
    
  

<section class="section section_bot">
 
  <div class="section_bot__row">
      <div class="section_bot__col-1">
         
      </div>
      <div class="section_bot__col-2">
          <div class="bot" data-bot-current-step="1">
              <div class="bot__top">
                  <div class="p2 bot__header">Medi Bot</div>
                  <div class="p2u bot__subheader">
                      Interactive Healthcare assistant
                  </div>
              </div>
              <div class="bot__content">
                  <div class="bot__messages">
                      <div class="bot__step bot__step_1 bot__step_initial">
                          <div class="p1 bot__message bot__message_bot">
                              Hi there! My name’s Medi Bot. Let me take a moment to show you what I can do.
                          </div>
                      </div>
                      <div class="bot__step bot__step_2">
                          <div class="p1 bot__message bot__message_user">
                              Sure
                          </div>
                      </div>
                      <div class="bot__step bot__step_2" data-bot-delay="0.4">
                          <div class="p1 bot__message bot__message_bot">
                              Have you heard about  yet? Medilab is a patient-doctor interface which provides you with various features. Book appointments online, Manage all your prescriptions, Save all you reports, Have online check-up sessions with Doctors.
                          </div>
                      </div>
                      <div class="bot__step bot__step_3">
                          <div class="p1 bot__message bot__message_user">
                              Continue
                          </div>
                      </div>
                      <div class="bot__step bot__step_3" data-bot-delay="0.4">
                          <div class="p1 bot__message bot__message_bot">
                              All right, mate! Here’s what we will do. I’ll ask you a couple of questions to better assist you. We save all your necessary medical information that can be useful in times of accidents.
                          </div>
                      </div>
                      <div class="bot__step bot__step_4">
                          <div class="p1 bot__message bot__message_user">
                              Start test
                          </div>
                      </div>
                      <div class="bot__step bot__step_4" data-bot-delay="0.4">
                          <div class="p1 bot__message bot__message_bot">
                              What is your Medical need most at the moment? You can choose several options
                          </div>
                      </div>
                      <div class="bot__step bot__step_4">
                          <div class="p3u bot__options">
                              <a class="bot__option" href="#" data-bot-option-value="&lt;a href=../../index.php data-show-page=&quot;service-05&quot;&gt;Login or Sign-Up&lt;/a&gt;" style="color:black;">View your Medical Reports</a>
                              <a class="bot__option" href="#" data-bot-option-value="&lt;a href=../../index.php data-show-page=&quot;service-02&quot;&gt;Managing Prescriptions with us&lt;/a&gt;" style="color:black;">View all your Prescription</a>
                              <a class="bot__option" href="#" data-bot-option-value="&lt;a href=../../index.php data-show-page=&quot;service-06&quot;&gt;Joining us &lt;/a&gt;" style="color:black;">Manage your appointments with doctor</a>
                              <a class="bot__option" href="#" data-bot-option-value="&lt;a href=../../index.php data-show-page=&quot;service-04&quot;&gt;Registering with us&lt;/a&gt;" style="color:black;">Interact With the Doctor</a>
                              <a class="bot__option" href="#" data-bot-option-value="&lt;a href=../../index.php data-show-page=&quot;service-03&quot;&gt;Login would be the best suited for you&lt;/a&gt;" style="color:black;">Manage and view your Health Insurance</a>
                          </div>
                      </div>
                      <div class="bot__step bot__step_5">
                          <div class="p1 bot__message bot__message_user" data-bot-template>
                              <span class="bot__answer_texts"></span>
                          </div>
                      </div>
                      <div class="bot__step bot__step_5" data-bot-delay="0.4">
                          <div class="p1 bot__message bot__message_bot bot__message_singular">
                              Gocha! Then, <span class="bot__answer_values"></span> is clearly your choice, mate!
                          </div>
                          <div class="p1 bot__message bot__message_bot bot__message_plural">
                              Gocha! Then, <span class="bot__answer_values"></span> are clearly your Best options, mate!
                          </div>
                      </div>
                      <div class="bot__step bot__step_5" data-bot-delay="1">
                          <div class="p1 bot__message bot__message_bot">
                              One more thing. I'd be happy to put you through Our Login-Signup Page to help you managing all your Medical needs in one place.
                          </div>
                      </div>
                  </div>
              </div>
              <div class="bot__bottom">
                  <div class="bot__step bot__step_1 bot__step_initial">
                      <a class="p1u bot__btn" href="#" data-bot-show-step="2"><span>Sure</span></a>
                  </div>
                  <div class="bot__step bot__step_2">
                      <a class="p1u bot__btn" href="#" data-bot-show-step="3"><span>Continue</span></a>
                  </div>
                  <div class="bot__step bot__step_3">
                      <a class="p1u bot__btn" href="#" data-bot-show-step="4"><span>Start test</span></a>
                  </div>
                  <div class="bot__step bot__step_4">
                      <a class="p1u bot__btn" href="#" data-bot-show-step="5" data-bot-require-options="1"><span>Done</span></a>
                  </div>
                  <div class="bot__step bot__step_5">
                      <a onclick="document.getElementById('id01').style.display='block'" class="p1u bot__btn" href="#" data-bot-connect="true"><span>Connect</span>
                      
                      </a>
                   
                      <div class="p2u bot__extra">
                          Or <a href="#" data-bot-restart="true">restart Zorka bot</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

<div class="div">
  <span id="L" class="span">M</span>
  <span id="I" class="span">E</span>
  <span id="G" class="span">D</span>
  <span id="H" class="span">I</span>
  <span id="T" class="span">L</span>
  <span id="I" class="span">A</span>
  <span id="T" class="span">B</span>
</div>

<img src="6301.png" class="koi">

</section>
</div>
</section>






<hr>


<!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="../img/ about.jpg"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>ABOUT US</h3>
            <p>OUR AND HEALTH OF OUR CLOSE ONES HAVE ALWAYS BEEN A CONFERN FOR US. Now at Medilab we provide you a platform to ensure the health and hapiness of all your loved ones, all you have to do is to take out a few minutes and REGISTER</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Fully Digitalized Record Maintainence</a></h4>
              <p class="description">Medilab has a sole aim of digitalizing all the medical paperwork, from reports to precriptions and appointments to Health Insurance</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Lifesaver during Accidents</a></h4>
              <p class="description">Medilab stores your biometric data and in case of any anomaly, the data can be used for identification perposes and treatment can be started due to availability of all the necessary documents</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">One solution for all your medical problems</a></h4>
              <p class="description">We save your Insurance, Biometrics, Personal details, Medical Historyall in one place and provide you realtime interaction with Doctors</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
<hr>
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter" style="color:black;"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

<hr>
<!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
  
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    <p class="fst-italic">Cardiology is the study and treatment of disorders of the heart and the blood vessels. </p>
                    <p>A person with heart disease or cardiovascular disease may be referred to a cardiologist. Cardiology is a branch of internal medicine. A cardiologist is not the same as a cardiac surgeon.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Neurology</h3>
                    <p class="fst-italic">Neurology is the branch of medicine concerned with the study and treatment of disorders of the nervous system.</p>
                    <p>The nervous system is a complex, sophisticated system that regulates and coordinates body activities. It has two major divisions: Central nervous system: the brain and spinal cord.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hepatology</h3>
                    <p class="fst-italic">Hepatology is the branch of medicine that incorporates the study of liver, gallbladder, biliary tree, and pancreas as well as management of their disorders.</p>
                    <p>Although traditionally considered a sub-specialty of gastroenterology, rapid expansion has led in some countries to doctors specializing solely on this area, who are called hepatologists.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pediatrics</h3>
                    <p class="fst-italic">Pediatrics is the branch of medicine that involves the medical care of infants, children, and adolescents.</p>
                    <p>The American Academy of Pediatrics recommends people be under pediatric care through the age of 21. In the United Kingdom, pediatrics covers patients until age 18. Pediatrics is the branch of medicine that involves the medical care of infants, children, and adolescents. The American Academy of Pediatrics recommends people be under pediatric care through the age of 21. In the United Kingdom, pediatrics covers patients until age 18.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Eye Care</h3>
                    <p class="fst-italic">An eye care professional is an individual who provides a service related to the eyes or vision. </p>
                    <p>It is any healthcare worker involved in eye care, from one with a small amount of post-secondary training to practitioners with a doctoral level of education.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
<!-- End Departments Section -->

<hr>

<!-- contact-us -->

<section class="contact-us" id="contact">
        <div class="identity-overlay">
            <div class="container">
                <h1 class="display-4 text-center pt-3 text-light aos-init aos-animate" data-aos="fade-up"><span class="theme"><strong>Contact</strong></span>
                    <strong>Us</strong></h1>
                <div class="contact-content row">
                    <div class="form-contact my-5 col-12 col-lg-8">
                        <h4 class="text-light">The journey transcending limits. Get aboard because the arduous and beautiful voyage is about to begin and Frosh is all ears. <strong class="theme">Feel free to contact.</strong></h4>
                        <form class="mt-3" method="GET" action="">

                            <div class="form-group">
                                <input type="text" class="" placeholder="Name" name="name" required="">
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="" placeholder="Email" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="" placeholder="Subject" name="subject" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="" rows="16" cols="50" placeholder="Write message here!" name="message" required=""></textarea>
                            </div>
                            <div class="text-center">
                                <button class="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="reach col-12 col-lg-4  my-5">
                        <h4 class="text-light">Contact<span class="theme"><strong> Information</strong></span>!</h4>
                        <h4 class="text-light mt-3">WHERE TO FIND US</h4>
                            <p class="lead text-light">
                               <!--  Thapar Institute of Engineering &amp; Technology<br> Patiala - 147004, Punjab -->
                            </p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14031.836770367425!2d77.5841978!3d28.4506465!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ba6bedc9a2b537f!2sBennett%20University%20(Times%20of%20India%20Group)!5e0!3m2!1sen!2sin!4v1617391799895!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <p class="lead text-light">Mail us at <br><strong><span class="theme">@gmail.com</span></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- contact-us -->


<!-- footer -->






  <div class="main-footer ">
    <div class="main-footer__inner">

        <section  class="section section_hello" data-hello-step="1">
    <div class="section_hello__block section_hello__block_form">
        <div class="h0 section_hello__header">
            Say hello
        </div>
        <div class="section_hello__top">
            <form class="section_hello__steps" method="post" action="https://zorka.agency/wp-json/zorka/v1/hello" novalidate>
                <div class="section_hello__step section_hello__step-1">
                    <input class="p1 input with-placeholder" type="text" name="name" placeholder="Type your full name here">
                    <div class="p3u section_hello__error"></div>
                </div>
                <div class="section_hello__step section_hello__step-2">
                    <input class="p1 input with-placeholder" type="text" name="company" placeholder="Type your company name here">
                    <div class="p3u section_hello__error"></div>
                </div>
                <div class="section_hello__step section_hello__step-3">
                    <input class="p1 input with-placeholder" type="email" name="email" placeholder="Type your e-mail here">
                    <div class="p3u section_hello__error"></div>
                </div>
                <div class="section_hello__step section_hello__step-4">
                    <div class="custom-select" data-custom-select-default-value="How did you hear about us?">
                        <input class="input" type="hidden" name="how">
                        <a class="p1 custom-select__value" href="#">How did you hear about us?</a>
                        <div class="p2u custom-select__options">
                            <a class="custom-select__option" href="#" data-custom-select-value="1">Social Networks</a>
                            <a class="custom-select__option" href="#" data-custom-select-value="2">Web Search</a>
                            <a class="custom-select__option" href="#" data-custom-select-value="3">Word of Mouth</a>
                            <a class="custom-select__option" href="#" data-custom-select-value="4">Online Advertising</a>
                            <a class="custom-select__option" href="#" data-custom-select-value="5">Conferences</a>
                            <a class="custom-select__option" href="#" data-custom-select-value="6">Media Sources</a>
                        </div>
                    </div>
                    <div class="p3u section_hello__error"></div>
                </div>
                <div class="section_hello__step section_hello__step-5">
                    <textarea class="p1 input with-placeholder" name="goals" rows="1" placeholder="What are your strategic goals, plans & KPIs?"></textarea>
                    <div class="p3u section_hello__error"></div>
                </div>
            </form>
        </div>
        <div class="section_hello__bottom">
            <a class="p2u section_hello__back" href="#">Back</a>
            <div class="section_hello__dots">
                <div class="section_hello__dot"><div class="section_hello__dot-inner"></div></div>
                <div class="section_hello__dot"><div class="section_hello__dot-inner"></div></div>
                <div class="section_hello__dot"><div class="section_hello__dot-inner"></div></div>
                <div class="section_hello__dot"><div class="section_hello__dot-inner"></div></div>
                <div class="section_hello__dot"><div class="section_hello__dot-inner"></div></div>
            </div>
            <div class="glue btn-air btn-air__step-next">
                <a class="glue__circle btn-air__circle" href="#">
                    <div class="btn-air__circle-bg"></div>
                    <div class="p3u glue__circle-inner btn-air__circle-inner">
                        <div class="btn-air__text-next">Next step</div>
                        <div class="btn-air__text-send">Send</div>
                        <div class="btn-air__text-sending">Sending...</div>
                    </div>
                </a>
            </div>
            <div class="p3u section_hello__terms">
                By clicking send, you agree to our <a href="../../privacy/index.php" data-show-page="privacy">privacy policy</a> and <a href="../../terms/index.php" data-show-page="terms">terms&conditions</a>
            </div>
        </div>
    </div>
    <div class="section_hello__block section_hello__block_success">
        <div class="h0 section_hello__header">
            Got it!
        </div>
        <div class="h4 section_hello__text">
            Thank you for contacting Zorka.Agency! We will get in touch with you shortly.
        </div>
    </div>
</section>        <section  class="section section_bottom">
            <div class="p3u under section_bottom__row">
                <!-- <div class="section_bottom__col-1">
                    <a href="#" data-scroll="top">Go to top</a>
                </div> -->
                <div class="section_bottom__col-2">
                    <div class="common-row">
                        <div class="common-col">
                            <a href="https://www.linkedin.com" target="_blank" data-event="footer_linkedin">LinkedIn</a>
                        </div>
                        <div class="common-col">
                            <a href="https://www.youtube.com" target="_blank" data-event="footer_youtube">YouTube</a>
                        </div>
                        <div class="common-col">
                            <a href="https://www.instagram.com" target="_blank" data-event="footer_instagram">Instagram</a>
                        </div>
                        <div class="common-col">
                            <a href="https://www.facebook.com" target="_blank" data-event="footer_facebook">Facebook</a>
                        </div>
                        <div class="common-col">
                            <a href="https://twitter.com" target="_blank" data-event="footer_twitter">Twitter</a>
                        </div>
                    </div>
                </div>
                <div class="section_bottom__col-3">
                    <div class="common-row">
                        <div class="common-col">
                            <div class="section_bottom__partner-clutch"></div>
                        </div>
                        <div class="common-col">
                            <div class="section_bottom__partner-fb"></div>
                        </div>
                    </div>h
                </div>
            </div>
            <div class="p3u under section_bottom__row2">
                <div class="section_bottom__col2-1">
                    &copy;2021 Medi Lab
                </div>
                                <!-- <div class="section_bottom__col2-2">
                    <a href="../../wp-content/uploads/2021/03/21_ZA_Mediakit_LQ.pdf" target="_blank" data-event="footer_mediakit">Download mediakit</a>
                </div>
                                <div class="section_bottom__col2-3">
                    <div class="common-row">
                        <div class="common-col">
                            <a href="../../terms/index.php" data-show-page="terms">Terms&conditions</a>
                        </div>
                        <div class="common-col">
                            <a href="../../privacy/index.php" data-show-page="privacy">Privacy Policy</a>
                        </div>
                    </div>
                </div> -->
                <div class="section_bottom__col2-4">
                    <a href="mailto:info@zorka.agency" data-event="footer_email">info@Medi Lab</a>
                </div>
            </div>
        </section>
    </div>
</div></div>
    </div>









                    

        <script type='text/javascript' src='./js/desktop.min3ec8.js?ver=1.1.6' id='desktop-js'></script>





















<!-- modal js -->
<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>
 

<!--  Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    function Login() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>

<!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>



</body>
</html> 
