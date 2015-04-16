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
	
	public function index(){
		$this->kelola();
	}

	public function kelola()
	{

        $this->load->library('grocery_CRUD');

        $listLayanan = new grocery_CRUD();

        $listLayanan->set_table('layanans')
        ->set_subject('Daftar Layanan')
        ->columns('id','nama','jenis','biaya','deskripsi','term_id','penyedialayanan_id');
        $listLayanan->display_as('term_id', 'Term');
        $listLayanan->display_as('penyedialayanan_id', 'Penyedia Layanan');
        $listLayanan->display_as('id', 'ID');
        $listLayanan->display_as('penyedialayanan_id', 'Penyedia Layanan');
        $listLayanan->set_relation('term_id', 'terms', 'Semester {semester} - (Periode {awal_term} s/d {akhir_term})');
        $listLayanan->set_relation('penyedialayanan_id', 'penyedialayanans', 'institusi');
        // $listLayanan->unset_jquery();
        // $listLayanan->unset_jquery_ui();
        //$listLayanan->like('nama','Coding');

        $listLayanan->callback_add_field('biaya', function () {
        return 'Rp. <input class="numeric" type="text" value="" name="biaya">';});
        $listLayanan->display_as('biaya', 'Biaya');

        $listLayanan->callback_column('biaya',array($this,'valueToRp'));


        $output = $listLayanan->render();
        $this->load->view('admin/kelola_layanan', $output);
	}

	function valueToRp($value, $row)
	{
		return 'Rp '.$value;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */