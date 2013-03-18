<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Data_Model extends CI_Model{
     
    public function __construct(){    		
    	$this->load->database();
    }// end __construct
   
    
    public function get_users(){
    	$query = $this->db->query('SELECT * FROM user_info');
    	return $query->result_array();    	
    }// end get_user
    
    
    create_user($data){
    
    
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