<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelola_Term extends CI_Controller {

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

        $listTerm = new grocery_CRUD();
        $listTerm->set_table('terms')
            ->set_subject('Daftar Term')
            ->columns('id','semester','awal_term','akhir_term');
        $listTerm->display_as('semester', 'Semester');
        $listTerm->display_as('id', 'ID');
        $listTerm->display_as('awal_term','Tanggal Mulai');
        $listTerm->display_as('akhir_term','Tanggal Selesai');
//        $listLayanan->set_relation('term_id', 'terms', 'id');

        $output = $listTerm->render();
        $this->load->view('admin/kelola_term', $output);
        $this->load->view('admin/kelola_term');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */