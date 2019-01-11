<?php

/**
 * @author 
 * @copyright 2014
 */
 
 
 class MY_Form_validation extends CI_Form_validation{
 	
 	public function __construct()
 	{
 		parent::__construct();
 		
 		$this->_error_prefix = '<div class="alert alert-danger"><strong>Oops! </strong>';
 		$this->_error_suffix = '</div>';
 	}
 	
 }



?>