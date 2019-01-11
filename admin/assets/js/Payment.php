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
class Projects extends CI_Controller {

    /**
     * App::index()
     * 
     * @return
     */
    
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Model_insertvalues');
    }
    



    public function index($stat = "", $id="") {
        $data["status"] = "";
        $data["i"] = 0;
        $data["edit"] = "";
        if ($stat === "success") {
            $data["status"] = $this->model_htmldata->successMsg("Project Edited Successfully");
        } elseif ($stat === "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Project Deleted Successfully");
        }elseif($stat === "edit")
        {
            $data["edit"] = $id;
        }
        
        $this->load->library("form_validation");
        $this->form_validation->set_rules('txtProject', 'Project Name', 'required');

        if ($this->form_validation->run()) {
            $array = array("project_name" => $this->input->post("txtProject"), "location" => $this->input->post("txtLocation"));
            if ($this->model_insertvalues->addItem($array, "projects")) {
                $data["status"] = $this->model_htmldata->successMsg("New Project Added");
            }
        }
                $data["projects"] = $this->model_getvalues->getTableRows("projects", "project_id !=", 0, "project_id");
        $this->load->view('templates/header', $data);
            $this->load->view('projects');
            $this->load->view('templates/footer');
    }

    public function editItem($a) {
        $data["status"] = "";
        $this->form_validation->set_rules('txtProjectEdit', 'Project Name', 'required');

        if ($this->form_validation->run()) {
            $array = array("project_name" => $this->input->post("txtProjectEdit"), "location" => $this->input->post("txtLocationEdit"));
            if ($this->model_updatevalues->updateVal("projects", $array, "project_id", $a)) {
                redirect('projects/index/success');
            }
        }
    }

   

    public function delItem($x) {
        $this->load->model("model_deleteValues");
        $data = array("project_id" => $x);
        $this->model_deleteValues->delItem($data, "projects");

        redirect('projects/index/deleted');
    }

}
