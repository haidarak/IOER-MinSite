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
        $u = new Course();
        $u->get();
       // foreach( $u->get() as $i)
       // {
       // 		$i->layanan->get(1,0);
       //      echo "Nama Course :".$i->nama."<br>";
       //      echo "Biaya Course :".$i->layanan->biaya."<br>";
       // }

        // $u->get(1,2);
        // $u->layanan->



        $data['courses']=$u;
        $this->load->view('course_view.php', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */