<body class="skin-blue sidebar-mini wysihtml5-supported" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('admin/navbar') ?>
<?php $this->load->view('admin/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 960px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <!-- <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <section class="content">      
      <div class="row">
        <div class="col-lg-3 col-xs-4">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Users</h4>
              <p><?php if($allusers){echo $allusers;}else{echo '0';} ?> </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url('Admin/Alluser');?>" class="small-box-footer">More info 
              <i class="fa fa-arrow-circle-right">
              </i>
            </a>
          </div>
        </div> 
        <div class="col-lg-3 col-xs-4">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Male</h4>
              <p><?php if($users){echo $users;}else{echo '0';} ?> </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url('Admin/user');?>" class="small-box-footer">More info 
              <i class="fa fa-arrow-circle-right">
              </i>
            </a>
          </div>
        </div> 
        <div class="col-lg-3 col-xs-4">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4>Female</h4>
              <p><?php if($fusers){echo $fusers;}else{echo '0';} ?> </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url('Admin/female_user');?>" class="small-box-footer">More info 
              <i class="fa fa-arrow-circle-right">
              </i>
            </a>
          </div>
        </div>       
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/footer') ?>


  <div class="control-sidebar-bg"></div>
</div>

</body>
</html>