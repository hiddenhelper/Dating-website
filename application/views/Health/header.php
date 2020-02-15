
<!DOCTYPE html>

<html lang="en">


<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Slay | Connect</title>

	<!-- Favicon -->

	<link rel="shortcut icon" href="<?php echo base_url();?>images/fav.png" type="image/x-icon">

	<link rel="icon" href="<?php echo base_url();?>images/fav.png" type="image/x-icon">

	<!-- font-awesome -->

	<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">

	

	<!-- include the site stylesheet -->

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

	<!-- main stylesheet -->

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flaticon.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

	<!-- responsive css -->

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">

	<!-- color css -->

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colors.css">

	

		<!-- Include jQuery -->

	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

	<!-- Bootstrap -->

	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

	<!-- Plugins -->

	<script src="<?php echo base_url();?>assets/js/plugins.js"></script>

	<!-- Googleapis -->

	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP1lPhUhDU6MINpruPDinAzXffRlpzzFo"></script> -->

		<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
	  <script src="https://www.gstatic.com/firebasejs/6.3.0/firebase-app.js"></script>
	  <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
	  <!-- Add Firebase products that you want to use -->
	  <script src="https://www.gstatic.com/firebasejs/6.3.0/firebase-auth.js"></script>
	  <script src="https://www.gstatic.com/firebasejs/6.3.0/firebase-firestore.js"></script>
	  <script src="https://www.gstatic.com/firebasejs/6.3.0/firebase-database.js"></script>

	  <!-- The core Firebase JS SDK is always required and must be listed first -->
	<!-- <script src="https://www.gstatic.com/firebasejs/6.3.0/firebase-app.js"></script> -->

	<!-- TODO: Add SDKs for Firebase products that you want to use
	     https://firebase.google.com/docs/web/setup#config-web-app -->
	<script>
	  // Your web app's Firebase configuration
	  var firebaseConfig = {
	    apiKey: "AIzaSyBBtWg-GB3ghiVDGm6vELqF7sIsvichsw0",
	    authDomain: "slaydatting.firebaseapp.com",
	    databaseURL: "https://slaydatting.firebaseio.com",
	    projectId: "slaydatting",
	    storageBucket: "slaydatting.appspot.com",
	    messagingSenderId: "624587841055",
	    appId: "1:624587841055:web:a25a9fe59cb8980182bf2a"
	  };
	  // Initialize Firebase
	  firebase.initializeApp(firebaseConfig);
	</script>
	<!-- Custom -->

	<script src="<?php echo base_url();?>assets/js/custom.js"></script>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



	

</head>

<body>



	<!-- Loader -->

	<div class="loader_wrapper stl2" id="page-preloader">

		<div class="loader-center">		

			<div class="spinner">

				<div class="heart heart1"></div>

				<div class="heart heart2"></div>

				<div class="heart heart3"></div>

			</div>

		</div>

	</div>





	<div id="wrapper">

		<header class="new-block header">

			<div class="main-nav new-block">

				<div class="overlay"></div>

				<div class="container-fluid pad0">

					<div class="row no-gutters">

						<div class="col-lg-12">

							<div class="logo">

								<a href="<?php echo base_url();?>Welcome/index"><img src="<?php echo base_url();?>images/logo2.png" alt="logo" class="img-responsive"></a>

							</div>

							<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>

					  

                       <?php 
         



                        if($this->session->userdata('logged_in'))
                    {  
                         $user_name= $this->session->userdata()['user_name']; 


                      


                       	?>
  
                        

                       	<div class="nav-block">

								<nav class="nav">

									<ul class="list-unstyled">

										<li class="active  drop"><a href="<?php echo base_url();?>welcome/myaccount">My account</a>

										</li>

										<li><a href="<?php echo base_url();?>welcome/Search_girl">Search</a></li>

									    <li><a href="<?php echo base_url();?>welcome/Gallery">Gallery</a></li>

										<!-- <li><a href="<?php //echo base_url();?>welcome/Blog">Blog</a></li> -->

										<li><a href="<?php echo base_url();?>welcome/Contact_us">Support</a></li>


										<!-- <li><a href="<?php echo base_url();?>welcome/Term_Conditions">T&C</a></li> -->

										<li><a href="<?php echo base_url();?>Home/Logout">Logout</a></li>

                                      
                                         <li><a style="color: red;"><?php echo $user_name;?></a></li>

									</ul>

								</nav>

							</div>

							<?php }
                            else{

							?>


							<div class="nav-block">

								<nav class="nav">

									<ul class="list-unstyled">

										<li class="active  drop"><a href="<?php echo base_url();?>welcome/home">Home</a>

										</li>
										

										
										<li><a href="<?php echo base_url();?>welcome/Search_girl">Search</a></li>

			
                          		        <li><a href="<?php echo base_url();?>welcome/Gallery">Gallery</a></li>

										<!-- <li><a href="<?php //echo base_url();?>welcome/Blog">Blog</a></li> -->

										<li><a href="<?php echo base_url();?>welcome/About_Us">About us</a></li>

										<li><a href="<?php echo base_url();?>welcome/Contact_us">Support</a></li>

										<li><a href="<?php echo base_url();?>welcome/SignUp" >SignUp</a></li>
										<!-- <li><a href="<?php echo base_url();?>welcome/Term_Conditions">T&C</a></li> -->

										<li><a href="<?php echo base_url();?>welcome/Login">Login</a></li>



									</ul>

								</nav>

							</div>

						<?php }?>

		

						</div>

					</div>

				</div>

			</div>

		</header> <!-- header -->