<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Bethere_Home extends CI_Controller {
    
    public function index()
    {	// set data to home page data 
    
    	/// should start session here, then on login set session
    
		// Header Buttons    
    	$this->load->helper('url');
    	$data['login_link'] = site_url('bethere_home/userLogin'); 
    	$data['signup_page'] = site_url('bethere_home/map_test');
    	
		$data['map'] = '';// set map header var to blank
    	        
        $this->load->view('templates/jheader');// links to header template
        $this->load->view('pages/jhomepage', $data);// links to homepage
        $this->load->view('templates/jfooter');// links to footer template
        
    }// end index function
    
    
    public function userLogin(){
    
    	$this->load->helper('url'); // load helper url
    	$data['signup_page'] = site_url('bethere_home/map_test'); // use helper to set var
    	
    	
    	$data['map'] = '';// set map header var to blank
    	
    	
    	$this->load->view('templates/jheader');// links to header template
    	$this->load->view('pages/jloginpage',$data);// links to login page
        $this->load->view('templates/jfooter');// links to footer template
    }
   
   
    
    public function map_test()
    {
    
    	// Load the library
		$this->load->library('googlemaps');
    
    	// Initialize our map. Here you can also pass in additional parameters for customising the map
		$this->googlemaps->initialize();
		
		
		// Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
		// placed where we want the map to appear.
		$data['map'] = $this->googlemaps->create_map();
		
		//$data['header_title'] = 'map_test';//used to set header title
		
    	        
        $this->load->view('templates/jheader',$data);
        $this->load->view('pages/jmaptestpage',$data);
        $this->load->view('templates/jfooter');
        
    }// end public function
    
    
}

// create different functions to load the different pages for login and create user,
// possibly use one controller to load all pages.
 
/* End of file Bethere_Home.php */
/* Location: ./application/controllers/bethere_home.php */