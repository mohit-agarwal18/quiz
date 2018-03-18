
<!doctype html>
<html lang="en">
  
<head>
  <?php include('header.php');?>
    <link href="<?php echo base_url() ?>public/vendors/signin.css" rel="stylesheet">
  
</head>

  <body class>

   <form class="form-signin" action="<?php echo base_url('login/validate')?>" method="Post">
      <div class="text-center mb-4">
     
        <h1 class="h3 mb-3 font-weight-normal">Enter Your Credentials</h1>
           <?php if($this->session->flashdata('loginerror')){ ?>
               <div class="alert alert-danger">
                  
                  <strong> <?php echo $this->session->flashdata('loginerror'); ?> </strong>
               </div>
                <?php } ?>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <label for="inputPassword">Password</label>
      </div>

     
      <button class="btn btn-lg btn-primary btn-block" type="submit" name='submit'>Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>
        
          

  </body>
</html>
