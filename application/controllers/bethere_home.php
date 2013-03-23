<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Bethere_Home extends CI_Controller {


//-----------------------------------Index------------------------------------------------// 
    
    public function index()
    {	 
 
 	//------------- Is already logged in test ----------------------------------//
		//test redirect
		// $this->session->set_userdata('username', 'wagle');
			
		// test if username is set in session 
		if ($this->session->userdata('username') != '')
		{
				// put in header redirect to logged in.
				redirect('bethere_home/logged_in');
		}
		
    //------------- Initialize Global Session Variable --------------------------//	
    	// init basic session information here, such as username and password and uid vars
 		$current_user = array(
			'uid' => '',
			'username' => '',
			'password' => ''
		);
		$this->session->set_userdata($current_user); 
		 	
    //------------- Set Title for page ----------------------------------//	
    	$data['header_title'] = 'BeThere Home';//used to set header title
    
    //------------- Set Navigation Buttons ------------------------------//	
		// Header Buttons    
    	$data['login_link'] = site_url('bethere_home/user_login'); // set login button link
    	$data['signup_page'] = site_url('bethere_home/sign_up');// set signup button link
    	$data['map_test'] = site_url('bethere_home/map_test'); // set map_test button link
    
    
    //------------- Load Page View ----------------------------------//		        
        $this->load->view('templates/header', $data);// links to header template
        $this->load->view('pages/home_page', $data);// links to homepage
        $this->load->view('templates/footer');// links to footer template
        
    }// end index function
    


//-----------------------------------User Login-------------------------------------------// 
    
	public function user_login()
    {    

 	//------------- Is already logged in test ----------------------------------//
		// test if username is set in session 
		if ($this->session->userdata('username') != '')
		{
				// put in header redirect to logged in.
				redirect('bethere_home/logged_in');
		}
    	 	
    //------------- Get Data From Post ----------------------------------//
	   	// Get POST data set to variable
    	$data['login_user_info'] = $this->input->post(NULL, TRUE);// null, true = all, xss for post data
    
    //------------- Load User Data Model ----------------------------------//	
    	// load the user data model upon running this function
    	$this->load->model('user_data_model');// load the user data handling model

    //------------- Set Header Title & Form Error Default--------------------------//	
    	$data['header_title'] = 'User Login';//used to set header title
    	$data['form_error'] = '';
    	$data['user_exists'] = '';
    	$data['uid'] = '';
    	$data['zip'] = '';
    	
    //------------- Set Navigation Buttons ------------------------------//	
    	$data['home_page'] = site_url('bethere_home'); // home page button
    	$data['signup_page'] = site_url('bethere_home/sign_up');// signup page button
    
    //------------- Use Post Data Var From Login Form ------------------------//	
    	// get user info and create a var in the data array for each item and prep them
    	$data['username'] = empty($data['login_user_info']['login_username']) ? '' : strtolower(trim($data['login_user_info']['login_username']));
		$data['password'] = empty($data['login_user_info']['login_password']) ? '' : trim($data['login_user_info']['login_password']);
    	
    //------------- If not empty and matches log user in or throw error--------------//	
  // this section is breaking controller
  
    	if (!empty($data['username']) && !empty($data['password'])) {								
					
			// set $data[user_exists] to the results of user_data_model get_user()
			// pass in $data so $username can be verified
			$data['user_exists'] = $this->user_data_model->get_user($data);
					
			// test if user exists was returned as array // change to return true or false
			// placed within !empty to only run if username and pass exists
			if (!empty($data['user_exists']))
			{					 						
				// set session variables
				$this->session->set_userdata('uid', $data['user_exists']['uid']);
				$this->session->set_userdata('username', $data['user_exists']['username']);
				$this->session->set_userdata('password', $data['user_exists']['password']);
				$this->session->set_userdata('zip', $data['user_exists']['zip']);

				// put in header redirect and
				redirect('bethere_home/logged_in');
							
			}// end if empty		
				
		} // end if !empty
    	
    //------------- Load Page View ----------------------------------//	
    	$this->load->view('templates/header',$data);// links to header template
    	$this->load->view('pages/login_page',$data);// links to login page
        $this->load->view('templates/footer');// links to footer template

    } // end user login function
    
   

//------------------------------------Sign Up---------------------------------------------// 
 
	public function sign_up()
	{	

 	//------------- Is already logged in test ----------------------------------//			
		// test if username is set in session 
		if ($this->session->userdata('username') != '')
		{
				// put in header redirect to logged in.
				redirect('bethere_home/logged_in');
		}

    //------------- Get Post Data ----------------------------------//
    	// Get POST data
    	$data['new_user'] = $this->input->post(NULL, TRUE);// null, true = all, xss for post data
    
    //------------- Load User Data Model ----------------------------------//	
    	// load the user data model upon running this function
    	$this->load->model('user_data_model');// load the user data handling model
  	
  	//------------- Set Header Title & Other Var Defaults------------------------//	
  		// set the header title for the page
	    $data['header_title'] = 'Sign Up';//used to set header title
		
		// set additional $data variables that are used within this function
		$data['user_exists'] = '';
		$data['form_error'] = '';
		$data['valid_email'] = '';
    
    //------------- Set Navigation Buttons ------------------------------//	
    	// set the buttons for this page
    	$data['home_page'] = site_url('bethere_home'); // home page button
    	$data['login_page'] = site_url('bethere_home/user_login');// login page button
    	
 	//------------- Prep Data From Post & Set to Data Var--------------------//
    	// get created user info from form and create a var in the data array for each item
    	// $data['new_user'] array has been returned with CI xss filter
    	// using CI recommended $something = $this->input->post('somedata', TRUE); did not work will look at later
    	$data['username'] = empty($data['new_user']['newusername']) ? '' : strtolower(trim($data['new_user']['newusername']));
		$data['password'] = empty($data['new_user']['newpassword']) ? '' : trim($data['new_user']['newpassword']);
		$data['email'] = empty($data['new_user']['newemail']) ? '' : strtolower(trim($data['new_user']['newemail']));
		$data['firstname'] = empty($data['new_user']['newfirstname']) ? '' : trim($data['new_user']['newfirstname']);
		$data['lastname'] = empty($data['new_user']['newlastname']) ? '' : trim($data['new_user']['newlastname']);
		$data['zip'] = empty($data['new_user']['newuserzip']) ? '' : trim($data['new_user']['newuserzip']);
		

    	
	//------------- Attempt to Create User ------------------------------//	
		// if username and password are not empty try to create new user.
		if (!empty($data['username']) && !empty($data['password'])) {
		
		//------------- Validate User Input-----------------//
			// validate user input
			$this->load->model('validate_data_model');
			
			// validate email and return true or false
			$data['valid_email'] = $this->validate_data_model->validate_email($data);									
					
			// set $data[user_exists] to the results of user_data_model get_user()
			// pass in $data so $username can be verified
			$data['user_exists'] = $this->user_data_model->verify_username($data);
					
			// test if user exists was returned as array
			// placed within !empty to only run if username and pass is filled out
			if (!empty($data['user_exists']))
			{						
				// if user exists make it equal to string user exists to throw error
				$data['form_error'] = 
				'<div id="error_box">
				<h3 class="error_text">Username already exists, please choose another username.</h3> 
				</div><br />'; 						
			
			// elseif make sure the email is valid.
			// need to add an email validation to make sure no duplicates				
			}elseif($data['valid_email'] == FALSE)
			{
				$data['form_error'] = 
				'<div id="error_box">
				<h3 class="error_text">Please enter a valid email address.</h3> 
				</div><br />';
			// else create user in db
			}else
			{
				$data['current_user'] = $this->user_data_model->create_new_user($data);
				
				// after creating the user, retrieve data to be set including uid
				$created_user = $this->user_data_model->get_user($data);
				
				// set session var to include user data, uid, username, pass, zip
				$this->session->set_userdata($created_user);
				
				// put in header redirect and
				redirect('bethere_home/logged_in');

			} // end else/esleif statement
		
				
		} // end if !empty
		   	
   	
    	$this->load->view('templates/header',$data);// links to header template
    	$this->load->view('pages/signup_page',$data);// links to login page
        $this->load->view('templates/footer');// links to footer template
    
	} // end signup function


//-------------------------------------Logged In------------------------------------------// 
   
	public function logged_in()
   {
   
   //--------------Set if username seesion NULL redirect to Login--------//
   
   
   
   
 	//------------- Set Variables----------------------------------------//	
   		// load session and set user var
   		$user = $this->session->userdata('username'); 		    		
 		$zip = this->session->userdata('zip');
   		$page = 'logged_in_home';
   
   		$data['user'] = $user;

   //------------- Set Header Title -------------------------------------//   
   		// set header title
 		$data['header_title'] = $user.' Home';//used to set header title 
 		
 	//------------- Set Navigation Buttons ------------------------------//	
    	// header nav buttons
    	$data['log_out_link'] = site_url('bethere_home/logout'); // home page button	
    	
    	// set other nav buttons

 		
 	//------------- load location model --------------------------------//	
 		$this->load->model('location_model');
 		$this->load->model('there_model');
 		
 		
 		
  
   	    $this->load->view('templates/header', $data);// links to header template
    	$this->load->view('pages/'.$page, $data);// links to login page
        $this->load->view('templates/footer');// links to footer template   
   }// end logged in function
   

//-------------------------------------Logout Function------------------------------------//

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('bethere_home');
	}


//--------------------------------------Map Test------------------------------------------//
   
    public function map_test()
    {
    
    	$this->load->helper('url'); // load helper url
    	$data['home_page'] = site_url('bethere_home'); // use helper to set var
    
    	// Load the library
		$this->load->library('googlemaps');
    
    	// Initialize our map. Here you can also pass in additional parameters for customising the map
		$this->googlemaps->initialize();
		
		
		// Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
		// placed where we want the map to appear.
		$data['map'] = $this->googlemaps->create_map();
		//$data['map_js'] = $data['map']['js'];
		
		
		$data['header_title'] = 'Map Test';//used to set header title
		
    	        
        $this->load->view('templates/header',$data);
        $this->load->view('pages/map_test_page',$data);
        $this->load->view('templates/footer');
        
    }// end public function
    
    
}// end CI controller

// create different functions to load the different pages for login and create user,
// possibly use one controller to load all pages.
 
/* End of file Bethere_Home.php */
/* Location: ./application/controllers/bethere_home.php */