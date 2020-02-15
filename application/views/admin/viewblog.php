<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

      <?php $this->load->view('admin/navbar') ?>

  <!-- Left side column. contains the logo and sidebar -->
  
    <?php $this->load->view('admin/sidebar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Blog Management</li>
        <li class="active">Blog </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php  if(isset($error)){ echo $error; }
          echo $this->session->flashdata('success_req'); ?>
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">All Blog</h3>
              <a href="<?php echo base_url()?>Admin/BlogAdd" class="btn btn-info btn-sm pull-right">Add</a>
            </div>
            <div class="box-body">
            <div class="table-responsive" style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Blog Name</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Super like</th>
                  <th>Message</th>
                  <th>image</th> 
                  <th>Date</th>
                  <th style="width: 10%;">Action</th> 
                </tr>
                </thead>
                <tbody>
        
              <?php $a=1;  foreach ($data as $row) { ?>
                <tr>
                  <td><?php echo $a++;?></td>
                  <td><?php echo $row->blog_name;?></td>
                  <td><?php echo $row->title;?></td>
                  <td><?php echo $row->des;?></td>
                  
                  <td><?php echo $row->superlike;?></td>
                  <td><?php echo $row->message;?></td>
              

                
           <td><a href="<?php echo base_url()?>upload/<?php echo $row->image;?>" target="_blank"> <img src="<?php echo base_url() ?>upload/<?php echo $row->image;?>" style="width: 80px;height:80;"></a></td>
               <td><?php echo $row->date;?></td>
                 
               
                 <!--    <td>
                     <?php if($row->Blog_status==0){ ?>
                        <a href="<?php echo base_url()?>Admin/deleteProfile/<?php echo $row->profile_id; ?>" class="btn btn-success"><i class="">Make Active</i></a>
                     
                      <?php }else{ ?>
                         <a href="<?php echo base_url()?>Admin/updateProfile/<?php echo $row->profile_id; ?>" class="btn btn-danger"><i class="">Make Deactive</i></a>
                      
                      <?php } ?>


                    </td> -->
                 
                  
                <td class="text-center">

<?php echo anchor('admin/blogEdit?id='.$row->blog_id, '<i class="fa fa-edit"></i>', array("class"=>"btn btn-success")); ?></td>

 <td><?php echo anchor('admin/blogdelete/'.$row->blog_id, '<i class="fa fa-times"></i>', array("class"=>"btn btn-danger", "onclick"=>"return confirm('Are you sure delete?')")); ?>


                                        
                                                </td>
                </tr>
            <?php } ?>
                </tbody>
              
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('admin/footer') ?>
  
  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


</body>
</html>
