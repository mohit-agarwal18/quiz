<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?=base_url();?>admin_dashboard">Quiz Management System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?=base_url();?>admin_dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
       
        <?php if($this->session->user_details['user_type'] == 'Super Admin'){ ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?=base_url();?>admin_dashboard/showusers">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Manage Users</span>
          </a>
        </li> <?php }?>

        <?php if($this->session->user_details['user_type'] == 'Super Admin'){ ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?=base_url();?>admin_dashboard/showlocations">
            <i class="fa fa-fw fa-globe"></i>
            <span class="nav-link-text">Manage Locations</span>
          </a>
        </li> <?php }?>
      <?php if($this->session->user_details['user_type'] == 'Super Admin'){ ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?=base_url();?>admin_dashboard/showquestions">
            <i class="fa fa-fw fa-question"></i>
            <span class="nav-link-text">Questions</span>
          </a>
        </li> <?php }?>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
          
        <li class=" dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user-circle"></i>
            <span >Welcome! <?php echo $this->session->userdata['user_details']['name'];?>
            </span>
            
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Settings:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?=base_url();?>admin_dashboard/change_password">
              <span class="text">
                <strong >
                  <i class="fa fa-key fa-fw" ></i>Change Password</strong>
              </span>
             
            </a>
            <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="<?=base_url();?>Login/logout">
                   <span class="text">        
                          <strong>
                         <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                          </strong> 
             </span>
            </a>
           
           
          </div>
        </li>
      
        
      </ul>
    </div>
  </nav>