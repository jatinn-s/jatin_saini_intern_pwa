<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Modelname extends CI_Model {  
  
    function __construct()  
    {  
        parent::__construct();  
    }     
          
        function fetchtable()  
        {  
            $query = $this->db->get('users');  
            return $query->result();  
        }  

        function fetchsdata($id){
            $this->db->where('id',$id);
            $query=$this->db->get('users');
            return $query->result();
        }
}  
?> 