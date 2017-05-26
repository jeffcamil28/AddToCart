<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Users extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index() 
	{
		$data['user_list'] = $this->users_model->get_all_users();
		$this->load->view('show_users', $data);
	}

	public function add_form()
	{
		$this->load->view('insert');
	}

	public function checkout_form()
	{
		$data['cart_list'] = $this->users_model->get_all_cartitems();
		$this->load->view('checkout', $data);
	}

	public function view_cart()
	{
		$data['cart_list'] = $this->users_model->get_all_cartitems();
		$this->load->view('viewcart', $data);
	}

	public function insert_new_user()
	{
		$udata['prodname'] = $this->input->post('prodname');
		$udata['stock'] = $this->input->post('stock');
		$udata['price'] = $this->input->post('price');
		$res = $this->users_model->insert_users_to_db($udata);

		if($res)
		{
			header('location:'.base_url()."index.php/users".$this->index());
		}
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['user'] = $this->users_model->getById($id);
		$this->load->view('edit', $data);
	}

	public function update()
	{
		$mdata['prodname'] = $this->input->post('prodname');
		$mdata['stock'] = $this->input->post('stock');
		$mdata['price'] = $this->input->post('price');
		$res = $this->users_model->update_info($mdata, $_POST['id']);

		if($res)
		{
			header('location:'.base_url()."index.php/users".$this->index());
		}
	}

	public function addtocart()
	{
		$id = $this->uri->segment(3);
		$data['user'] = $this->users_model->getById($id);
		$this->load->view('addtocart', $data);
	}

	public function addtocart1()
	{
		$db_id = $this->input->post('id');
		$db_stock = $this->input->post('stock');
		$db_price = $this->input->post('price');
		$quantity = $this->input->post('quantity');
		$total_stock = $db_stock - $quantity;
		$mdata['ip'] = $_SERVER['SERVER_ADDR'];
		$mdata['prodid'] = $this->input->post('id');
		$mdata['quantity'] = $this->input->post('quantity');
		$mdata['totalprice'] = $db_price * $quantity;

		$res = $this->users_model->update_cart($mdata, $_POST['id'], $total_stock);

		if($res)
		{
			header('location:'.base_url()."index.php/users".$this->index());
		}
	}

	public function delete($id)
	{
		$this->users_model->delete_a_user($id);
		$this->index();
	}

}