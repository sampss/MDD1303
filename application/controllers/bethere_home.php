<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Bethere_Home extends CI_Controller {
    
    public function index()
    {	// set data to home page data 
    
    	$data['header_title'] = 'BeThere Home';//used to set header title
    
    	/// should start session here, then on login set session
    
		// Header Buttons    
    	$this->load->helper('url');
    	$data['login_link'] = site_url('bethere_home/user_Login'); 
    	$data['signup_page'] = site_url('bethere_home/sign_up');//map_test_controller/map_test
    	
    	        
        $this->load->view('templates/header', $data);// links to header template
        $this->load->view('pages/home_page', $data);// links to homepage
        $this->load->view('templates/footer');// links to footer template
        
    }// end index function
    
    
    public function user_Login(){
    
    	$data['header_title'] = 'User Login';//used to set header title
    
    	$this->load->helper('url'); // load helper url
    	$data['home_page'] = site_url('bethere_home'); // home page button
    	$data['signup_page'] = site_url('bethere_home/sign_up');// signup page button
    	
    	
    	$this->load->view('templates/header',$data);// links to header template
    	$this->load->view('pages/login_page',$data);// links to login page
        $this->load->view('templates/footer');// links to footer template
    }
    
    
    
    public function sign_up(){
    
	    $data['header_title'] = 'Sign Up';//used to set header title
    
    	$this->load->helper('url'); // load helper url
    	$data['home_page'] = site_url('bethere_home'); // home page button
    	$data['login_page'] = site_url('bethere_home/user_login');// login page button
    	
    	// get created user info
    	$username = empty($_POST['newusername']) ? '' : strtolower(trim($_POST['newusername']));
		$password = empty($_POST['newpassword']) ? '' : trim($_POST['newpassword']);
		$email = empty($_POST['newemail']) ? '' : strtolower(trim($_POST['newemail']));
		$zip = empty($_POST['newzip']) ? '' : trim($_POST['newzip']);
    	session_start();
    	
    	
    	$this->load->view('templates/header',$data);// links to header template
    	$this->load->view('pages/signup_page',$data);// links to login page
        $this->load->view('templates/footer');// links to footer template
    
    }
   
   
    
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
    
    
}

// create different functions to load the different pages for login and create user,
// possibly use one controller to load all pages.
 
/* End of file Bethere_Home.php */
/* Location: ./application/controllers/bethere_home.php */