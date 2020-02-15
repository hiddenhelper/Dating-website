<style type="text/css">
	button.sarch-member-btn {
    position: absolute;
    right: 0;
    top: 0;
    line-height: 68px;
    text-align: center;
    width: 80px;
}
</style>
<?php 
$min=18; $max=25; $location='';
extract($_GET); 
?>
<section class="page-info new-block">
   <div class="fixed-bg" style="background: url('<?php echo base_url();?>images/page-info-bg.jpg');"></div>
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="inner-wrapper">
               <h2 class="clr1">Search For Dating</h2>
               <div class="clearfix"></div>
               <ul class="list-unstyled">
                  <li><a href="<?= base_url('welcome/home'); ?>">Home</a></li>
                  <li><a> - </a></li>
                  <li><a>Search</a></li>
               </ul>
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="search" placeholder="Search by Name">
               	<!-- <button type="submit" class="sarch-member-btn"><i class="flaticon-search"></i></button> -->
               <a  href="" class="sarch-member-btn"><i class="flaticon-search"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="search-form new-block pdtb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="inner-wrapper">
               <form action="<?php echo base_url();?>welcome/Search_girl" method="get">
                  <input type="hidden" name="min" id="min" value="<?= $min; ?>">
                  <input type="hidden" name="max" id="max" value="<?= $max; ?>">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <label>Location</label>
                        <div class="form-group">
                           <select name="location"  class="js-example-tags">
                           		<option value="">Location</option>
                             <!--  <?php foreach($cities as $c):?>
                              <option <?= $location== $c['city_id'] ? 'selected':''; ?> value="<?php echo $c['city_id']?>"><?php echo $c['city_name']?></option>
                              <?php endforeach;?> -->
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <label>Age : <span id="result_1"> <?= $min; ?> - <?= $max; ?></span></label>
                        <div class="form-group">
                           <input id="range_1" name="age" />
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="text-center">
                           <input type="submit"  name="submit" value="Search" class="c-btn btn1" >
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(".e2").select2({
     placeholder: "Select a State",
     allowClear: true,
     closeOnSelect: false
   });
     
</script>
<section class="search-result-area new-block pdtb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="title2">
               <h2 class="fz35">Search Result :
                  	<?php echo count($results); ?>
               </h2>
               <div class="clearfix"></div>
            
            </div>
         </div>
         <?php foreach($results as $row){ ?>
         <div class="col-lg-2 col-md-3 col-sm-4  col-xs-6">
            <div class="block-stl2">
               <div class="img-holder">
                  <img style="height: 100px; width: 170px;" src="<?php echo base_url()?>images/gallery/<?php echo $row->image1;?>" alt="" class="img-responsive">
               </div>
               <div class="txt-block">
                  <a href="<?= base_url().'welcome/profileShow/'.$row->user_id; ?>">
                     <h3 class="fz22"><?php echo $row->user_name?></h3>
                     <p><?php echo $row->age?>/<?php echo $row->gender?></p>
                  </a>
               </div>
            </div>
         </div>
         <?php } ?>
         <div class="col-lg-12">
            <div class="text-center">
               <a href="#" class="c-btn btn1"> View More</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--  -->
<table>
</table>
</div>
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
<!-- Include jQuery -->
<!-- 	<script src="js/jquery.min.js"></script> -->
<!-- Bootstrap -->
<!-- 	<script src="js/bootstrap.min.js"></script> -->
<!-- Plugins -->
<!-- 	<script src="js/plugins.js"></script> -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP1lPhUhDU6MINpruPDinAzXffRlpzzFo"></script> -->
<!-- Custom -->
<!-- 	<script src="js/custom.js"></script> -->
</body>
<!-- Mirrored from www.rewebso.com/html/lamour_html/search_girls.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 11:05:55 GMT -->
</html>