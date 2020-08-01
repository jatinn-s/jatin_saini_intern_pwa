<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
    
    
    public function __construct()  
    {  
        parent::__construct();  
  
        //calling model  
        $this->load->model("Modelname", "a");  
        $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('hello.php');
		
	}

	public function newpage(){
		redirect("hello/index");
	}

	public function addrecipe(){
		$this->load->view('addrecipe.php');
	}

	public function data(){
		$data = array(  
                        'recipename'  => $this->input->post('rname'),  
                        'description' => $this->input->post('desc'),  
                        'name' => $this->input->post('name'),  
                        );  
        //insert data into database table.  
        $this->db->insert('users',$data);  
        
        redirect("hello/addimage");
	}


    public function addimage(){
        $this->load->view('addimage.php');	
    }

	public function delete(){
		$id=$this->input->post('del');
		$this->db->where('id', $id);
        $this->db->delete('users');

        redirect("hello/index");
	}

	public function update(){
	    $id=$this->input->post('upd');
        $this->load->model("Modelname");
        $data["id"]= $id;
        $data["user_data"]= $this->Modelname->fetchsdata($id);

        $this->load->view('updaterecipe',$data);	
	}
     
    public function confirmupdate(){
        $data = array(  
                        'recipename'  => $this->input->post('rname'),  
                        'description' => $this->input->post('desc'),  
                        'name' => $this->input->post('name'),  
                        );
        $id=$this->input->post('upid');
        $this->db->where('id', $id);
        $this->db->update('users', $data);

        redirect("hello/addimage");
    }

    public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('addimage', $error); 
         }

         else { 
            $data = array('upload_data' => $this->upload->data());
            $name = $this->input->post('yname');
            $sdata = array('image' => $data['upload_data']['file_name'] );
            $this->db->where('name',$name);
            $this->db->update('users',$sdata);
            $this->load->view('upload_success', $data); 
         } 
      } 

}












