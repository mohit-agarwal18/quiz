<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
function __construct()
    {
         
        parent::__construct();
        

    }
    
    public function index()
    {
           header('Access-Control-Allow-Origin: *');
          header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");    
            
            if( $this->session->userdata('isLoggedIn') ) {
            redirect('/admin_dashboard');
            }else{
                $this->show_login(false);
                }
    }
    
    function validate() {
        // Create an instance of the user model

       $this->load->model('user_m');

        // Grab the email and password from the form POST
       $unm = $this->input->post('email',true);
       $pass  = $this->input->post('password',true);
        //Ensure values exist for email and pass, and validate the user's credentials
        if( $unm && $pass && $this->user_m->validate_user($unm,$pass)) {

                        $is_enable= $this->session->user_details['is_enable'];
                        if($is_enable==1){
                             
                                redirect('/admin_dashboard');

                        }else{
                                 $this->session->set_flashdata('loginerror', 'You are not authorised to access. ');
                                $this->show_login("Either Username or Password is incorrect OR You are not authorised to access. ");

                        }

            // If the user is valid, redirect to the main view
        
        } else {
            // Otherwise show the login screen with an error message.
            $this->session->set_flashdata('loginerror', 'Invalid Username and Password');
            $this->show_login("Either Username or Password is incorrect OR You are not authorised to access. ");
        }
    }
    
    
    
     function show_login( $show_error = false ) {
      
        
        $data['error'] = $show_error;

        $this->load->view('admin/login',$data);
    }
    
    function logout() {

                $this->session->sess_destroy();
     
        $this->index();
        
    }

    function check_email()
    {

        $email=$this->input->post('email');
        $this->db->from('user_info');
        $this->db->where('user_email_id',$email);
        $check=$this->db->get()->result();
        if(count($check)>0)
        {
            echo "yes";
        }

    } 
}