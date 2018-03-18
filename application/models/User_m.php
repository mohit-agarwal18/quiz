<?php 
class user_m extends CI_Model {

    var $details;

    function validate_user( $email, $password ) {
        // Build a query to retrieve the user's details
        // based on the received username and password
        $password = md5($password);

        $this->db->from('login');
        $this->db->where('email',$email);
        $this->db->where( 'password', $password );
        
        
        $login = $this->db->get()->result();

        // The results of the query are stored in $login.
        // If a value exists, then the user account exists and is validated
        if ( is_array($login) && count($login) == 1 ) {
            // Set the users details into the $details property of this class
            $this->details=$login[0];
            // Call set_session to set the user's session vars via CodeIgniter
            $user_details=array();
            $user_details['id']=$this->details->id;
            $user_details['email']=$this->details->email;
            $user_details['name']=$this->details->name;
            $user_details['password']=$this->details->password;
            $user_details['is_enable']=$this->details->is_enable;
            $user_details['user_type']=$this->details->user_type;
          $this->session->set_userdata( array(
                'user_details'=>$user_details,
                'isLoggedIn'=>true,
                
            )
        );
            return true;
        }

        return false;
    }
function selectAllData(){
  
    $query = $this->db->get('referal_draw_applicants');
    return $query->result();
}

}
?>