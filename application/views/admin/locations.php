

<?php include('dashboard_header.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('admin_nav.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
       <br>
    <div class="card mb-3" style="margin: 25px">

        <div class="card-header">
          <i class="fa fa-table"></i> Events List


        </div>

 <div class="card-body">
          <?php
            if($this->session->flashdata('errorr')) {?>
         

              <div class=" pull-left alert alert-danger">
                 <strong>Failed!</strong><?=$this->session->flashdata('errorr');?>
          </div>

         <?php } ?>

         <?php
            if($this->session->flashdata('successs')) {?>
         

              <div class=" pull-left alert alert-success">
                 <strong>Success!</strong><?=$this->session->flashdata('successs');?>
          </div>

         <?php } ?>
          
           <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary pull-right" style="margin-bottom: 30px;margin-right: 20px;">Add Location</button>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                   <th>Sr No.</th>
                  <th>Location Name</th>
                  
                 
                </tr>
              </thead>
             
              <tbody>
               <?php $counter=0; foreach($entries as $entries){?>
                        
                        <tr>
                        <td><?=++$counter;?></td>
                       
                        <td><?=$entries->location;?></td>
                        
                        
                        
                       
               <?php } ?>
                
              </tbody>
            </table>
          </div>
        </div>

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
