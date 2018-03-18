<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rest extends CI_Controller {
function __construct()
    {
         
        parent::__construct();
        

    }
    
    public function getlocation()
    {
         $query = $this->db->query("select * from locations");
         
         $json =json_encode($query->result());

         echo $json;

    }
    public function getquestion(){

        $location_id = $this->input->post('location_id');

        $this->db->select('question');
        $this->db->from('questions');
        $this->db->where('location_id',$location_id);
        $json =json_encode($this->db->get()->result());

         echo $json;

    }
}