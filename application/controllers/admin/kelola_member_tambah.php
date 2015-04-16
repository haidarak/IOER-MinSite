<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelola_Member_Tambah extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->kelola();
		//redirect("/admin/kelola_member/kelola");
	}
	public function kelola()
	{
        $this->load->library('grocery_CRUD');

        $listMember = new grocery_CRUD();

        $listMember->set_table('members')
            ->set_subject('Daftar Member');
        $listMember->set_relation('user_id', 'users', 'nama');
        $listMember->columns('user_id','status_member','jenis_kelamin','tanggal_lahir');
        // $listMember->display_as('user_id', 'Nama');
        $listMember->display_as('nama', 'Nama');
        $listMember->display_as('email', 'Email');
        $listMember->display_as('status_member', 'Status');
        $listMember->display_as('jenis_kelamin', 'Laki-Laki/Perempuan');
        $listMember->display_as('pt_asal', 'Perguruan Tinggi Asal');
        $listMember->display_as('nim_asal', 'NIM Asal');
        $listMember->display_as('tanggal_lahir', 'Tanggal Lahir');
        // $listMember->set_crud_url_path('tambah_member');
        $listMember->fields('email','nama','phone_number','password','user_id','status_member','jenis_kelamin','tempat_lahir','tanggal_lahir','pekerjaan','alamat','provinsi','kabupaten_Kota','kodepos','kewarnegaraan','nim_asal','jurusan_asal','pt_asal');
        //hide field user_id
        // $listMember->change_field_type('user_id','invisible');

        $listMember->field_type('jenis_kelamin','dropdown',
            array('1' => 'laki-laki', '2' => 'perempuan'));

        $listMember->callback_field('user_id',function () {
        	return '';
   		});
        $listMember->callback_field('email',function () {
        	return '<input type="email" maxlength="30" value="" name="email">';	
   		});
   		$listMember->callback_field('nama',function () {
        	return '<input type="text" maxlength="40" value="" name="nama">';
   		});
   		$listMember->callback_field('phone_number',function () {
        	return '<input class="numeric" type="text" maxlength="30" value="" name="phone_number">';
   		});
   		$listMember->callback_field('password',function () {
        	return '<input type="password" maxlength="30" value="" name="password">';
   		});

   		//buat edit
   		//$crud->required_fields('email','nama','phone_number','password');

   		$listMember->callback_before_insert(array($this,'insert_user'));
   		$listMember->unset_edit();
   		$listMember->unset_delete();

        $output = $listMember->render();
        $this->load->view('admin/kelola_member_tambah', $output);
	}
	
	function insert_user($post_array) {
		$u = new User;
		$u->email=$post_array['email'];
		$u->nama=$post_array['nama'];
		$u->phone_number=$post_array['phone_number'];
		$u->password=md5($post_array['password']);
		//$u->required_fields('email','nama','phone_number','password');
		$u->save();
		//echo $u->id;
		//echo "masuk coy";

		$post_array['user_id']=$u->id;
		unset($post_array['email']);
		unset($post_array['nama']);
		unset($post_array['phone_number']);
		unset($post_array['password']);
		return $post_array;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */