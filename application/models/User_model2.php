<?php
/**
* 
*/
class User_model extends CI_Model
{
	
	function user_model()
	{
		# code...
		parent:: __construct();
		$this->load->helper('date');
	}

	function generate_salt()
	{
		$salt='';
		$chars = "abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789!?=/&+,.";

		for($i=0;$i<8;$i++)
		{
			$c= mt_rand(0,strlen($chars)-1);
			$salt.=$chars{$c};
		}

		return $salt;
	}

	function encrypt($salt,$pwd)
	{
		return sha1(md5($pwd).$salt);

	}

	function login_user($email,$pwd)
	{
		$this->load->library('session');
		$this->load->database();
		$nquery = $this->db->get_where('user',array('email' => $email ));
		if($nquery->num_rows() == 1)
		{
			$rows = $nquery->row();

				$salt = $rows->salt;
				$enc_pass = $rows->pwd;
				if($this->encrypt($salt,$pwd)==$enc_pass && $rows->active =='1')
				{

				$logdata = array(
					'user_id'=>$rows->user_id,
					'uname' => $rows->uname,
					'image' => $rows->image,
					'email' => $rows->email,
					'role' => $rows->role,
					'image'=> $rows->image,
					'logged_in' => TRUE,);

				$this->session->set_userdata($logdata);
				return TRUE;
				}
		}

		return FALSE;

	}

	function new_user($salt,$new_pwd)
	{
		$data = array( 'uname' => $this->input->post('uname'),
						'email' => $this->input->post('email'),
						'image' => 'default.png',
						'pwd' => $new_pwd,
						'salt' => $salt,
						'role' =>'user',
						);
		$this->db->insert('user',$data);
		$this->db->select('user_id');
		$this->db->from('user');
		$this->db->where(array('uname'=> $this->input->post('uname')));
		$id = $this->db->get();
		return $id->row_array();

	}
	function new_post()
	{
		$this->load->database();
		$post_date = date('d-m-Y H:i:s');
		$data = array( 'post_des' => $this->input->post('post_des'),
						'post_image' => '',
						'post_title' => $this->input->post('post_title'),
						'post_by' => $this->session->userdata('user_id'),
						'post_date' =>  date('Y-m-d H:i:s', strtotime($post_date)),);
		$this->db->insert('post',$data);
		$id =$this->db->insert_id();
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->set('no_posts', 'no_posts + 1', FALSE);
		$this->db->update('user');
		/*$this->db->select('post_id');
		$this->db->from('post');
		$this->db->where(array('post_des'=> $this->input->post('post_des'),));
		$id = $this->db->get()->row()->post_id;*/

		return $id;
		
	}

	function get_userid($name)
	{
		$this->load->database();
		$this->db->select('user_id');
		$this->db->from('user');
		$this->db->where(array('uname'=> $name));
		$id = $this->db->get();
		return $id->row_array();

	}

	function get_uname($id)
	{
		$this->load->database();
		$this->db->select('uname');
		$this->db->from('user');
		$this->db->where(array('user_id'=> $id));
		$id = $this->db->get();
		return $id->row_array();
	}
	
	function add_file($file,$id)
	{
		$this->load->database();
		$data = array('post_image' =>$file['file_name']);
		$this->db->where('post_id',$id);
		$this->db->update('post',$data);
	}

	function add_pic($file,$id)
	{
		$this->load->database();
		$data = array('image' =>$file['file_name']);
		$this->db->where('user_id',$id);
		$this->db->update('user',$data);
	}

	function delete_post($id)
	{
		$this->db->where('post_id', $id);
   		$this->db->delete('post'); 
	}
	
	function get_post()
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('user','user.user_id = post.post_by','inner');
		$this->db->join('follow','follow.followee_id = post.post_by','inner');
		$this->db->where(array('follow.user_id'=>$this->session->userdata('user_id'),'flag'=>'0',));
		$this->db->order_by('post_date',"desc");
		$query = $this->db->get();
		return $query->result();

	}

	function get_userpost($id)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('user','user.user_id = post.post_by','inner');
		$this->db->where(array('user_id' =>$id,'flag'=>'0',));
		$this->db->order_by('post_date',"desc");
		$query = $this->db->get();
		return $query->result();

	}

	function post_details($id)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('user','user.user_id = post.post_by','inner');
		$this->db->where(array('post_id' =>$id,'flag'=>'0',));
		$query = $this->db->get();
		return $query->result();

	}
	function explore()
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('user','user.user_id = post.post_by','inner');
		$this->db->where('post.post_by != ',$this->session->userdata('user_id'),FALSE);
		$this->db->where(array('flag'=>'0',));
		$this->db->order_by('post_date',"desc");
		$query = $this->db->get();
		return $query->result();

	}

	function compete($cat)
	{
		$this->load->database();
		if($cat=='All'){
		$this->db->select('*');
		$this->db->from('competition');
		$this->db->where(array('flag'=>'0',));
		$this->db->order_by('c_lastdate',"desc");
		$query = $this->db->get();
		}
		else{
		$this->db->select('*');
		$this->db->from('competition');
		$this->db->where(array('flag'=>'0','c_category'=>$cat));
		$this->db->order_by('c_lastdate',"desc");
		$query = $this->db->get();
		}
		return $query->result();
	}

	function competedetails($id)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('competition');
		$this->db->where(array('c_id' =>$id,'flag'=>'0',));
		$query = $this->db->get();
		return $query->result();
	}

	function submission()
	{
		$this->load->database();
		$this->db->where('c_id',$this->session->userdata('c_id'));
		$this->db->set('c_registrants', 'c_registrants + 1', FALSE);
		$this->db->update('competition');
		$data = array( 'user_id'=>$this->session->userdata('user_id'),
						'c_id'=>$this->session->userdata('c_id'),
						);
		$this->db->insert('submission',$data);

	}

	function category()
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	function profile($id)

	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('uname' =>$id,));
		$query = $this->db->get();
		return $query->result();

	}
	function update_profile($id=0)
	{
		$this->load->database();
		$data = array( 'languages' => $this->input->post('languages'),
						'areas' => $this->input->post('areas'),
						'location' => $this->input->post('location'),
						'batch' => $this->input->post('batch'),
						'grad' => $this->input->post('grad'),
						);
		$this->db->where('user_id',$id);
		$this->db->update('user',$data);

	}

	function follow($var)
	{
		$this->load->database();
		$data = array( 'user_id'=>$this->session->userdata('user_id'),
						'followee_id'=>$var
						);
		$this->db->insert('follow',$data);

		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->set('following', 'following + 1', FALSE);
		$this->db->update('user');

		$this->db->where('user_id',$var);
		$this->db->set('followers', 'followers + 1', FALSE);
		$this->db->update('user');

	}
	function unfollow($var)
	{
		$this->load->database();
		$this->db->where(array('user_id'=>$this->session->userdata('user_id'),
						'followee_id'=>$var));
   		$this->db->delete('follow');
   		 
   		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->set('following', 'following - 1', FALSE);
		$this->db->update('user');
		$this->db->where('user_id',$var);
		$this->db->set('followers', 'followers - 1', FALSE);
		$this->db->update('user');
	}



	function news()
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('news');
		$query = $this->db->get();
		return $query->result();

	}

	function asked($id=0)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('topic');
		$this->db->where(array('topic_by' =>$id,));
		$query = $this->db->get();
		return $query->result();
	}

	function answered($id=0)
	{

		$this->load->database();
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where(array('post_by' =>$id,));
		$this->db->join('topic','topic.topic_id = post.post_topic','inner');
		$query = $this->db->get();
		return $query->result();	
	}

	function get_topic($id=0)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('topic');
		$this->db->where(array('topic_id' =>$id,));
		$this->db->join('user','user.user_id = topic.topic_by','inner');
		$query = $this->db->get();
		return $query->result();

	}

	function get_tags($id=0)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('topic_tags');
		$this->db->where(array('topic_id' =>$id,));
		$this->db->join('tags','tags.tag_id = topic_tags.tag_id','inner');
		$query = $this->db->get();
		return $query->result();


	}

	function new_tag($tag=0)
	{
		$this->load->database();
		$data = array('tag_name' => $tag);
		$query = $this->db->get_where('tags',array('tag_name' => $tag ));
		if($query->num_rows()== 0)
		{
		$this->db->insert('tags',$data);
		}
		$this->db->select('tag_id');
		$this->db->from('tags');
		$this->db->where(array('tag_name'=> $tag));
		$id = $this->db->get();
		return $id->row_array();
	}


	function new_topic()
	{
		$this->load->database();
		$topic_date = date('d-m-Y H:i:s');
		$data = array( 'topic_sub' => $this->input->post('sub'),
						'topic_content' => $this->input->post('cont'),
						'topic_date' => date('Y-m-d H:i:s', strtotime($topic_date)),
						'topic_by' => $this->session->userdata('user_id'),
						);
		$this->db->insert('topic',$data);

		$this->db->select('topic_id');
		$this->db->from('topic');
		$this->db->where(array('topic_sub'=> $this->input->post('sub'),));
		$id = $this->db->get();
		return $id->row_array();
	}

	function topic_tags($id1=0,$id2=0)
	{
		$this->load->database();
		$data = array('topic_id' => $id1,
					  'tag_id' => $id2);
		$this->db->insert('topic_tags',$data);

	}


	function answer($id=0)
	{
		$this->load->database();
		$this->db->where('topic_id', $id);
		$this->db->set('views', 'views+1', FALSE);
		$this->db->update('topic');
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where(array('post_topic' =>$id,));
		$this->db->join('user','user.user_id = post.post_by','inner');
		$query = $this->db->get();
		return $query->result();
	}

	function new_answer($id=0)
	{
		$this->load->database();
		$post_date = date('d-m-Y H:i:s');
		$data = array( 'post_content' => $this->input->post('post_cont'),
						'post_date' =>  date('Y-m-d H:i:s', strtotime($post_date)),
						'post_by' => $this->session->userdata('user_id'),
						'post_topic'=>$id);
		$this->db->insert('post',$data);
	}

	function getall()
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('topic');
		$this->db->join('user','user.user_id = topic.topic_by','inner');
		$this->db->order_by('views',"desc");
		$query = $this->db->get();
		return $query->result();

	}

}


?>
