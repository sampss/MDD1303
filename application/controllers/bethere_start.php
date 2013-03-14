<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class bethere_start extends CI_Controller {
    
    public function index()
    {
    
    	$this->load->model('Login_Model');
    	$user_info = $this->Login_Model->get_users();
    	$data['user_info'] = $user_info;
    	
    	//$data['user_info'] = $this->login_model->get_users();
    	//echo var_dump($data['user_info']);
    	//$articles = $this->Login_Model->get_articles_list();
    	//$data['articles'] = $articles;
    	        
        $this->load->view('templates/jquery_mobile_header');
        $this->load->view('pages/jquery_mobile_pages',$data);
        $this->load->view('templates/jquery_mobile_footer');
        
    }// end public function
}
 
/* End of file bethere_start.php */
/* Location: ./application/controllers/bethere_start.php */