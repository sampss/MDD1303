<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 
class Bethere_Home extends CI_Controller {
    
    public function index()
    {	
    	// set data to home page data 
    	
    	$data['header_title'] = 'BeThere Home';//used to set header title
    
    	/// should start session here, then on login set session
    
		// Header Buttons    
    	$this->load->helper('url');// load helper url for CI
    	$data['login_link'] = site_url('bethere_home/user_login'); // set login button link
    	$data['signup_page'] = site_url('bethere_home/sign_up');// set signup button link
    	$data['map_test'] = site_url('bethere_home/map_test'); // set map_test button link
    	        
        $this->load->view('templates/header', $data);// links to header template
        $this->load->view('pages/home_page', $data);// links to homepage
        $this->load->view('templates/footer');// links to footer template
        
    }// end index function
    
      
	  public function user_login()
    {
    
	   	// Get POST data
    	$this->input->post(NULL, TRUE);// null, true = all, xss for post data
    	
    	// get created user info from form and create a var in the data array for each item
    	$data['username'] = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
		$data['password'] = empty($_POST['password']) ? '' : trim($_POST['password']);
    
    	$data['header_title'] = 'User Login';//used to set header title
    
    	$this->load->helper('url'); // load helper url
    	$data['home_page'] = site_url('bethere_home'); // home page button
    	$data['signup_page'] = site_url('bethere_home/sign_up');// signup page button
    	
    	
    	$this->load->view('templates/header',$data);// links to header template
    	$this->load->view('pages/login_page',$data);// links to login page
        $this->load->view('templates/footer');// links to footer template
    } // end user login function
    
    
 
	 public function sign_up()
	 {	
    
    	// Get POST data
    	$data['new_user'] = $this->input->post(NULL, TRUE);// null, true = all, xss for post data
    	
    	// load the user data model upon running this function
    	//$this->load->model('user_data_model');// currently breaks page
    	//$data['new_user'] = $this->user_data_model->create_user();
  	
	    $data['header_title'] = 'Sign Up';//used to set header title
    
    	$this->load->helper('url'); // load helper url //possibly set to autoload in CI
    	$data['home_page'] = site_url('bethere_home'); // home page button
    	$data['login_page'] = site_url('bethere_home/user_login');// login page button
    	
    	// get created user info from form and create a var in the data array for each item
    	// $data['new_user'] array has been returned with CI xss filter
    	// using CI recommended $something = $this->input->post('somedata', TRUE); did not work will look at later
    	$data['username'] = empty($data['new_user']['newusername']) ? '' : strtolower(trim($data['new_user']['newusername']));
		$data['password'] = empty($data['new_user']['newpassword']) ? '' : trim($data['new_user']['newpassword']);
		$data['email'] = empty($data['new_user']['newemail']) ? '' : strtolower(trim($data['new_user']['newemail']));
		$data['firstname'] = empty($data['new_user']['newfirstname']) ? '' : trim($data['new_user']['newfirstname']);
		$data['lastname'] = empty($data['new_user']['newlastname']) ? '' : trim($data['new_user']['newlastname']);
		$data['zip'] = empty($data['new_user']['newuserzip']) ? '' : trim($data['new_user']['newuserzip']);
    	
    	// start session, look into CI sessions
    	session_start();
 /*   	
    	if (!empty($_SESSION['current_user'])){
			// if user currently logged in header redirect to logged in page
		}
		
		// if username and password are not empty try to create new user.
		if (!empty($data['username']) && !empty($data['password'])) {
			try{
				//$this->user_data_model->create_user($data);
			}// try
			catch (Exception $e) {
		
				$notice = $e->getMessage();
		
			}// catch 
		}
    	
*/    	
    	$this->load->view('templates/header',$data);// links to header template
    	$this->load->view('pages/signup_page',$data);// links to login page
        $this->load->view('templates/footer');// links to footer template
    
    } // end signup function
   
   
   
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