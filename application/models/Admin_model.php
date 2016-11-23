		<?php
		class Admin_model extends CI_Model
		{
			
			function admin_model()
			{
				# code...
				parent:: __construct();
				$this->load->helper('date');
			}

			function new_competition()
			{
				$data = array( 'c_title' => $this->input->post('c_title'),
								'c_des' => $this->input->post('c_des'),
								'c_host' => $this->input->post('c_host'),
								'c_lastdate' => date('Y-m-d', strtotime($this->input->post('c_lastdate'))),
								'c_prize' => $this->input->post('c_prize'),
								'c_category' => $this->input->post('c_category'),
								
								);
				$this->db->insert('competition',$data);
				$id =$this->db->insert_id();
				$path = "uploads/competition/".$id;
				mkdir($path,0755,TRUE);

			}

			function delete_competition()
			{
				$this->load->database();
				$data = array('flag' =>'1');
				$this->db->where('c_id',$this->input->post('comp_id'));
				$this->db->update('competition',$data);
			}
			
			function get_competition($id)
			{
				$this->load->database();
				$this->db->select('*');
				$this->db->from('competition');
				$this->db->where(array('c_id' =>$id,));
				$query = $this->db->get();
				return $query->result();
			}

			function edit_competition($id)
			{
				$data = array( 'c_title' => $this->input->post('c_title'),
								'c_des' => $this->input->post('c_des'),
								'c_host' => $this->input->post('c_host'),
								'c_lastdate' => date('Y-m-d', strtotime($this->input->post('c_lastdate'))),
								'c_prize' => $this->input->post('c_prize'),
								'c_category' => $this->input->post('c_category'),
								
								);
				$this->db->where('c_id',$id);
				$this->db->update('competition',$data);

			}

			function results()
			{
				$data = array( 'c_id' => $this->input->post('comp_id'),
								'winner_id' => $this->input->post('winner_id'),
								'position' => $this->input->post('pos'),
								);
				$this->db->insert('result',$data);

				$data = array('result_flag' =>'1');
				$this->db->where('c_id',$this->input->post('comp_id'));
				$this->db->update('competition',$data);
			}

			function category()
			{
				$this->load->database();
				$this->db->select('*');
				$this->db->from('category');
				$query = $this->db->get();
				return $query->result();
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
			function new_admin($salt,$new_pwd)
			{
				$data = array( 'uname' => $this->input->post('uname'),
								'email' => $this->input->post('email'),
								'image' => 'default.png',
								'pwd' => $new_pwd,
								'salt' => $salt,
								'role' =>'admin',
								);
				$this->db->insert('user',$data);
				$this->db->select('user_id');
				$this->db->from('user');
				$this->db->where(array('uname'=> $this->input->post('uname')));
				$id = $this->db->get();
				return $id->row_array();

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
			function suspend()
			{
				$this->load->database();
				$data = array('active' =>'0');
				$this->db->where('user_id',$this->input->post('user_id'));
				$this->db->update('user',$data);

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

	function delete_post($id)
	{
		$this->db->where('post_id', $id);
   		$this->db->delete('post'); 
	}

	function post_flag()
	{
		$this->load->database();
				$data = array('flag' =>'1');
				$this->db->where('post_id',$this->input->post('post_id'));
				$this->db->update('post',$data);
	}

		}

		?>