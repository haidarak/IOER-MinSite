<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

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
      $c = new Course();
      $c->get();
      // foreach( $c->get() as $i)
      // {
      // 		$i->layanan->get(1,0);
      //      echo "Nama Course :".$i->nama."<br>";
      //      echo "Biaya Course :".$i->layanan->biaya."<br>";
      // }

      // $c->get(1,2);
      // $c->layanan->;
        
      // foreach( $c->get() as $i)
      // {
      //   echo "Nama Course :".$i->nama."<br>";
      //   echo "Layanannya ada :".$i->layanan->count()."<br>";
      //   foreach ($i->layanan->get() as $key => $l) {
      //     echo $i->nama." punyanya ".$l->nama."<br>";
      //     $l->penyedialayanan->get();
      //     echo "penyedianya: ".$l->penyedialayanan->institusi."<br>";
      //     }
      // }

      $data['courses']=$c;
      $this->load->view('course_view.php', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */