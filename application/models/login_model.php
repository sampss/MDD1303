<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_Model extends CI_Model{
     
    public function __construct(){
    		
    	$this->load->database();
    }
    
    public function get_users(){
    	$query = $this->db->get('username');
    	return $query->result_array();
    	
    }
    
    
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