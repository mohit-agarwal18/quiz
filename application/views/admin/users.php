

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
          
           <a href="<?=base_url();?>admin_dashboard/adduser"><button type="button"  class="btn btn-primary pull-right" style="margin-bottom: 30px;margin-right: 20px;">Add User</button></a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                   <th>Sr No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>User Type</th>

                  <th>View</th>
                  <th>Disable/Enable</th>
                </tr>
              </thead>
             
              <tbody>
               <?php $i=0; $counter=0; foreach($entries as $entries){?>
                        
                     <?php   if($i>0){ ?>
                        <tr>
                        <td><?=++$counter;?></td>
                       
                        <td><?=$entries->name;?></td>
                        <td><?=$entries->email;?></td>
                        <td><?=$entries->user_type;?></td>
                         <td><a href="<?=base_url();?>admin_dashboard/Viewuser/<?=$entries->id;?>"><button type="button" class="btn btn-info">View</button></a></td>
                        
                        <?php if($entries->is_enable){ ?>
                        
                       <td><a href="<?=base_url();?>admin_dashboard/disable_user/<?=$entries->id;?>"><button type="button" class="btn btn-danger">Disable</button></a></td>
                           <?php } else{ ?>
                             <td><a href="<?=base_url();?>admin_dashboard/enable_user/<?=$entries->id;?>"><button type="button" class="btn btn-success">Enable</button></a></td>

                              <?php }?> 
                        </tr>  


                        <?php } $i++; }?> 
               
                
              </tbody>
            </table>
          </div>
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
