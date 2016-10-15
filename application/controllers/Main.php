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
        $error='';
        $this->load->library('image_lib');



    }
    function home(){

        if($this->session->userdata('logged_in')){
            $data['post']= $this->user_model->get_post();
            $this->load->view('home',$data);
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
          if($this->session->userdata('logged_in')){
            $data['post']= $this->user_model->explore();
            $this->load->view('explorenew',$data);
        }else{

            $this->load->view('explore');
        }  
        
    } 
    function exploredetails($id=0){
        $data['post']= $this->user_model->post_details($id);
        $this->load->view('exploredetails',$data);
    }

    function compete(){
        $this->load->view('compete');
    }

    function competedetails(){
       $this->load->view('competedetails');
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

function profile($name='')
{
    if($this->session->userdata('logged_in')){
   $data['user'] = $this->user_model->profile($name);

                    $user=$this->user_model->get_userid($name);
                    $id1=$user['user_id'];
                    $id2= $this->session->userdata('user_id');
                    $check = "SELECT * FROM follow where user_id = '$id2' AND followee_id = '$id1'";
                    $query = $this->db->query($check);

                    if($query->num_rows()>0)
                    {
                        $data['following']= TRUE;
                        }
                    else{
                        $data['following']= FALSE;
                    }    
    $this->load->view('profile',$data);
}
else
{
    redirect('main/login');
}

}
function follow($id)
{

        $this->user_model->follow($id);
        $name= $this->user_model->get_uname($id);
        redirect('main/profile/'.$name['uname']);

    
}
function unfollow($id)
{
    $this->user_model->unfollow($id);
        $name= $this->user_model->get_uname($id);
        redirect('main/profile/'.$name['uname']);
    
}


public function post_upload(){

    if($this->input->post('submit'))
    {  
        $this->load->library('form_validation');
        $this->form_validation->set_rules('post_title', 'title',  'required');
        if($this->form_validation->run()== FALSE)
        {
            $this->load->view('post_upload',array('error' => ' ' ));
        }
        else
        {

            $file_name = $this->user_model->new_post();

            $config =  array(
              'upload_path'     => "./uploads/post",
              'allowed_types'   => "jpg|png|jpeg",
              'overwrite'       => TRUE,
                  'max_size'        => "2048",  // Can be set to particular file size
                  'max_height'      => "4096",
                  'max_width'       => "4096" ,
                  'file_name'       =>  $file_name
                  );  

            $this->load->library('upload', $config);
            if($this->upload->do_upload())
            {


                $data = array('upload_data' => $this->upload->data());

                   //FOr Main Image

                $this->user_model->add_file($data['upload_data'],$file_name);

                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/post/'.$data['upload_data']['file_name'];
                    //$config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width']     = 577;
                $config['height']   = 552;
                $this->image_lib->clear();
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                    //For Thumbnail

                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/post/'.$data['upload_data']['file_name'];
                    //$config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['new_image'] = './uploads/post/thumb/'.$data['upload_data']['file_name'];
                $config['width']     = 269;
                $config['height']   = 261;




                $this->image_lib->clear();
                $this->image_lib->initialize($config);
                $this->image_lib->resize();





                redirect('main/home');
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                $this->user_model->delete_post($file_name);
                $this->load->view('post_upload', $error);
            }  


        }
    }
    else{
        $this->load->view('post_upload',array('error' => ' ' ));
    }  
}




}
?>