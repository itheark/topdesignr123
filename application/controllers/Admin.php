<?php
class Admin extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->model('user_model');
        $data['error']='';
        $error='';
        $this->load->library('image_lib');



    }

    function home()
    {
        $this->load->view('admin_home');
    }

}

?>