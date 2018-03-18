

<?php include('dashboard_header.php');   ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('admin_nav.php'); ?>
  <div class="content-wrapper" style="text-align: center;">
    <p></p>
    <h1>Attach Ref-Id</h1>
    <p></p>
    

      <hr>
    <div class="container" >


      <br>


<form style="width: 75%; margin: auto;" action="<?=base_url();?>admin_dashboard/add_refid?id=1">
  


  <?php if($this->session->flashdata('failed')) {?>
      <div class="alert alert-danger" role="alert">
         <strong> Failed! </strong>Id Already Exists.
      </div>
      <?php } ?>
        <?php if($this->session->flashdata('success')) {?>
      <div class="alert alert-success" role="alert">
       <strong> Success! </strong>Id Attached Successfully.
      </div>
      <?php } ?>

 




 


  

      <textarea  autofocus selected name='ref_id' class="form-control form-control-lg" type="text" placeholder=""></textarea> 

      <br>
      <button style=" display: block; margin: auto;" name="submit" value="submit" class="btn btn-primary" id='myTextInput' value="submit">Attach</button>
      <input style="display:none" name="id" value="<?=$id;?>">

</form>


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
  <script type="text/javascript">
    
    


  </script>
</body>

</html>
