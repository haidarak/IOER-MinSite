<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelola_Layanan extends CI_Controller {

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

        $listLayanan = new grocery_CRUD();

        $listLayanan->set_table('layanans')
        ->set_subject('Daftar Layanan')
        ->columns('id','nama','jenis','biaya','deskripsi')
        ->display_as('ID', 'Nama', 'Jenis', 'Biaya', 'Deskripsi');
        $listLayanan->set_relation('term', 'terms', 'term_id');

        $output = $listLayanan->render();
        $this->load->view('admin/kelola_layanan', $output);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */