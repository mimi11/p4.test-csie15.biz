<?php
<<<<<<< HEAD

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_index_index');
			
		# Now set the <title> tag
			$this->template->title = "Hello World";
	
		# CSS/JS includes
			/*
			$client_files_head = Array("");
	    	$this->template->client_files_head = Utils::load_client_files($client_files);
	    	
	    	$client_files_body = Array("");
	    	$this->template->client_files_body = Utils::load_client_files($client_files_body);   
	    	*/
	      					     		
		# Render the view
			echo $this->template;

	} # End of method
	
	
=======
/*-------------------------------------------------------------------------------------------------
Name: Carine Melhorn
Student HuId: 50713350 / extension school id @00070108
Project Name: p2.test-csie15.biz
github username: mimi11
   -------------------------------------------------------------------------------------------------*/
class index_controller extends base_controller
{

    /*-------------------------------------------------------------------------------------------------

    -------------------------------------------------------------------------------------------------*/
    public function __construct()
    {
        parent::__construct();
    }

    /*-------------------------------------------------------------------------------------------------
    Accessed via http://localhost/index/index/
    -------------------------------------------------------------------------------------------------*/
    public function index()
    {

        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_index_index');

        # Now set the <title> tag
        $this->template->title = "CM-Buzz";

        # CSS/JS includes

        $client_files_head = Array("");
        $this->template->client_files_head = Utils::load_client_files($client_files_head);

        $client_files_body = Array("");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);


        # Render the view
        echo $this->template;

    } # End of method


    public function signup() {

        # Setup view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title   = "Sign Up";

        # Render template
        echo $this->template;

    }

    public function p_signup() {

        # Dump out the results of POST to see what the form submitted
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }


>>>>>>> f92dad1a19f8fbe6e0af6e82a45ffd7cd1332c86
} # End of class
