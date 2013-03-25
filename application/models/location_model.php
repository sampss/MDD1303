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
	
	public function create_location($data)
	{
		
	
	}
	
	public function update_location($data)
	{
	
	
	}




}