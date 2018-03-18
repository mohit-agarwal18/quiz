
<?php include('dashboard_header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('admin_nav.php'); ?>
  <div class="content-wrapper">
    <div class="container" style="text-align: center;">
      <h3> <?=$users[0]->name?></h3>
<hr style="width: 75%;">
<div style="width: 75%; margin: auto;">
 
 
 <a href="<?=base_url();?>admin_dashboard/edit_user/<?=$users[0]->id;?>">
<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit Details"><i class="fa fa-edit"></i></button></a>
 

  <p></p>
  

  <table class="table">
 
  <tbody>
    <tr>
      <th scope="row">1</th>
     <th>Name </th>
     
     <td><?=$users[0]->name;?></td>
    </tr>
   
    <tr>
      <th scope="row">2</th>
      <th>Email Address</th>
           <td><?=$users[0]->email;?></td>
    </tr>
     
    <tr>

      <th scope="row">3</th>
      <th>User Type</th>
          <td><?=$users[0]->user_type;?></td>
    </tr>
   

  </tbody>
</table>
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
