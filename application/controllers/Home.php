<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('contact_form','', TRUE);
	}

	public function index()
	{
		$this->data['title'] = 'X-PLOSION - SODA FOR SUPERHEROS';
		$this->data['content'] = $this->contact_form->get_content_block('home');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		$this->form_validation->set_rules('comments', 'Comments', 'trim|required');
		
		if ($this->form_validation->run())
		{
			$this->contact_form->insert_contact();
			$this->data['success'] = true;
		}
		
		$this->load->view('homepage', $this->data);
	}
}
