<?php

/**
 * Layanan_Punya_Course DataMapper Model
 *
 * Use this basic model as a layanan_punya_course for creating new models.
 * It is not recommended that you include this file with your application,
 * especially if you use a Layanan_Punya_Course library (as the classes may collide).
 *
 * To use:
 * 1) Copy this file to the lowercase name of your new model.
 * 2) Find-and-replace (case-sensitive) 'Layanan_Punya_Course' with 'Your_model'
 * 3) Find-and-replace (case-sensitive) 'layanan_punya_course' with 'your_model'
 * 4) Find-and-replace (case-sensitive) 'layanan_punya_courses' with 'your_models'
 * 5) Edit the file as desired.
 *
 * @license		MIT License
 * @category	Models
 * @author		Phil DeJarnett
 * @link		http://www.overzealous.com
 */
class Layanan_Punya_Course extends DataMapper {

	// Uncomment and edit these two if the class has a model name that
	//   doesn't convert properly using the inflector_helper.
	// var $model = 'layanan_punya_course';
	 var $table = 'layanan_punya_course';

	// You can override the database connections with this option
	// var $db_params = 'db_config_name';

	// --------------------------------------------------------------------
	// Relationships
	//   Configure your relationships below
	// --------------------------------------------------------------------

	// Insert related models that Layanan_Punya_Course can have just one of.
	var $has_one = array();

	// Insert related models that Layanan_Punya_Course can have more than one of.
	var $has_many = array();

	/* Relationship Examples
	 * For normal relationships, simply add the model name to the array:
	 *   $has_one = array('layanan_punya_course'); // Layanan_Punya_Course has one Layanan_Punya_Course
	 *
	 * For complex relationships, such as having a Creator and Editor for
	 * Layanan_Punya_Course, use this form:
	 *   $has_one = array(
	 *   	'creator' => array(
	 *   		'class' => 'layanan_punya_course',
	 *   		'other_field' => 'created_layanan_punya_course'
	 *   	)
	 *   );
	 *
	 * Don't forget to add 'created_layanan_punya_course' to Layanan_Punya_Course, with class set to
	 * 'layanan_punya_course', and the other_field set to 'creator'!
	 *
	 */

	// --------------------------------------------------------------------
	// Validation
	//   Add validation requirements, such as 'required', for your fields.
	// --------------------------------------------------------------------

	var $validation = array(

		'email' => array(
			'label' => 'Email',
			'rules' => array('required', 'trim', 'unique', 'valid_email', 'max_length' => 30)
		),
		'name' => array(
			'label' => 'Nama',
			'rules' => array('required', 'unique', 'max_length' => 20)
		),
		'password' => array(
			'label' => 'Password',
			'rules' => array('required', 'trim', 'max_length' => 40, 'encrypt'),
			'type' => 'password'
		),
		'phone_number' => array(
			'label' => 'Nomor Telepon',
			'rules' => array('required', 'max_length' =>15),
			'type' => 'password'
		)

	);
	
	//print dirrectly
	function __toString()
	{
		return empty($this->name) ? $this->localize_label('newlayanan_punya_course') : $this->name;
	}

	// --------------------------------------------------------------------
	// Default Ordering
	//   Uncomment this to always sort by 'name', then by
	//   id descending (unless overridden)
	// --------------------------------------------------------------------

	// var $default_order_by = array('name', 'id' => 'desc');

	// --------------------------------------------------------------------

	/**
	 * Constructor: calls parent constructor
	 */
    function __construct($id = NULL)
	{
		parent::__construct($id);
    }

	// --------------------------------------------------------------------
	// Post Model Initialisation
	//   Add your own custom initialisation code to the Model
	// The parameter indicates if the current config was loaded from cache or not
	// --------------------------------------------------------------------
	function post_model_init($from_cache = FALSE)
	{
	}

	// --------------------------------------------------------------------
	// Custom Methods
	//   Add your own custom methods here to enhance the model.
	// --------------------------------------------------------------------

	/* Example Custom Method
	function get_open_layanan_punya_courses()
	{
		return $this->where('status <>', 'closed')->get();
	}
	*/

	// --------------------------------------------------------------------
	// Custom Validation Rules
	//   Add custom validation rules for this model here.
	// --------------------------------------------------------------------

	/* Example Rule
	function _convert_written_numbers($field, $parameter)
	{
	 	$nums = array('one' => 1, 'two' => 2, 'three' => 3);
	 	if(in_array($this->{$field}, $nums))
		{
			$this->{$field} = $nums[$this->{$field}];
	 	}
	}
	*/
}

/* End of file layanan_punya_course.php */
/* Location: ./application/models/layanan_punya_course.php */
