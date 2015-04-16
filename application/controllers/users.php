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
			$this->session->sess_destroy();
			echo "logged out";
		}
		else
		{
			$this->load->view("register_view2");
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
			// echo $u->email;
			if($u->result_count()==1)
			{
				// echo "nemunya, email: ".$u->email." pass: ".$u->password;
				$userdata = array(
					'email'  => $u->email,
					'flag'    => $u->flag,
					'nama'    => $u->nama,
					);
				$this->session->set_userdata($userdata);
				// echo "berhasil login email: ".$this->session->userdata('email').$this->session->userdata('flag');
				// $this->load->view('beranda_view');
				redirect('/courses');
				// $this->session->sess_destroy();
			}
			else{
				$data['notif']="Login Gagal";
				$data['notifmsg']="Kombinasi email & password salah";
				$this->load->view('beranda_view',$data);
			}
		}
	}


	public function register()
	{
		$this->load->view('register_view2');//loads the register_view2.php file in views folder
	}

	public function do_register()
	{
		// $rules = array(
		// 	array('field'=>'r_nama','label'=>'Nama','rules'=>'trim|required|min_length[4]|max_length[12]'),
		// 	array('field'=>'r_password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
		// 	);
		// $this->form_validation->set_rules($rules);
		// if($this->form_validation->run() == FALSE)
		// {
		// 	echo "gagal validation";
		// 	$this->load->view('register_view2');
		// }
		// else
		// {
			$u = new User();

			$u->nama = $this->input->post('r_nama');
			$u->email = $this->input->post('r_email');
			$u->password = md5($this->input->post('r_password'));
			$u->phone_number = $this->input->post('r_phone');
			$u->flag = 1;


			// echo "inputnya ".$u->nama.$u->email.$u->password.$u->phone_number.$u->flag;

			if ($u->save()){
				$m = new Member();
				$m->user_id=$u->id;
				$m->save();
				// echo $u->id;

				$data['notif']="Pendaftaran Berhasil";
				$data['notifmsg']="Selamat datang <b>".$u->nama."</b>. Silahkan login!";
				$this->load->view('beranda_view',$data);
			} else {
				$data['notif']="Pendaftaran gagal";
				$data['notifmsg']="Silahkan periksa input<br>".$u->error->string;
				$this->load->view('register_view',$data);
			}
		// }
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("beranda");
	}
}