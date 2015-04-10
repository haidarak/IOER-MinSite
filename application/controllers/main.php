<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        /* Standard Libraries of codeigniter are required */
        /* ------------------ */ 

        $this->load->library('grocery_CRUD');

    }

    public function index()
    {
        echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
        die();
    }

    public function course()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('course');
        $crud->set_subject('Course');
        // $crud->columns('lastName','firstName','email','jobTitle');
        // $crud->display_as('lastName','Last Name');`
        $output = $crud->render();

        $this->_example_output($output);   
    }

    public function term()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('term');
        $crud->set_subject('Term');
        $output = $crud->render();

        $this->_example_output($output);   
    }

    public function user()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('user');
        $crud->set_subject('User');
        $output = $crud->render();

        $this->_example_output($output);   
        
    }

    public function coursetest(){
        $u = new Course();
        $u->get();
        
       // foreach( $u->get() as $i)
       // {
       //      echo "Nama Course :".$i->Nama."<br>";
       // }

        $data['courses']=$u;
        $this->load->view('course_view.php', $data);

    }

    function _example_output($output = null)

    {
        $this->load->view('our_template.php',$output);    
    }
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */