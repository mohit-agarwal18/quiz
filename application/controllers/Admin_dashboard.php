<?php

class Admin_dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
   
    if( !$this->session->userdata('isLoggedIn') ) {
       
    	$this->session->set_flashdata('loginerror', 'You Must Log In');
        redirect('/login/show_login');
    }
   
  }

public function index(){


$this->load->view('admin/Admin_dashboard');

	
}

public function change_password(){

	if(isset($_POST['submit'])){

      if(md5($_POST['opassword'])==$this->session->user_details['password']){

             if($_POST['npassword']==$_POST['cpassword']){
                          $this->db->set('password',md5($_POST['npassword']));
                          $this->db->select('password');
                          $this->db->where('id', $this->session->user_details['id']);
                          $this->db->update('login');
                          $this->session->set_flashdata('passwordset','Password Changed Successfully!!!');
                          $this->load->view('admin/change_password');
                    }
              else{
                         $this->session->set_flashdata('passwordunset','Password does not match!!!');
                          $this->load->view('admin/change_password');
                    }


       }else{


                        $this->session->set_flashdata('passwordunset','Enter Old Password Correctly');
                          $this->load->view('admin/change_password');


       }


	}else{

		$this->load->view('admin/change_password');
	}
}

public function showusers(){

  $this->db->from("login");
                    $this->db->order_by("is_enable" , "desc");
                    $result = $this->db->get()->result();

                    $data["entries"] = $result;
                   
        $this->load->view('admin/users',$data);
}

public function disable_user($id){

         
       
       $this->db->set('is_enable','0');
        $this->db->where('id',$id);
        $this->db->update('login');

        redirect('./admin_dashboard/showusers');
}
public function enable_user($id){


       
       $this->db->set('is_enable','1');
        $this->db->where('id',$id);
        $this->db->update('login');

        redirect('./admin_dashboard/showusers');
}


public function adduser(){
         if(isset($_GET['submit'])){
               $query = $this->db->query("select email from login where email = '".$_GET['email']."'");

                     
        
          
             if ($query->result()[0]->email)
        {
            $this->session->set_flashdata('errorr',' Email Already Exists' );
          redirect('admin_dashboard/showusers');
        }
        else
        {
            // load success template...
            $this->session->set_flashdata('successs',' Updated Successfully' );

             $data = array(
                'name' => $this->input->get('name'),
                'email' => $this->input->get('email'),
                'password' => md5($this->input->get('password')),
                
                
);

    $this->db->set($data);

$this->db->insert('login', $data);
  redirect('admin_dashboard/showusers');

        }
 

}else{

    $this->load->view('admin/adduser');
}



}

public function viewuser($id = ""){
                    $this->db->from("login");
                    $this->db->order_by("is_enable" , "desc");
                    $this->db->where("id",$id);
                    $result = $this->db->get()->result();

                    $data["users"] = $result;


        $this->load->view('admin/view_user',$data);
}


public function remove_user($id){

 

  $this->db->from("users");
  $this->db->where('id',$id);
  $this->db->delete('users');
  redirect('admin_dashboard/showusers');

}

public function add_refid($id=""){
   
    if(isset($_GET['submit'])){
     
      
     $query = $this->db->query("select ref_id from `users` where id=$_GET[id]");
        $row=$query->result();
   if($row[0]->ref_id==$_GET['ref_id']){
         $this->session->set_flashdata('failed','failed');
          $data['id']=$_GET['id'];


$this->load->view('admin/add_refid',$data);
   }else{

          $this->session->set_flashdata('success','success');
          $this->db->set('ref_id',$_GET['ref_id']);
          $this->db->where('id',$_GET['id']);
          $this->db->update('users');
           $data['id']=$_GET['id'];


$this->load->view('admin/add_refid',$data);
   }



}else{

  $data['id']=$id;


$this->load->view('admin/add_refid',$data);



}
  




}
public function edit_user($id=""){

if(isset($_GET['submit'])){
          $data = array(
                'name' => $this->input->get('name'),
                'email' => $this->input->get('email'),
                
                                
);

    $this->db->set($data);
$this->db->where('id', $_GET['id']);
$this->db->update('login');


if($this->db->error()['code']==0){
    $this->session->set_flashdata('successs',' Updated Successfully' );
    redirect('admin_dashboard/showusers');
}else{
    $this->session->set_flashdata('errorr','Couldn\'t Update' );
    redirect('admin_dashboard/showusers');
}


 }






else{

                    $this->db->from("login");
                    $this->db->where('id',$id);
                    $this->db->order_by("is_enable" , "desc");
                    $result = $this->db->get()->result();

                    $data["entries"] = $result;
                   
                    $this->load->view('admin/edit_user',$data);
}
}

public function showlocations(){
  $this->db->from("locations");
                    $this->db->order_by("location_id" , "asc");
                    $result = $this->db->get()->result();

                    $data["entries"] = $result;
                   
        $this->load->view('admin/locations',$data);
}

public function addlocation(){
         if(isset($_GET['submit'])){
               $query = $this->db->query("select location from locations where location = '".$_GET['location']."'");

                     
        
          
             if ($query->result()[0]->location)
        {
            $this->session->set_flashdata('errorr',' Location Already Exists' );
          redirect('admin_dashboard/showlocations');
        }
        else
        {
            // load success template...
            $this->session->set_flashdata('successs',' Added Successfully' );

             $data = array(
                'location' => ucfirst($this->input->get('location')),
                
                
);

    $this->db->set($data);

$this->db->insert('locations', $data);
  redirect('admin_dashboard/showlocations');

        }
 

}else{

    $this->load->view('admin/addlocation');
}
}

public function addquestions(){



           $this->db->from("locations");
          $this->db->order_by("location_id" , "asc");
          $result = $this->db->get()->result();
           $data["entries"] = $result;
   

           if(isset($_GET['submit'])){
                    
              if($this->input->get('answer')){
                 $array = $this->input->get('answer');
                $key = array_search('1', $array);
              }             
               else{
                  $this->session->set_flashdata('error','Select an answer');
                  redirect('admin_dashboard/addquestions');
                  
               }


               $data = array(
                'question' => $this->input->get('question'),
                'location_id' => $this->input->get('location_id'),
                'options' => json_encode($this->input->get('options')),
                'answer' => $key,
                  
              );


             $this->db->set($data);

            $this->db->insert('questions', $data);
              
              $this->session->set_flashdata('success','question added Successfully');
               redirect('admin_dashboard/addquestions');

            


           }



        $this->load->view('admin/addquestion',$data);


}


  public function showquestions(){
     
      $query=$this->db->query('SELECT location,question FROM locations INNER JOIN questions ON locations.location_id = questions.location_id');           
      $result = $query->result();
      $data['question'] = $result;                

      $query=$this->db->query(' SELECT location FROM locations INNER JOIN questions ON locations.location_id = questions.location_id GROUP BY locations.location');
      $result = $query->result();
      $data["location"] = $result;             
      
      $this->load->view('admin/questions',$data);
}



}