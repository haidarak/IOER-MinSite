<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penyedia_Layanan extends CI_Controller {

	public function index() {
        $this->load->view("layanan_ku_view");
    }

}