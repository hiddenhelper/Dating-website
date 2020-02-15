
		<section class="send-note new-block pdtb-100">

			<form  action="<?php echo base_url();?>Home/user_login_process" method="post">

				<div class="container">

					<div class="row">

						<div class="col-lg-12">

							<div class="title2">

								<h4 colspan="2"><?php echo @$error; ?></h4>

								<h2 class="fz35">Login</h2>

								<div class="clearfix"></div>

								<p class="fz20">100% Free Online Dating in India<br></p>

							</div>



							<div class="clearfix"></div>

						</div>

						<div class="col-lg-6 col-md-6">

							<div class="form-group">

								<input type="text" class="form-control" name="user_email" id="user_email" placeholder="Enter your User name">
								<p class="email-error" style="color: red"></p>

							</div>	

						</div>

						<div class="col-lg-6 col-md-6">

							<div class="form-group">

								<input type="password" class="form-control" name="user_pass" id="user_pass"placeholder="Enter your password">
								<p class="user_pass-error" style="color: red"></p>

							</div>	

						</div>

						<div class="col-lg-12">

							<div class="form-group text-center">


								<input type="submit"  name="login" class="c-btn bubbly-button btn1" value="Login"> 

							</div>	

						</div>

					</div>

				</div>

			</form>

		</section>

		

		

	</div>

	

	<!-- Include jQuery -->

	<script src="js/jquery.min.js"></script>

	<!-- Bootstrap -->

	<script src="js/bootstrap.min.js"></script>

	<!-- Plugins -->

	<script src="js/plugins.js"></script>

	<!-- Googleapis -->

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP1lPhUhDU6MINpruPDinAzXffRlpzzFo"></script>

	<!-- Custom -->

	<script src="js/custom.js"></script>



</body>



<!-- Mirrored from www.rewebso.com/html/lamour_html/contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 11:06:10 GMT -->

</html>
<!-- <script type="text/javascript">
	var main = function() {
  $('form').submit(function() {
  
    var user_email = $('#user_email').val();
    var user_pass = $('#user_pass').val();

    
   
    if(user_email === "") {
      $('.email-error').text('Please enter your first name.')
    }
     if(user_pass === "") {
      $('.user_pass-error').text('Please enter your Password name.')
    }
    return false;
  });
  
 /* $('form').submit(function() {
    var user_mobile = $('#user_mobile').val();
    
    if(user_mobile === "") {
      $('.user_mobile-error').text('Please enter your mobile name.')
    }

    return false;
  });
  

  
  $('form').submit(function() {
    var user_pass = $('#user_pass').val();
    
    if(user_pass === "") {
      $('.user_pass-error').text('Please enter a password.')
    };
    
    if( user_pass.length < 8 && user_pass.length > 1){
    	$('.user_pass-error').text('Short passwords are easy to guess. Try one with at least 8 characters.')
    }

    return false;
  });
  */
  
}

$(document).ready(main);
</script> -->