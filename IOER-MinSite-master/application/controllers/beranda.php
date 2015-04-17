<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('beranda_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */