<?php

/**
 * Model_insertValues
 * 
 * @package hrapp
 * @author Ayodeji Adesola
 * @copyright 2014
 * @version 1.0
 * @access public
 */
class Model_insertValues extends CI_Model {

    function addItem($array, $table) {
        //echo 'ins';
        $query = $this->db->insert($table, $array);
        if ($query) {
            return true;
        } 
    }

}

?>