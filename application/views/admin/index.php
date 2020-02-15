<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <h1>slayconnect</h1>
   <!-- <img alt="Logo" style="width: 150px;height: 150px;" src="<?php echo base_url() ?>/images/logo.png" border="0" class="logo"> -->
  </div>

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Admin Login </p>
    <?php echo isset($error) ? $error : ''; ?>

    <form action="<?php echo base_url()?>Admin/login" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
       
      </div>
    </form>

   
  </div>
</div>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>




