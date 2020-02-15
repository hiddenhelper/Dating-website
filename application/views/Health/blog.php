



<section class="page-info new-block">

			<div class="fixed-bg" style="background: url('<?php echo base_url();?>images/page-info-bg.jpg');"></div>

			<div class="overlay"></div>

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="inner-wrapper">

							<h2 class="clr1">Blog</h2>

							<div class="clearfix"></div>

							<ul class="list-unstyled">

								<li><a href="#">Home</a></li>

								<li><a href="#"> - </a></li>

								<li><a href="#">Blog</a></li>

							</ul>

						</div>

						<div class="form-group">

							<input type="text" class="form-control" placeholder="Search by Name">

							<a href="#" class="sarch-member-btn"><i class="flaticon-search"></i></a>

						</div>

					</div>

				</div>

			</div>

		</section>


<?php foreach ($user as $row) { ?>
		<section class="blog-page new-block pdtb-100">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="blogs">

							<div class="img-holder">

								<img src="<?php echo base_url() ?>upload/<?php echo $row->image;?>" alt="" class="img-responsive">

							</div>

							<div class="blog-txt">

								<div class="inner-txt-block">

									<a href="#"><h2><?php echo $row->title;?></h2></a>

									<ul class="list-unstyled profile-contact">

										<li><a href="#"><i class="fa fa-user"></i><?php echo $row->blog_name;?></a></li>

										<li><a href="#"><i class="fa fa-clock-o"></i>Dec 02 , 2018  06:45 pm</a></li>

										<li><a href="#"><i class="fa fa-heart"></i><?php echo $row->superlike;?></a></li>

										<li><a href="#"><i class="fa fa-comment-o"></i><?php echo $row->message;?></a></li>

									</ul>

									<p><?php echo $row->des;?> </p>

									<a href="<?php echo base_url();?>welcome/Blog_single" class="c-btn btn1">Read More</a>

								</div>

							</div>

						</div>

					</div>

						

				<!-- 	<div class="col-lg-12">

						<div class="blogs">

							<div class="img-holder">

								<img src="<?php echo base_url();?>images/img89.jpg" alt="" class="img-responsive">

							</div>

							<div class="blog-txt">

								<div class="inner-txt-block">

									<a href="#"><h2>Nulla facilisis nisl vitvolutpat placerat. Pellent habitant morbi tristique .</h2></a>

									<ul class="list-unstyled profile-contact">

										<li><a href="#"><i class="fa fa-user"></i>Tenma Shyna</a></li>

										<li><a href="#"><i class="fa fa-clock-o"></i>Dec 02 , 2018  06:45 pm</a></li>

										<li><a href="#"><i class="fa fa-heart"></i>275</a></li>

										<li><a href="#"><i class="fa fa-comment-o"></i>66</a></li>

									</ul>

									<p>Aliquam a neque tortor. Donec iaculis auctor turpis. Eporttitor tristique mattis. Vestibulum pretium eleifend risus, scelerisque neque rhoncus in. </p>

									<a href="<?php echo base_url();?>welcome/Blog_single" class="c-btn btn1">Read More</a>

								</div>

							</div>

						</div>

					</div> -->

						

				<!-- 	<div class="col-lg-12">

						<div class="blogs">

							<div class="img-holder">

								<img src="<?php echo base_url();?>images/img90.jpg" alt="" class="img-responsive">

							</div>

							<div class="blog-txt">

								<div class="inner-txt-block">

									<a href="#"><h2>Nulla facilisis nisl vitvolutpat placerat. Pellent habitant morbi tristique .</h2></a>

									<ul class="list-unstyled profile-contact">

										<li><a href="#"><i class="fa fa-user"></i>Tenma Shyna</a></li>

										<li><a href="#"><i class="fa fa-clock-o"></i>Dec 02 , 2018  06:45 pm</a></li>

										<li><a href="#"><i class="fa fa-heart"></i>275</a></li>

										<li><a href="#"><i class="fa fa-comment-o"></i>66</a></li>

									</ul>

									<p>Aliquam a neque tortor. Donec iaculis auctor turpis. Eporttitor tristique mattis. Vestibulum pretium eleifend risus, scelerisque neque rhoncus in. </p>

									<a href="<?php echo base_url();?>welcome/Blog_single" class="c-btn btn1">Read More</a>

								</div>

							</div>

						</div>

					</div> -->

						
<!-- 
					<div class="col-lg-12">

						<div class="blogs">

							<div class="img-holder">

								<img src="<?php echo base_url();?>images/img91.jpg" alt="" class="img-responsive">

							</div>

							<div class="blog-txt">

								<div class="inner-txt-block">

									<a href="#"><h2>Nulla facilisis nisl vitvolutpat placerat. Pellent habitant morbi tristique .</h2></a>

									<ul class="list-unstyled profile-contact">

										<li><a href="#"><i class="fa fa-user"></i>Tenma Shyna</a></li>

										<li><a href="#"><i class="fa fa-clock-o"></i>Dec 02 , 2018  06:45 pm</a></li>

										<li><a href="#"><i class="fa fa-heart"></i>275</a></li>

										<li><a href="#"><i class="fa fa-comment-o"></i>66</a></li>

									</ul>

									<p>Aliquam a neque tortor. Donec iaculis auctor turpis. Eporttitor tristique mattis. Vestibulum pretium eleifend risus, scelerisque neque rhoncus in. </p>

									<a href="<?php echo base_url();?>welcome/Blog_single" class="c-btn btn1">Read More</a>

								</div>

							</div>

						</div>

					</div> -->

						

					<!-- <div class="col-lg-12">

						<div class="blogs">

							<div class="img-holder">

								<img src="<?php echo base_url();?>images/img92.jpg" alt="" class="img-responsive">

							</div>

							<div class="blog-txt">

								<div class="inner-txt-block">

									<a href="#"><h2>Nulla facilisis nisl vitvolutpat placerat. Pellent habitant morbi tristique .</h2></a>

									<ul class="list-unstyled profile-contact">

										<li><a href="#"><i class="fa fa-user"></i>Tenma Shyna</a></li>

										<li><a href="#"><i class="fa fa-clock-o"></i>Dec 02 , 2018  06:45 pm</a></li>

										<li><a href="#"><i class="fa fa-heart"></i>275</a></li>

										<li><a href="#"><i class="fa fa-comment-o"></i>66</a></li>

									</ul>

									<p>Aliquam a neque tortor. Donec iaculis auctor turpis. Eporttitor tristique mattis. Vestibulum pretium eleifend risus, scelerisque neque rhoncus in. </p>

									<a href="<?php echo base_url();?>welcome/Blog_single" class="c-btn btn1">Read More</a>

								</div>

							</div>

						</div>

					</div> -->

						

					<!-- <div class="col-lg-12">

						<div class="blogs">

							<div class="img-holder">

								<img src="<?php echo base_url();?>images/img93.jpg" alt="" class="img-responsive">

							</div>

							<div class="blog-txt">

								<div class="inner-txt-block">

									<a href="#"><h2>Nulla facilisis nisl vitvolutpat placerat. Pellent habitant morbi tristique .</h2></a>

									<ul class="list-unstyled profile-contact">

										<li><a href="#"><i class="fa fa-user"></i>Tenma Shyna</a></li>

										<li><a href="#"><i class="fa fa-clock-o"></i>Dec 02 , 2018  06:45 pm</a></li>

										<li><a href="#"><i class="fa fa-heart"></i>275</a></li>

										<li><a href="#"><i class="fa fa-comment-o"></i>66</a></li>

									</ul>

									<p>Aliquam a neque tortor. Donec iaculis auctor turpis. Eporttitor tristique mattis. Vestibulum pretium eleifend risus, scelerisque neque rhoncus in. </p>

									<a href="<?php echo base_url();?>welcome/Blog_single" class="c-btn btn1">Read More</a>

								</div>

							</div>

						</div>

					</div> -->



					<div class="col-lg-12">

						<div class="text-center">

							<a href="#" class="c-btn btn1">View More</a>

						</div>

					</div>

				</div>

			</div>

		</section>
	<?php }?>



		

	

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



<!-- Mirrored from www.rewebso.com/html/lamour_html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 11:06:09 GMT -->

</html>