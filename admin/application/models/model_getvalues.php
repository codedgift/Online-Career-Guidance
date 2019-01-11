<?php

/**
 * Model_getValues
 * 
 * @package   
 * @author 
 * @copyright Ayodeji Adesola
 * @version 2015
 * @access public
 */
class Model_getvalues extends CI_Model {

    function can_login() {
        $this->db->where('email', $this->input->post('txtLoginEmail'));
        $this->db->where('passwd', $this->input->post('txtLoginPass'));

        $query = $this->db->get('details');
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function check_email() {
        $this->db->where('email', $this->input->post('txtForgotEmail'));

        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function topCourses($no) {
        $query = $this->db->query("SELECT count(*), course_id, class_id FROM classes GROUP BY course_id ORDER BY count(*) DESC LIMIT ".$no."");
        return $query->result_array();
    }
    
    function getCustom($sql) {
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function admin_can_login() {
        $this->db->where('email', $this->input->post('txtAdminUsername'));
        $this->db->where('passwd', $this->input->post('txtAdminPasswd'));
        $this->db->where('status', '1');

        $query = $this->db->get('admin');
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    

    function getDetails($table, $where, $id) {
        $this->db->select('*');
        $this->db->where($where, $id);
        $this->db->from($table);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    function getDetails2($table, $array) {
        $this->db->select('*');
        foreach ($array as $key => $val) {
            $this->db->where($key, $val);
        }
        $this->db->from($table);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    function getCount($table, $where, $whereVal) {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->from($table);
        return $this->db->count_all_results();
    }

    function getCount2($table, $array) {
        $this->db->select('*');
        foreach ($array as $key => $val) {
            $this->db->where($key, $val);
        }
        $this->db->from($table);
        return $this->db->count_all_results();
    }

    function getTableRows($table, $where, $whereVal, $orderby, $orderVal = "desc", $limit = 0, $limit2 = "") {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        if ($limit != 0) {
            $this->db->limit($limit, $limit2);
        }
        $query = $this->db->get();
        return $query->result();
    }
    
    
    function getTableRowsCols($table, $array, $orderby, $orderVal = "desc", $limit = 0) {
        $this->db->select('*');
        foreach ($array as $key => $val) {
            $this->db->where($key, $val);
        }
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        if ($limit != 0) {
            $this->db->limit($limit);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function getTableRows2($table, $where, $whereVal, $where2, $whereVal2, $orderby, $orderVal = "desc") {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->where($where2, $whereVal2);
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        $query = $this->db->get();
        return $query->result();
    }

    function getTableRows3($table, $where, $whereVal, $where2, $whereVal2, $where3, $whereVal3, $orderby, $orderVal = "desc") {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->where($where2, $whereVal2);
        $this->db->where($where3, $whereVal3);
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        $query = $this->db->get();
        return $query->result();
    }

    function getTableRows4($table, $where, $whereVal, $where2, $whereVal2, $where3, $whereVal3, $where4, $whereVal4, $orderby, $orderVal = "desc") {
        $this->db->select('*');
        $this->db->where($where, $whereVal);
        $this->db->where($where2, $whereVal2);
        $this->db->where($where3, $whereVal3);
        $this->db->where($where4, $whereVal4);
        $this->db->from($table);
        $this->db->order_by($orderby, $orderVal);
        $query = $this->db->get();
        return $query->result();
    }

    function searchVal($table, $where, $whereVal, $orderby, $orderVal = "desc") {
        $this->db->select('*');
        //$this->db->where();
        $this->db->like($where, $whereVal);
        $this->db->order_by($orderby, $orderVal);
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }
    
    function getSum($table, $col, $whereVal, $where, $whereVal2="", $where2="") {
        $this->db->select_sum($col);
        $this->db->where($whereVal, $where);
        if($where2 != "")
            $this->db->where($whereVal2, $where2);
        $this->db->from($table);
        $query = $this->db->get();
        return $query->row_array();
    }

    function time_elapsed_string($datetime, $full = false) {
        $today = time();
        $createdday = strtotime($datetime);
        $datediff = abs($today - $createdday);
        $difftext = "";
        $years = floor($datediff / (365 * 60 * 60 * 24));
        $months = floor(($datediff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($datediff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        $hours = floor($datediff / 3600);
        $minutes = floor($datediff / 60);
        $seconds = floor($datediff);
        //year checker  
        if ($difftext == "") {
            if ($years > 1)
                $difftext = $years . " years ago";
            elseif ($years == 1)
                $difftext = $years . " year ago";
        }
        //month checker  
        if ($difftext == "") {
            if ($months > 1)
                $difftext = $months . " months ago";
            elseif ($months == 1)
                $difftext = $months . " month ago";
        }
        //month checker  
        if ($difftext == "") {
            if ($days > 1)
                $difftext = $days . " days ago";
            elseif ($days == 1)
                $difftext = $days . " day ago";
        }
        //hour checker  
        if ($difftext == "") {
            if ($hours > 1)
                $difftext = $hours . " hours ago";
            elseif ($hours == 1)
                $difftext = $hours . " hour ago";
        }
        //minutes checker  
        if ($difftext == "") {
            if ($minutes > 1)
                $difftext = $minutes . " minutes ago";
            elseif ($minutes == 1)
                $difftext = $minutes . " minute ago";
        }
        //seconds checker  
        if ($difftext == "") {
            if ($seconds > 1)
                $difftext = $seconds . " seconds ago";
            elseif ($seconds == 1)
                $difftext = $seconds . " second ago";
        }
        return $difftext;
    }

    public function IntervalDays($CheckOut = "2014-03-17") {

        $date = date("Y-m-d");
        $CheckInX = explode("-", $date);
        $CheckOutX = explode("-", $CheckOut);
        $date1 = mktime(0, 0, 0, $CheckInX[1], $CheckInX[2], $CheckInX[0]);
        $date2 = mktime(0, 0, 0, $CheckOutX[1], $CheckOutX[2], $CheckOutX[0]);
        $interval = ($date2 - $date1) / (3600 * 24);

        // returns numberofdays 
        return $interval;
    }

    public function IntervalDays2($CheckIn, $CheckOut) {

        $CheckInX = explode("-", $CheckIn);
        $CheckOutX = explode("-", $CheckOut);
        $date1 = mktime(0, 0, 0, $CheckInX[1], $CheckInX[2], $CheckInX[0]);
        $date2 = mktime(0, 0, 0, $CheckOutX[1], $CheckOutX[2], $CheckOutX[0]);
        $interval = ($date2 - $date1) / (3600 * 24);

        // returns numberofdays 
        return $interval;
    }

}

?>