<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * App
 * 
 * @package   
 * @author StaffYard
 * @copyright Ayodeji Adesola
 * @version 2014
 * @access public
 */

include 'users.php';

class Messages extends Users {

    /**
     * App::index()
     * 
     * @return
     */
    public $table;


    public function __construct(){
        parent::__construct();
        $this->table = "conversations";
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    



    public function all($stat = "", $id="") {
        $this->init();
        $data['title'] = "My Contact Messages";
        $this->load->view('header', $data);
        $data["status"] = "";
        $data["i"] = 0;
        $data["edit"] = "";
        if ($stat === "success") {
            $data["status"] = $this->model_htmldata->successMsg("Your response has been sent successfully");
        } elseif ($stat === "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Plot Type Deleted Successfully");
        }elseif($stat === "edit")
        {
            $data["edit"] = $id;
        }
        $data["msgs"] = $this->model_getvalues->getTableRows('messages', 'id !=', 0, 'id');
        $this->load->view('conversations', $data);
        $this->load->view('footer');
    }
	
	
	public function view_users($stat = "", $id="") {
        $this->init();
        $data['title'] = "Registered Users";
        $this->load->view('header', $data);
        $data["status"] = "";
        $data["i"] = 0;
        $data["edit"] = "";
        if ($stat === "success") {
            $data["status"] = $this->model_htmldata->successMsg("Your response has been sent successfully");
        } elseif ($stat === "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Plot Type Deleted Successfully");
        }elseif($stat === "edit")
        {
            $data["edit"] = $id;
        }
        $data["users"] = $this->model_getvalues->getTableRows('user', 'id !=', 0, 'id');
        $this->load->view('view_users', $data);
        $this->load->view('footer');
    }
    

    public function post() {
        $data["status"] = "";
        $this->form_validation->set_rules('txtResponse', 'Plot Name', 'required');

        if ($this->form_validation->run()) {
            $message = $this->input->post('txtResponse');
            $this->model_htmldata->senderMail($this->input->post('hdEmail'), $message, "Your Contact Message Response", $this->session->userdata('biz_name'), $this->session->userdata('email'));

                redirect('messages/all/success');
        }
    }

   

    public function delItem($x) {
        $this->load->model("model_deleteValues");
        $data = array("plot_id" => $x);
        $this->model_deleteValues->delItem($data, $this->table);

        redirect('plots/index/deleted');
    }

}
