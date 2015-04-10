<?php

/**
 * Course DataMapper Model
 *
 * Use this basic model as a course for creating new models.
 * It is not recommended that you include this file with your application,
 * especially if you use a Course library (as the classes may collide).
 *
 * To use:
 * 1) Copy this file to the lowercase name of your new model.
 * 2) Find-and-replace (case-sensitive) 'Course' with 'Your_model'
 * 3) Find-and-replace (case-sensitive) 'course' with 'your_model'
 * 4) Find-and-replace (case-sensitive) 'course' with 'your_models'
 * 5) Edit the file as desired.
 *
 * @license		MIT License
 * @category	Models
 * @author		Phil DeJarnett
 * @link		http://www.overzealous.com
 */
class Course extends DataMapper {

	// Uncomment and edit these two if the class has a model name that
	//   doesn't convert properly using the inflector_helper.
	// var $model = 'course';
	var $table = 'course';

	// You can override the database connections with this option
	// var $db_params = 'db_config_name';

	// --------------------------------------------------------------------
	// Relationships
	//   Configure your relationships below
	// --------------------------------------------------------------------

	// Insert related models that Course can have just one of.
	var $has_one = array();

	// Insert related models that Course can have more than one of.
	var $has_many = array(
		'layanan' => array(			// in the code, we will refer to this relation by using the object name 'book'
            'class' => 'layanan',			// This relationship is with the model class 'book'
            'other_field' => 'course',		// in the Book model, this defines the array key used to identify this relationship
            'join_self_as' => 'course',		// foreign key in the (relationship)table identifying this models table. The column name would be 'author_id'
            'join_other_as' => 'layanan',		// foreign key in the (relationship)table identifying the other models table as defined by 'class'. The column name would be 'book_id'
            'join_table' => 'layanan_punya_course'),
		);

	/* Relationship Examples
	 * For normal relationships, simply add the model name to the array:
	 *   $has_one = array('course'); // Course has one Course
	 *
	 * For complex relationships, such as having a Creator and Editor for
	 * Course, use this form:
	 *   $has_one = array(
	 *   	'creator' => array(
	 *   		'class' => 'course',
	 *   		'other_field' => 'created_course'
	 *   	)
	 *   );
	 *
	 * Don't forget to add 'created_course' to Course, with class set to
	 * 'course', and the other_field set to 'creator'!
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
		// return empty($this->name) ? $this->localize_label('newcourse') : $this->name;
		return print_r($this);
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
	function get_open_course()
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

/* End of file course.php */
/* Location: ./application/models/course.php */
