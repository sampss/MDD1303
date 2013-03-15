<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Map_Test_Controller extends CI_Controller {

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
    
}// end controller 