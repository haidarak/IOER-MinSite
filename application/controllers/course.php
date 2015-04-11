<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {

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
//        $u = new Course();
//        $u->get();
//        // echo $u;
//       foreach( $u->get() as $i)
//       {
//       		$i->layanan->get(1,0);
//            echo "Biaya Course :".$i->layanan->Biaya."<br>";
//            //print_r($i->layanan->get());
//            echo "Nama Course :".$i->Nama."<br>";
//
//            // print_r($i->layanan);
//       }
//
//       $l = new layanan();
//       $l->get(1,0);
//       echo "Biaya Layanan: ".$l->Biaya.'<br>';
//
//       $lc = new Layanan_Course();
//       $lc->get(1,0);
//       echo "Layanan - Course: ".$lc->Layanan_id.' - '.$lc->Course_id.'<br>';
//
//        $data['courses']=$u;
        $this->load->view('course_view.php');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */