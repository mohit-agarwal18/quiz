

<?php include('dashboard_header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('admin_nav.php'); ?>
  <div class="content-wrapper">
    <div class="container" style="width: 75%; margin: auto;"><br>

        
      <a style="text-decoration: none;" href="<?=base_url();?>admin_dashboard/addquestions"><button type="button"  class="btn btn-primary" style=" width: 20%; display: block; margin:auto;">Show Question</button></a>
<br>
<table class="table">
  

 <?php foreach ($location as $location1){?>
  <thead class="thead-dark">
    <tr>
      
      <th colspan="2"><?=$location1->location;?></th>
    </tr>
</thead>
<tbody>
<?php $counter = 0;  foreach ($question as $question1) {

                if($question1->location==$location1->location){  ?>

                        <tr>
                <th scope="row"><?=++$counter?></th>
                <td><?=$question1->question?></td>
                      </tr>
                 <?php   }} ?>
 </tbody>






<?php }
?>


</table>


















      </div>



    </div>

    <!-- Modal -->
     <form  action="<?=base_url();?>admin_dashboard/addlocation">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                       
  <div class="form-group">
           <div class="form-row">
                
                 
                       <label for="exampleInputLastName">Location Name</label>

                       <input  autofocus required selected name='location' class="form-control form-control-lg" type="text" placeholder="">
                        
            </div>
      </div>
      
                   


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
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
