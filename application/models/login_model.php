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
   
    /**
     * returns a list of articles
     * @return array 
     */
    function get_articles_list(){
        $list = Array();
         
        $list[0]->title = "first blog title";
        $list[0]->author = "author 1";
                 
        $list[1]->title = "second blog title";
        $list[1]->author = "author 2";
         
        return $list;
    }
}
?>