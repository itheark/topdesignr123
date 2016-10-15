<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload extends CI_Controller {    
public function __construct() {
    parent::__construct();   
    $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->model('user_model');

}       
public function file_view(){
    $this->load->view('file_view', array('error' => ' ' ));    
}
public function do_upload(){
     $config =  array(
     			
                  'upload_path'     => "./uploads/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => TRUE,
                  'max_size'        => "9048000",  // Can be set to particular file size
                  'max_height'      => "1024",
                  'max_width'       => "1024"  
                );    
				$this->load->library('upload', $config);
				if($this->upload->do_upload())
				{
					$data = array('upload_data' => $this->upload->data());
					$this->load->view('success',$data);
				}
				else
				{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('file_view', $error);
				}    
}
}
?>