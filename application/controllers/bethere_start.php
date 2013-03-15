<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class bethere_start extends CI_Controller {
    
    public function index()
    {
    
    	$this->load->model('Login_Model');
    	$user_info = $this->Login_Model->get_users();
    	$data['user_info'] = $user_info;
    	
    	        
        $this->load->view('templates/jheader');
        $this->load->view('pages/db_test_page',$data);
        $this->load->view('templates/jfooter');
        
    }// end public function
}
 
/* End of file bethere_start.php */
/* Location: ./application/controllers/bethere_start.php */