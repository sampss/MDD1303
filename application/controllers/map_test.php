<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Map_Test extends CI_Controller {



    public function index()
    {
    
    	// Load the library
		$this->load->library('googlemaps');
    
    	// Initialize our map. Here you can also pass in additional parameters for customising the map (see below)
		$this->googlemaps->initialize();
		
		// Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
		// placed where we want the map to appear.
		$data['map'] = $this->googlemaps->create_map();
    	
    	        
        $this->load->view('templates/jquery_mobile_header',$data);
        $this->load->view('pages/jquery_mobile_pages2',$data);
        $this->load->view('templates/jquery_mobile_footer');
        
    }// end public function
}