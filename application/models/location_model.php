<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location_Model extends CI_Model{

/*
	This model will be used to get, update and create location information
*/
     
    public function __construct(){    		
    	$this->load->database();
    }// end __construct

	public function get_location_info($data)
	{
		// CI Active Record Query for uid, username, password
    	$this->db->select('*')->from('location_info')
    	->where('lid', $data['lid']);

        // set results to variable
        $query = $this->db->get();
        
        // set query results to an array
        $row = $query->row_array();
    	
    	// return results from the query in an array
    	return $row;    	
	
	}
	
	public function get_locations($data)
	{
		if(!empty($data['search_zip']))
		{
			// CI Active Record Query for uid, username, password
    		$this->db->select('*')->from('location_info')
    		->where('zip', $data['search_zip']);
			
			// set results to variable
			$query = $this->db->get();
			
			// set query results to an array
       		return $query->result_array(); 
			
		}else
		{
			// CI Active Record Query for uid, username, password
	    	$this->db->select('*')->from('location_info');

        	// set results to variable
       		$query = $this->db->get();
        
       		// set query results to an array
        	return $query->result_array();
   	
		}
	}// end get_locations
	
	
	public function create_location($data)
	{		
		$new_location = array();
		$new_location['name'] = $data['name'];
		$new_location['street'] = $data['street'];
		$new_location['city'] = $data['city'];
		$new_location['state'] = $data['state'];
		$new_location['zip'] = $data['zip'];
		$new_location['phone'] = $data['phone'];
		
		$this->db->insert('location_info', $new_location);
		
	}
	
	public function update_location($data)
	{
	
	
	}




}