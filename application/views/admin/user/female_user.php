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
        User 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>User Management</li>
        <li class="active">User </li>
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
              <h3 class="box-title">All User</h3>
              <!-- <a href="<?php echo base_url()?>admin/UserAdd" class="btn btn-info btn-sm pull-right ">Add</a> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive" style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Mobile</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>City</th>
                  <th>Date</th>
                  <th>Image</th> 
                  <th>Status</th>
                  <th>Action</th> 
                </tr>
                </thead>
                <tbody>
        
              <?php $a=1;  foreach ($user as $row) { ?>
                <tr>

                  <td><?php echo $a++;?></td>
                  <td><?php echo ucwords($row['user_name']);?></td>
                  <td><?php echo $row['user_email']?></td>
                  <td><?php echo $row['user_pass']?></td>
                  <td><?php echo $row['user_mobile']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><?php echo $row['age']?></td>
                  <td>

                     <?php 
                        foreach($city as $rows) { 
                           $ids=$rows['city_id'];
                           if($row['city']==$ids){ echo $rows['city_name'];}
                         }
                     ?>
                  </td>
                  <td><?php echo date("d-m-Y", strtotime($row['create_date_time'])); ?></td>
                  <td class="center"><img src="<?php echo base_url('images/profile/'. $row['image1']);?>" height=80px width=100px></td>
                  <td>
                  
                   <?php if($row['user_status']==0){ ?>
                      <a data-id="<?php echo $row['user_id']; ?>" data-val="1" class="btn btn-danger active_deactive"><i class=""> Active</i>
                      </a>
                    <?php }else{ ?>
                       <a data-id="<?php echo $row['user_id']; ?>" data-val="0" class="btn btn-success active_deactive"><i class="">Deactive</i></a>
                    
                    <?php } ?>
                  </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <?php echo anchor('admin/UserDelete/'.$row['user_id'], '<i class="fa fa-times"></i>', array("class"=>"btn btn-danger", "onclick"=>"return confirm('Are you sure delete?')")); ?>
                    </div>
                  </td>
                </tr>
                <?php }?>
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
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('.active_deactive').on('click', function(){
      var id = $(this).data('id');
      var status = $(this).data('val');
      $.ajax({
        type: "POST",
        url: "<?= base_url(); ?>"+"Admin/activeDeactiveUser", 
        data: {"status":status, "id":id},
        dataType: "json",  
        cache:false,
        success: 
         function(data){
          if(data.result)
          {
            location.reload();
          }
         }
     });
    })
  });
</script>
