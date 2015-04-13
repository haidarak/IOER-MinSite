<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelola_Member extends CI_Controller {

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
        $this->load->library('grocery_CRUD');

        $listMember = new grocery_CRUD();

        $listMember->set_table('members')
            ->set_subject('Daftar Member');
        $listMember->set_relation('user_id', 'users', 'id');
        $listMember->columns('user_id','nama','email','status_member','jenis_kelamin','tanggal_lahir');
        $listMember->display_as('user_id', 'ID');
        $listMember->display_as('nama', 'Nama');
        $listMember->display_as('email', 'Email');
        $listMember->display_as('status_member', 'Status');
        $listMember->display_as('jenis_kelamin', 'Laki-Laki/Perempuan');
        $listMember->display_as('pt_asal', 'Perusahaan Asal');
        $listMember->display_as('nim_asal', 'NIM Asal');
        $listMember->display_as('tanggal_lahir', 'Tanggal Lahir');
        $listMember->set_crud_url_path('tambah_member');


        $output = $listMember->render();
        $this->load->view('admin/kelola_member', $output);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */