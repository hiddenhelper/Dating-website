<body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">
      <?php $this->load->view('admin/navbar') ?>
      <?php $this->load->view('admin/sidebar') ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <h1>
               update Blog
               <!-- <small> Preview</small> -->
            </h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
               <li><a href="#">Blog Management </a></li>
               <li class="active">Add Blog </li>
            </ol>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <div class="col-md-8">
                  <?php  if(isset($error)){ echo $error; }
                     echo $this->session->flashdata('success_req'); ?>
                  <!-- general form elements -->
                  <div class="box box-primary">
                     <div class="box-header">
                        <h3 class="box-title">update Blog </h3>
                     </div>
                     <!-- /.box-header --->
                     <!-- form start -->


            <?php
  $i=1;
  foreach($data as $row)
  {
  ?>

                     <form action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                           <div class="form-group">
                              <label class="">Blog Name:<span class="text-danger">*</span></label>
                              <input type="text" name="blogname" class="form-control" value="<?php echo $row->blog_name; ?>"/>
                           </div>

                           <div class="form-group">
                              <label class="">Title<span class="text-danger">*</span></label>
                              <input type="text" name="title" class="form-control" value="<?php echo $row->title; ?>"/>
                           </div>
                            <div class="form-group">
                              <label class="">Message<span class="text-danger">*</span></label>
                              <input type="text" name="mes" class="form-control" value="<?php echo $row->message; ?>"/>
                           </div>
                            <div class="form-group">
                              <label class="">Super like<span class="text-danger">*</span></label>
                              <input type="text" name="superlike" class="form-control" value="<?php echo $row->superlike; ?>"/>
                           </div>

                           <div class="form-group">
                              <label class="">Description<span class="text-danger">*</span></label>
                              <input type="text" name="des" class="form-control" value="<?php echo $row->des; ?>"/>
                           </div>
                         
                              <div class="row">
                              <div class="form-group col-sm-6">
                                 <label class="">Image :<span class="text-danger">*</span></label>
                                 <div class="input-group rate">
                                    <div class="">
                                       <i class=""></i>
                                    </div>
                                    <img src="<?php echo base_url()?>upload/<?php echo $row->image;?>" height="200px" weight="100px">
                                    <input type="file" name="image"  class="form-control pull-right " id="file" >
                                 </div>
                              </div>
                              <!-- <div class="form-group col-sm-6" id="item_pic" style="text-align: center;">
                                 <img src="" style="height: 100px;width: 100px" id="update_img">
                              </div> -->
                           </div>
                           </div>
                           
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                           <input type="submit" class="btn btn-primary" name="update" value="Update" />
                        </div>
                     </form>
                     <?php }?>
                  </div>
                  <!-- /.box -->
               </div>
               <!-- </div> -->
            </div>
            <!-- Main row -->
         </section>
         <!-- /.content -->
         </aside><!-- /.right-side -->
      </div>
      <!-- /.content-wrapper -->
      <?php $this->load->view('admin/footer') ?>
      <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
   </div>
   <!-- ./wrapper -->
  <!--  <script type="text/javascript">
      $(function() { 
        $('#item_pic').hide(); 
       
      });
      
        function imgchange(f) 
        {
            var filePath = $('#file').val();
            var reader = new FileReader();
            reader.onload = function (e) 
            {
              $('#item_pic').show(); 
                var target=e.target.result;
                var newimg=$('#update_img').attr('src',target);
            };
            reader.readAsDataURL(f.files[0]);  
      
        };
   </script> -->
</body>
</html>