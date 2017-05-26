<?php

class Users_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database("project_x");
	}

	public function get_all_users()
	{
		$query = $this->db->get('products');
		return $query->result();
	}

	public function get_all_cartitems()
	{
		$query = $this->db->get('cart');
		return $query->result();
	}

	public function insert_users_to_db($data)
	{
		return $this->db->insert('products', $data);
	}

	public function getByID($id) 
	{
		$query = $this->db->get_where('products',array('id'=>$id));
		return $query->row_array();
	}

	public function update_info($data,$id)
	{
		$this->db->where('products.id',$id);
		return $this->db->update('products', $data);
	}

	public function delete_a_user($id)
	{
		$this->db->where('products.id',$id);
		return $this->db->delete('products');
	}

	public function update_cart($data,$id,$total_stock)
	{
		
		$this->db->insert('cart', $data);
		$updatequery = "UPDATE products SET stock = ? WHERE id = ?";
		return $this->db->query($updatequery,array($total_stock, $id));

	}

}