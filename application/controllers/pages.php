<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {

public function view($page = 'home')
{
			
	/*if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}*/
	
	$data['title'] = ucfirst($page); // Capitalize the first letter
	
	$this->load->view('templates/header', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);

}

}
/*
class Pages extends CI_Controller {

	public function view($page = 'jquery_mobile_pages')
	{
			if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}/* close if file exists 
	
		$data['title'] = ucfirst($page); // Capitalize the first letter
	
		$this->load->view('templates/jquery_mobile_header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/jquery_mobile_footer', $data);
	}/* close function view 
}*/