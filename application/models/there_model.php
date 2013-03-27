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

	public function update_time($data)
	{
			
		$update_info = array();
		$update_info['day'] = $data['edit_date'];
		$update_info['arrive'] = $data['edit_arrive'];
		$update_info['leave'] = $data['edit_leave'];


		$this->db->where('id', $data['edit_id']);
		$this->db->update('there', $update_info);
	
	}
	
	public function delete_time($data)
	{
		$this->db->delete('there',array('id'=>$data['id']));
		
	}
	
	
}// closes there model
	
	
	
	
	



