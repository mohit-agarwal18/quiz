

<?php include('dashboard_header.php');   ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('admin_nav.php'); ?>
  <div class="content-wrapper" >
    <p></p>
    <h1 style="text-align: center;">Add Questions</h1>
    <p></p>
    

      <hr>
    <div class="container" >


      <br>


<form style="width: 75%; margin: auto;" action="">
  


  <?php if($this->session->flashdata('error')) {?>
      <div class="alert alert-danger" role="alert">
         <strong> Failed! </strong><?=$this->session->flashdata('error');?>.
      </div>
      <?php } ?>
        <?php if($this->session->flashdata('success')) {?>
      <div class="alert alert-success" role="alert">
       <strong> Success! </strong><?=$this->session->flashdata('success')?>.
      </div>
      <?php } ?>

 
        <label for="inputState"><h6>Select Location</h6></label>
      <select required name="location_id" id="inputState" class="form-control">
        <option selected disabled value="">Choose...</option>

      <?php foreach ($entries as $entries) {?>
        <option value="<?=$entries->location_id; ?>"><?=$entries->location; ?></option>

        <?php } ?>
      </select>
      <br>
      <br>
      <label for="inputState"><h6>Enter Question</h6></label>
      <textarea  required="" selected name='question' class="form-control form-control-lg" type="text" placeholder=""></textarea> 

      <br>
      <br>
      <div id='options'>
               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                <div class="input-group-text">
                  <input name="answer[0]" value="1" type="checkbox" aria-label="Checkbox for following text input">
                </div>
              </div>
            <input name="options[]" type="text" class="form-control" placeholder="option" aria-label="option" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button id="delete" class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
              </div>

              </div>
                <div class="input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input name="answer[1]" value="1" type="checkbox" aria-label="Checkbox for following text input">
                </div>
              </div>
            <input name="options[]" type="text" class="form-control" placeholder="option" aria-label="option" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button id="delete" class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
              </div>

              </div>
                 <div class="input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input name="answer[2]" value="1" type="checkbox" aria-label="Checkbox for following text input">
                </div>
              </div>
            <input name="options[]" type="text" class="form-control" placeholder="option" aria-label="option" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button id="delete" class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
              </div>

              </div>
                 <div class="input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input name="answer[3]" value="1" type="checkbox" aria-label="Checkbox for following text input">
                </div>
              </div>
            <input name="options[]" type="text" class="form-control" placeholder="option" aria-label="option" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button id="delete" class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
              </div>

              </div>

            





</div>
                       <button id="add" type="button" class="btn btn-info pull-right"><i class="fa fa-plus"></i></button>

                
                 


      <br>
      <button style=" display: block; margin: auto;" name="submit" value="submit" class="btn btn-primary" id='myTextInput' value="submit">Submit</button>
      <br>

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
    var i=3;
    $('#add').on('click',function(e){
      i++;
    var x = '<div class="input-group mb-3">  <div class="input-group-prepend"><div class="input-group-text"><input name="answer['+i+']" value="1" type="checkbox" aria-label="Checkbox for following text input"></div></div><input name="options[]" type="text" class="form-control" placeholder="option" aria-label="option" aria-describedby="basic-addon2"><div class="input-group-append"> <button id="delete" class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></div></div>';
      e.preventDefault();
     $('#options').append(x);
    });

     $('#options').on("click","#delete", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent("div").parent("div").remove();
    })



  </script>
</body>

</html>
