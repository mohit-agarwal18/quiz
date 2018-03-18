

<?php include('dashboard_header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('admin_nav.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">



      <br>
   

        <div class="card card-register mx-auto mt-5">
      <div class="card-header">Change Password</div>
      <br>
       <?php if($this->session->flashdata('passwordunset')) {?>
      <div class="alert alert-danger" role="alert">
          <?=$this->session->flashdata('passwordunset');?>
      </div>
      <?php } ?>
        <?php if($this->session->flashdata('passwordset')) {?>
      <div class="alert alert-success" role="alert">
          <?=$this->session->flashdata('passwordset');?>
      </div>
      <?php } ?>
     
      <div class="card-body">
        <form method="post" action="<?=base_url();?>admin_dashboard/change_password">
         <div class="form-group">
            <label for="exampleInputEmail1">Old Password</label>
            <input name="opassword" class="form-control" id="exampleInputPassword1" type="password" aria-describedby="emailHelp" placeholder="Enter old password">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">New Password</label>
            <input name="npassword" class="form-control" id="exampleInputPassword1" type="password" aria-describedby="emailHelp" placeholder="Enter new password">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Confirm New Password</label>
            <input name="cpassword" class="form-control" id="exampleInputPassword" type="password" aria-describedby="emailHelp" placeholder="Re-Enter password">
          </div>
           <button name="submit" value="submit" type="submit" class="btn btn-primary btn-block">Change Password</button>
        </form>
        
      </div>
    </div>





    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    
   <?php include('dashboard_footer.php'); ?>
  </div>
</body>

</html>
