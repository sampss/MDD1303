<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_Model extends CI_Model{
     
    public function __construct(){    		
    	$this->load->database();
    }
   
    
    public function get_users(){
    	$query = $this->db->query('SELECT * FROM user_info');
    	return $query->result_array();    	
    }
 
 
	 
 
 
    
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