<?php
	
	class Model_deleteValues extends CI_Model{
		
	
        function delItem($data, $table)
        {
            $this->db->delete($table, $data);
        }
		
	
	}
	
?>