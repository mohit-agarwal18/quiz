<?php include('dashboard_header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('admin_nav.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">



    
<header style="text-align: center;"><br><h3>Add User</h3><br></header>



   <div class="container col-md-6 ">
<form  action="<?=base_url();?>admin_dashboard/adduser">
  <div class="form-group">
           <div class="form-row">
                
                 
                       <label for="exampleInputLastName"> Name</label>
                        <input name="name" class="form-control" id="exampleInputLastName" type="text" required aria-describedby="nameHelp" placeholder="Name">
                  
            </div>
      </div>
      <div class="form-group">
           <div class="form-row">
                
                      <label for="exampleInputName">Email Address</label>
                       <input name="email" class="form-control" id="exampleInputName" type="email" required aria-describedby="nameHelp" placeholder="Email Address">
                
                 
            </div>
      </div>
       <div class="form-group">
           <div class="form-row">
                
                      <label for="exampleInputName">Password</label>
                       <input name="password" class="form-control" id="exampleInputName" type="password" required aria-describedby="nameHelp" placeholder="password">
                
                 
            </div>
      </div>


         <button type="submit" name="submit" value="submit" style="display: block; margin: auto;" class="btn btn-primary">Submit</button>           

</form>
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











