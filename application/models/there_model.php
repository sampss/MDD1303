<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class There_Model extends CI_Model{

/*
	This model will be used to get, update and create information regarding
	when users will be in locations.
*/
     
    public function __construct(){    		
    	$this->load->database();
    }// end __construct

	public function get_locations_uid($data)
	{
		// CI Active Record Query for user locations
    	/*$query =*/ $this->db->select('*')->from('there')
    	->where('uid', $data['uid']);

        $query = $this->db->get();

		return $query->result_array();        
   	
	
	}
	
		public function get_locations_zip($data)
	{
		// CI Active Record Query for uid, username, password
    	$this->db->select('*')->from('there')
    	->where('zip', $data['zip']);

        // set results to variable
        $query = $this->db->get();
        
        // set query results to an array
        $row = $query->row_array();
    	
    	// return results from the query in an array
    	return $row;    	
	
	}
	
	
}