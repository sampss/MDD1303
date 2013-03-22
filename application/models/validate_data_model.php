<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	This Model is used for validation functions
*/ 

class Validate_Data_Model extends CI_Model{

//------------- Validate Email Address--- ------------------------------------------------//     
     public function validate_email($data)
     {
     	$email = $data['email'];

		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
     }// end email validate function


}
?>