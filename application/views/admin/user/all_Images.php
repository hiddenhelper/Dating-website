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
       Yoga Images
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Images</li>
        <li class="active">Images </li>
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
              <h3 class="box-title">All Images</h3>
              <!--<a href="<?php echo base_url()?>admin/UserAdd" class="btn btn-info btn-sm pull-right  ">Add</a>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive" style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Yoga Name</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th style="width: 10%;">Action</th> 
                </tr>
                </thead>
                <tbody>
        
                  <?php $a=1;  
                  foreach ($photos as $row)
                  { ?>
                    <tr>

                      <td><?php echo $a++;?></td>
                      <td><?php echo ucwords($row['yoga_name']);?></td>
                      </td>
                      <td class="center"><img src="<?php echo $row['yoga_img'];?>" height=80px width=100px></td>
                     
                      <td class="text-center">
                        <div class="btn-group">

                         <!-- <?php echo anchor('admin/imgEdit/'.$row['yoga_img_id'], '<i class="fa fa-edit"></i>', array("class"=>"btn btn-success")); ?> -->

                          <?php echo anchor('admin/imgDelete/'.$row['yoga_img_id'], '<i class="fa fa-times"></i>', array("class"=>"btn btn-danger", "onclick"=>"return confirm('Are you sure delete?')"));?>
                        </div>
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
