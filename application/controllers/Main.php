<?php
class Main extends CI_Controller {
       
    function __construct()
    {
        parent:: __construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->model('user_model');

        $data['error']='';

    }
    function home(){

        if($this->session->userdata('logged_in')){
        $this->load->view('home');
        }else{
            $this->load->view('main');
        }

    }

    function signup(){

        
        $this->load->model('user_model');

        $this->load->database();
        
        if($this->session->userdata('logged_in'))
        {
            redirect('main/home');
        }
        else    
        {
        
        $data['error'] = '';

        if($this->input->post('submit'))
        {
        
            $this->load->library('form_validation');
            $this->form_validation->set_rules('uname', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email',  'required|valid_email');
            $this->form_validation->set_rules('pwd', 'Password', 'required|matches[cpwd]');
            $this->form_validation->set_rules('cpwd', 'Confirm Password', 'required');  
        
            if($this->form_validation->run() == FALSE) 
            {
             
                $this->load->view('register',$data);
            }

            else
            {
                    
                    $username = $this->input->post('uname');
                    $email = $this->input->post('email');
                    $check = "SELECT * FROM user where uname = '$username' OR email = '$email'";
                    $query = $this->db->query($check);
                
                if($query->num_rows()>0)
                {
                    $data['error'] = "The username or email address you entered is already in use <br/>";
                    $this->load->view('register',$data);
                }
                else
                {
                    $salt = $this->user_model->generate_salt();
                    $new_pwd =$this->user_model->encrypt($salt,$this->input->post('pwd'));
                    $user = $this->user_model->new_user($salt,$new_pwd);

                    redirect('main/login');
                }   
            }

        }
        
        else    
        {
                $this->load->view('register',$data);
        }
        }
    }

    function login(){

        $data['error']='';
        if($this->session->userdata('uname'!=""))
        {
            redirect('main/home');
        }
        
        $session_set_value = $this->session->all_userdata();

        if (isset($session_set_value['remember_me']) && $session_set_value['remember_me'] == "1") 
        {           
                    redirect('main/home');
        }
        else
        {

            if($this->input->post('login_sub'))
            {
                
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', 'Email',  'required|valid_email');
                $this->form_validation->set_rules('pwd', 'Password', 'required');

                if($this->form_validation->run()== FALSE)
                {
                    $this->load->view('login',$data);
                }
                else
                {
                    $email = $this->input->post('email');
                    $pwd = $this->input->post('pwd');
                    $res = $this->user_model->login_user($email,$pwd);
                    if($res)
                    {
                        $role = $this->session->userdata('role');
                        $remem = $this->input->post('remember_me');
                        if($remem)
                        {
                        $this->session->set_userdata('remember_me', TRUE);
                        }
                        if($role=='admin')
                        {   
                            redirect('main/home');
                        }
                        else
                        {
                            redirect('main/home');
                        }
                    }

                    else
                    {
                        $data['error'] = "Error occured. Try logging in again! </br>";
                        $this->load->view('login',$data);
                    }
                }

            }

            else
            {
                $this->load->view('login',$data);

            }
        }

    }

    function explore(){

        $this->load->view('explore');
    } 

    function compete(){
        $this->load->view('compete');
    }

    function logout()
    {
        $data = array(
            'user_id'=>'',
            'uname' => '',
            'email' => '',
            'logged_in' => FALSE,);
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('main/home');

    }

    function profile()
    {
        $this->load->view('profile');

    }



}
?>