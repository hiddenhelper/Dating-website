<aside class="main-sidebar">
   <section class="sidebar">
      <div class="user-panel">
         <div class="pull-left image">
            <img src="<?php echo base_url()?>upload/admin/<?php echo $this->session->userdata('admin_image');?>" class="img-circle" alt="Admin Image">
         </div>
         <div class="pull-left info">
            <p><?php echo $this->session->userdata('admin_name');?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
      </div>
     
      <ul class="sidebar-menu" data-widget="tree">
         <!-- <li class="header">MAIN NAVIGATION</li> -->
         <li class="<?php  if($this->uri->segment(1)=='admin' && ($this->uri->segment(2)=='dashboard')) {echo 'active';}?> menu-open">
            <a href="<?php echo base_url() ?>admin/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li>
         <!-- <li class="<?php  if($this->uri->segment(1)=='admin' && ($this->uri->segment(2)=='supplier')) {echo 'active';}?>">
            <a href="<?php  echo base_url()?>admin/supplier">
            <i class="fa fa-user-circle"></i> <span>Users</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li> -->

         <li class="<?php  if($this->uri->segment(1)=='admin' && ($this->uri->segment(2)=='user')) {echo 'active';}?>">
            <a href="<?php  echo base_url()?>admin/Alluser">
            <i class="fa fa-circle-o"></i> <span>user</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li>

       <!--   <li class="<?php  if($this->uri->segment(1)=='admin' && ($this->uri->segment(2)=='plan')) {echo 'active';}?>">
            <a href="<?php  echo base_url()?>admin/viewblog">
            <i class="fa fa-circle-o"></i> <span>Blog</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li> -->
     
         
      </ul>
   </section>
   <!-- /.sidebar -->
</aside>