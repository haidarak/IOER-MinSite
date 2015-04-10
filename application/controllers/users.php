<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('user');
	}

	public function index()
	{
		if(($this->session->userdata('email')!=""))
		{
			echo "logged in";
			// redirect(site_url('home'));
		}
		else
		{
			$this->load->view("register_view");
		}
	}

	public function login()
	{
		$rules = array(array('field'=>'l_email','label'=>'Email','rules'=>'required|valid_email'),
			array('field'=>'l_pass','label'=>'Password','rules'=>'required'));
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$u = new User();
			$u->where("Email",$this->input->post('l_email'));
			$u->where("Password",md5($this->input->post('l_pass')));
			$u->get();

			// $u->get(1,0);
			// echo $this->input->post('l_email');
			// echo md5($this->input->post('l_pass'));
			// echo $u->result_count();
			// echo $u->Email;
			if($u->result_count()==1)
			{
				// echo "nemunya, email: ".$u->Email." pass: ".$u->Password;
				$userdata = array(
					'email'  => $u->Email,
					'flag'    => $u->Flag,
					);
				$this->session->set_userdata($userdata);
				echo "berhasil login email: ".$this->session->userdata('email').$this->session->userdata('flag');
				// $this->session->sess_destroy();
			}
			$this->load->view('register_view');
		}
	}


	public function register()
	{
		$this->load->view('register_view');//loads the register_view.php file in views folder
	}

	public function do_register()
	{
		$rules = array(
			array('field'=>'nama','label'=>'Nama','rules'=>'trim|required|min_length[4]|max_length[12]'),
			array('field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
			);
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('register_view');
		}
		else
		{
			$u = new User();

			$u->Name = $this->input->post('nama');
			$u->Email = $this->input->post('email');
			$u->Password = md5($this->input->post('password'));
			$u->Phone_Number = $this->input->post('phone');
			$u->Flag = 1;

			$u->save();
			echo "berhasil di register ".$u->Name.$u->Email.$u->Password.$u->Phone_Number.$u->Flag;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}
}