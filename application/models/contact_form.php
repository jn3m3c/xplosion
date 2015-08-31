<?php
Class Contact_form extends CI_Model
{
	
	function insert_contact()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'comments' => $this->input->post('comments')
		);
		
		$this->db->insert('contact', $data);
	}
	
	function get_contacts()
	{
		$this->db->from('contact');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function get_content()
	{
		$this->db->from('content');
		$query = $this->db->get();
		return $query->result_array();
	}	
	
	function get_content_block($title)
	{
		$this->db->from('content');
		$query = $this->db->get();
		$this->db->where(array('title' => $title));
		return $query->row_array();
	}
}
