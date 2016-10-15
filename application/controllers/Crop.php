<?php
/**
 * Description of crop
 *
 * @author PHP Ecosystem
 * @link    http://www.phpecosystem.com/
 */
class Crop extends CI_Controller {

    public function  __construct() {
        parent::__construct() ;
        $this->load->helper(array('form', 'url'));
        $this->load->library('image_moo') ;
    }

    public function index() {
        $data['upload_path']        = $upload_path          = "./upload/real/" ;
        $data['destination_thumbs'] = $destination_thumbs   = "./upload/thumbs/" ;

        $data['large_photo_exists'] = $data['thumb_photo_exists'] = $data['error'] = NULL ;
        $data['thumb_width']        = "100";
        $data['thumb_height']       = "100";
        
        if (!empty($_POST['upload'])) {
            $config['upload_path']  = $upload_path ;
            $config['allowed_types']= 'gif|jpg|png|jpeg';
            $config['max_size']     = '2000';
            $config['max_width']    = '2000';
            $config['max_height']   = '2000';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload("image")) {
                $data['img']	 = $this->upload->data();
                $data['large_photo_exists']  = "<img src=\"".base_url() . $upload_path.$data['img']['file_name']."\" alt=\"Large Image\"/>";
            }
        }
        elseif (!empty($_POST['upload_thumbnail'])) {
            $x1 = $this->input->post('x1',TRUE) ;
            $y1 = $this->input->post('y1',TRUE) ;
            $x2 = $this->input->post('x2',TRUE) ;
            $y2 = $this->input->post('y2',TRUE) ;
            $w  = $this->input->post('w',TRUE) ;
            $h  = $this->input->post('h',TRUE) ;

            $file_name = $this->input->post('file_name',TRUE) ;
            
            if ($file_name) {
                $this->image_moo
                    ->load($upload_path . $file_name)
                    ->crop($x1,$y1,$x2,$y2)
                    ->save($destination_thumbs . $file_name) ;

                if ($this->image_moo->errors) {
                    $data['error'] = $this->image_moo->display_errors() ;
                }
                else {
                    $data['thumb_photo_exists'] = "<img src=\"".base_url() . $destination_thumbs . $file_name."\" alt=\"Thumbnail Image\"/>";
                    $data['large_photo_exists'] = "<img src=\"".base_url() . $upload_path.$file_name."\" alt=\"Large Image\"/>";
                }
            }

        }
        
        $this->load->view('crop_form',$data) ;
    }
}