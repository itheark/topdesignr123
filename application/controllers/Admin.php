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
    function add_competition()
    {
        $this->load->model('admin_model');

        $this->load->database();
        
        if($this->session->userdata('role')!='admin')
        {
            redirect('main/home');
        }
        else    
        {

            $data['error'] = '';
            $data['cat'] = $this->admin_model->category();
             if($this->input->post('submit'))
            {

                $this->load->library('form_validation');
                $this->form_validation->set_rules('c_title', 'Title', 'required');
                $this->form_validation->set_rules('c_des', 'Description', 'required');
                $this->form_validation->set_rules('c_host', 'Competition Conducted by', 'required');
                $this->form_validation->set_rules('c_lastdate', 'Last Date', 'required');
                $this->form_validation->set_rules('c_prize','Prize', 'required');
                $this->form_validation->set_rules('c_category', 'Category', 'required');
                

                if($this->form_validation->run() == FALSE) 
                {

                    $this->load->view('add_competition',$data);
                }

                else
                {

                        
                        $user = $this->admin_model->new_competition();

                        redirect('admin/home');
                       
                }

            }

            else    
            {
                $this->load->view('add_competition',$data);
            }
        }
    }

    function delete_competition()
    {
         $this->load->model('admin_model');

        $this->load->database();
         $data['error'] = '';
        if($this->session->userdata('role')!='admin')
        {
            redirect('main/home');
        }
        else    
        {
           if($this->input->post('submit'))
            {

                $this->load->library('form_validation');
                $this->form_validation->set_rules('comp_id', 'Competition ID', 'required');
               
                

                if($this->form_validation->run() == FALSE) 
                {

                    $this->load->view('delete_competition',$data);
                }

                else
                {

                        
                        $user = $this->admin_model->delete_competition();

                        redirect('admin/home');
                       
                }

            }

            else    
            {
                $this->load->view('delete_competition',$data);
            }
        }


    }

    function edit_competition()
    {
        $this->load->model('admin_model');

        $this->load->database();
         $data['error'] = '';
        if($this->session->userdata('role')!='admin')
        {
            redirect('main/home');
        }
        else    
        {
            $data['cat'] = $this->admin_model->category();
           if($this->input->post('submit'))
            {

                $this->load->library('form_validation');
                $this->form_validation->set_rules('comp_id', 'Competition ID', 'required');
               
                

                if($this->form_validation->run() == FALSE) 
                {

                    $this->load->view('edit_competition',$data);
                }

                else
                {

                        
                        
                         $this->session->set_userdata(array(
                            'comp_id'       => $this->input->post('comp_id'),));
                        redirect('admin/edit');
                       
                }

            }

            else    
            {
                $this->load->view('edit_competition',$data);
            }
        }

    }

    function edit()
    {
        $this->load->model('admin_model');

        $this->load->database();
        $data['error'] = '';
       
        if($this->session->userdata('role')!='admin')
        {
            redirect('main/home');
        }
        else    
        {
           if($this->input->post('submit'))
            {

                $this->load->library('form_validation');
                $this->form_validation->set_rules('c_title', 'Title', 'required');
                $this->form_validation->set_rules('c_des', 'Description', 'required');
                $this->form_validation->set_rules('c_host', 'Competition Conducted by', 'required');
                $this->form_validation->set_rules('c_lastdate', 'Last Date', 'required');
                $this->form_validation->set_rules('c_prize','Prize', 'required');
                $this->form_validation->set_rules('c_category', 'Category', 'required');
               
                

                if($this->form_validation->run() == FALSE) 
                {
                    $data['comp']= $this->admin_model->get_competition($this->session->userdata('comp_id'));
                    $this->load->view('editcompetition',$data);
                }

                else
                {

                        
                        
                        $user = $this->admin_model->edit_competition($this->session->userdata('comp_id'));

                        redirect('admin/home');
                       
                }

            }

            else    
            {
                $data['comp']= $this->admin_model->get_competition($this->session->userdata('comp_id'));
                $this->load->view('editcompetition',$data);
            }
        }
       
    }

    function results()
    {
        $this->load->model('admin_model');

        $this->load->database();
         $data['error'] = '';
        if($this->session->userdata('role')!='admin')
        {
            redirect('main/home');
        }
        else    
        {
           if($this->input->post('submit'))
            {

                $this->load->library('form_validation');
                $this->form_validation->set_rules('comp_id', 'Competition ID', 'required');
                $this->form_validation->set_rules('winner_id', 'Winner User ID', 'required');
                $this->form_validation->set_rules('pos', 'Position', 'required');
                

                if($this->form_validation->run() == FALSE) 
                {

                    $this->load->view('results',$data);
                }

                else
                {

                        
                        $user = $this->admin_model->results();

                        redirect('admin/home');
                       
                }

            }
            else if($this->input->post('submitnew')){

                $this->load->library('form_validation');
                $this->form_validation->set_rules('comp_id', 'Competition ID', 'required');
                $this->form_validation->set_rules('winner_id', 'Winner User ID', 'required');
                $this->form_validation->set_rules('pos', 'Position', 'required');
                

                if($this->form_validation->run() == FALSE) 
                {

                    $this->load->view('results',$data);
                }

                else
                {

                        
                        $user = $this->admin_model->results();

                        redirect('admin/results');
                       
                }

            }

            else    
            {
                $this->load->view('results',$data);
            }
        }
    }

    function admin_register()
    {


        $this->load->model('admin_model');

        $this->load->database();
        
        if($this->session->userdata('role')!='admin')
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

                    $this->load->view('admin_register',$data);
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
                        $this->load->view('admin_register',$data);
                    }
                    else
                    {
                        $salt = $this->admin_model->generate_salt();
                        $new_pwd =$this->admin_model->encrypt($salt,$this->input->post('pwd'));
                        $user = $this->admin_model->new_admin($salt,$new_pwd);

                        redirect('admin/home');
                    }   
                }

            }

            else    
            {
                $this->load->view('admin_register',$data);
            }
        }
    }

    function user_register()
    {
        $this->load->model('admin_model');

        $this->load->database();
        
        if($this->session->userdata('role')!='admin')
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

                    $this->load->view('user_register',$data);
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
                        $this->load->view('user_register',$data);
                    }
                    else
                    {
                        $salt = $this->admin_model->generate_salt();
                        $new_pwd =$this->admin_model->encrypt($salt,$this->input->post('pwd'));
                        $user = $this->admin_model->new_user($salt,$new_pwd);

                        redirect('admin/home');
                    }   
                }

            }

            else    
            {
                $this->load->view('user_register',$data);
            }
        }
    }

    function suspend()
    {
        $this->load->model('admin_model');

        $this->load->database();
         $data['error'] = '';
        if($this->session->userdata('role')!='admin')
        {
            redirect('main/home');
        }
        else    
        {
           if($this->input->post('submit'))
            {

                $this->load->library('form_validation');
                $this->form_validation->set_rules('user_id', 'User ID', 'required');
               
                

                if($this->form_validation->run() == FALSE) 
                {

                    $this->load->view('suspend',$data);
                }

                else
                {

                        
                        $user = $this->admin_model->suspend();

                        redirect('admin/home');
                       
                }

            }

            else    
            {
                $this->load->view('suspend',$data);
            }
        }
    }

 public function post_upload(){

    if($this->input->post('submit'))
    {  
        $this->load->library('form_validation');
        $this->form_validation->set_rules('post_title', 'title',  'required');
        if($this->form_validation->run()== FALSE)
        {
            $this->load->view('admin_upload',array('error' => ' ' ));
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





                redirect('admin/home');
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                $this->user_model->delete_post($file_name);
                $this->load->view('admin_upload', $error);
            }  


        }
    }
    else{
        $this->load->view('admin_upload',array('error' => ' ' ));
    }  
}
function delete_post()
    {
         $this->load->model('admin_model');

        $this->load->database();
         $data['error'] = '';
        if($this->session->userdata('role')!='admin')
        {
            redirect('main/home');
        }
        else    
        {
           if($this->input->post('submit'))
            {

                $this->load->library('form_validation');
                $this->form_validation->set_rules('post_id', 'Post ID', 'required');
               
                

                if($this->form_validation->run() == FALSE) 
                {

                    $this->load->view('delete_post',$data);
                }

                else
                {

                        
                        $user = $this->admin_model->post_flag();

                        redirect('admin/home');
                       
                }

            }

            else    
            {
                $this->load->view('delete_post',$data);
            }
        }


    }


}

?>