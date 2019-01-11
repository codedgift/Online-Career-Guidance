<?php

/**
 * @author 
 * @copyright 2014
 */


	class Module1 extends CI_Model{
		
		public function adds($x, $y)
		{
			return $x + $y;
		}
		
		public function subs($x, $y)
		{
			return $x - $y;
		}
		
	}

?>