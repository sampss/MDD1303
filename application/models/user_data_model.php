<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	This Model is used in order to handle all functions related to the user_info table.
	It will allow for verification of existing usernames, verification of login, 
	creation of new users within the database.
*/ 

class User_Data_Model extends CI_Model{
     
    public function __construct(){    		
    	$this->load->database();
    }// end __construct
   
   
   
   
   // This function is to verify if a username is currently in the db, if it is 
   // it will return the username as an array, the controller can see the array
   // and determin that another username needs to be selected.
  	public function verify_username($data)
  	{
     	// CI Active Record Query for username
    	$this->db->select('username')->from('user_info')
    	->where('username', $data['username']);
       
        // set results to variable
        $query = $this->db->get();
    	
        // set query results to an array
        $row = $query->row_array();
    	
    	// return results from the query in an array
    	return $row;	
  	
  	}
  
    
    // This function will be used to verify a username and password for user login
    // it will return an array of uid, username and password, will be used to set
    // session variables.
    public function get_user($data)
    {
    	// CI Active Record Query for uid, username, password
    	$this->db->select('uid, username, password')->from('user_info')
    	->where('username', $data['username'])->where('password', $data['password']);

        // set results to variable
        $query = $this->db->get();
        
        // set query results to an array
        $row = $query->row_array();
    	
    	// return results from the query in an array
    	return $row;    	
    }// end get_user
    


 	// This function will insert new user data for new user accounts.
    public function create_new_user($data)
    {
    	$new_user_info = array(
    		'username' => $data['username'],
    		'password' => $data['password'],
    		'email' => $data['email'],
    		'first_name' => $data['firstname'],
    		'last_name' => $data['lastname'],
    		'zip' => $data['zip'],
    	);
    	
    	$this->db->insert('user_info', $new_user_info);
    }// end create_user
 

	 
 
 
    
  //----------- 
/*  
  $query = $this->db->query('SELECT name, title, email FROM my_table');

foreach ($query->result() as $row)
{
    echo $row->title;
    echo $row->name;
    echo $row->email;


echo 'Total Results: ' . $query->num_rows();
 */ 
}
?>