<body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">
      <?php $this->load->view('admin/navbar') ?>
      <?php $this->load->view('admin/sidebar') ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <h1>
               Add Blog
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
                        <h3 class="box-title">Add Blog </h3>
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     <form action="<?php echo base_url()?>Admin/BlogAdd" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                           <div class="form-group">
                              <label class="">Blog Name:<span class="text-danger">*</span></label>
                              <input type="text" name="blogname" class="form-control"/>
                           </div>
                           <div class="form-group">
                              <label class="">Title:<span class="text-danger">*</span></label>
                              <input type="text" name="title" class="form-control"  />
                           </div>
                             <div class="form-group">
                              <label class="">Description:<span class="text-danger">*</span></label>
                              <input type="text" name="des" class="form-control"  />
                           </div>
                           <div class="form-group">
                              <label class="">message:<span class="text-danger">*</span></label>
                              <textarea type="text" name="mes" class="form-control"  ></textarea>
                           </div>
                           <div class="form-group">
                              <label class="">Super like:<span class="text-danger">*</span></label>
                              <input type="text" name="superlike" class="form-control"  />
                           </div>
                         <!--   <div class="form-group">
                              <label class=""> Explanation <small></small> :<span class="text-danger">*</span></label>
                              <textarea class="form-control" maxlength="100"  title="Business Description" name="category_explanation" rows="10" placeholder="Category Explanation ( Max 100 Letters )"></textarea>
                           </div> -->
                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label class="">Blog Image :<span class="text-danger">*</span></label>
                                 <div class="input-group rate">
                                    <div class="input-group-addon">
                                       <i class="fa fa-image"></i>
                                    </div>
                                    <input type="file" name="image" class="form-control pull-right " id="file" onchange="imgchange(this)" >
                                 </div>
                              </div>
                              <!-- <div class="form-group col-sm-6" id="item_pic" style="text-align: center;">
                                 <img src="" style="height: 100px;width: 100px" id="update_img">
                              </div> -->
                           </div>
                          
                          
                           
                          
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                           <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                        </div>
                     </form>
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
 <!--   <script type="text/javascript">
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