
<section class="send-note new-block pdtb-100">
   <form  action="<?php echo base_url();?>Home/register"  method="post">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="title2">
                  <h4 colspan="2"><?php echo @$error; ?></h4>
                  <h2 class="fz35">SignUp For Free</h2>
                  <div class="clearfix"></div>
                  <p class="fz20">100% Free Online Dating in India<br></p>
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control"  name="user_name" placeholder="Enter your user name">
                 <p class="first-name-error" style="color: red"></p>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="form-group">
                  <input type="text" class="form-control" id="user_email" name="user_email" id="user_email"   placeholder="Enter your email">
                 <p class="email-error" style="color: red"></p>
               </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="form-group">
                  <input type="number" class="form-control" name="user_mobile" id="user_mobile"  placeholder="Enter your Mobile number">
                  <p class="user_mobile-error" style="color: red"></p>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="form-group">
                  <input type="number" class="form-control" name="age" id="age" placeholder="Enter your Age">
                  <p class="age-error" style="color: red"></p>
               </div>
            </div>
          </div>
            <div class="col-lg-6 col-md-6">
               <div class="form-group">
                  <input type="password" class="form-control" id="user_pass"  name="user_pass"  placeholder="Enter your password">
                  <p class="user_pass-error" style="color: red"></p>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="form-group">
                  <select class="form-control" name="gender" id="gender">
                     <option value="" selected>Choose Your Gender</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                  </select>
               </div>
            </div>
            <div class="col-md-6 city" style="margin-top: 5%;float: inherit;">
               <div class="form-group">
               		<select class="form-control js-example-tags"  name="city">
               			<option value="">Select City</option>
               			<?php if(count($cities))
               			{
               				foreach ($cities as $key => $v) {
               					echo "<option value='{$v['city_id']}'>{$v['city_name']}</option>";
               				}
               			}
               			?>
               		</select>
                  <p class="user_pass-city" style="color: red"></p>
               </div>
            </div>
            
            <p class="gender-error" style="color: red"></p>
            <div class="col-lg-12">
               <div class="form-group text-center">
                  <input type="submit"  name="register" class="c-btn bubbly-button btn1" value="Signup">  
               </div>
            </div>
         </div>
      </div>
   </form>
</section>
</div>
<!-- Include jQuery -->
<!-- <script src="js/jquery.min.js"></script> -->
<!-- Bootstrap -->
<!-- <script src="js/bootstrap.min.js"></script> -->
<!-- Plugins -->
<!-- <script src="js/plugins.js"></script> -->
<!-- Googleapis -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP1lPhUhDU6MINpruPDinAzXffRlpzzFo"></script> -->
<!-- Custom -->
<!-- <script src="js/custom.js"></script> -->
<!-- <script type="text/javascript" src="js/validation.js"></script> -->
</body>
<!-- Mirrored from www.rewebso.com/html/lamour_html/contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 11:06:10 GMT -->
</html>

<link href="<?php echo base_url();?>assets/css/select2.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/select2.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.full.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.full.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.js"></script>
<script type="text/javascript">
   $(".js-example-tags").select2({
     tags: true
   });
</script>
<!-- <script type="text/javascript">
   var main = function() {
    $('form').submit(function() {
      var user_name = $('#user_name').val();
      var user_email = $('#user_email').val();
      var user_mobile = $('#user_mobile').val();
      var age = $('#user_mobile').val();
      var user_pass = $('#user_mobile').val();
      var gender = $('#gender').val();
      
      if(user_name === "") {
        $('.first-name-error').text('Please enter your first name.')
      }
      if(user_email === "") {
        $('.email-error').text('Please enter your first name.')
      }
       if(user_mobile === "") {
        $('.user_mobile-error').text('Please enter your Mobile name.')
      }
       if(age === "") {
        $('.age-error').text('Please enter your first name.')
      }
       if(user_pass === "") {
        $('.user_pass-error').text('Please enter your Password name.')
      }
      if(gender === "") {
        $('.gender-error').text('Please enter your Password name.')
      }
   
   
      return false;
    });
    
   
    
   }
   
   $(document).ready(main);
   </script> -->