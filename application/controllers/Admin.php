<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('contact_form','', TRUE);
	}

	public function index()
	{
		$this->data['title'] = 'Login';
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if ($this->form_validation->run())
		{
			$login = $this->login($this->input->post('username'), $this->input->post('password'));

			if($login)
			{
				redirect('/admin/edit', 'refresh');
			}
			else 
			{
				$this->data['message']= 'Invalid username/password';
			}
		}
		
		$this->load->view('admin', $this->data);
	}
	
	public function edit()
	{
		$this->data['title'] = 'Admin Panel';

		if ($this->session->userdata('user_session'))
		{
			$this->data['contacts'] = $this->contact_form->get_contacts();
			$this->data['contents'] = $this->contact_form->get_content();
			$this->load->view('admin/edit', $this->data);
		}
		else
		{
			redirect('/admin', 'refresh');
		}
	}
	
	private function login($username, $password)
	{
		$this->db->select('id, username');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$this->db->limit(1);
	
		$query = $this->db->get();
	
		if($query->num_rows() == 1)
		{
			$sess_array = array(
				'id' => $user->id,
				'username' => $user->username
			);
			
			$this->session->set_userdata('user_session', $sess_array);
			return $query->row();
		}
		else
		{
			return false;
		}
	}
}
