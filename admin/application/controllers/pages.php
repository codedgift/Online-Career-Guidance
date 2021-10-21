<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Pages
 * 
 * @package   
 * @author Gift Amah
 * @version 2016
 * @access public
 */

include 'users.php';

class Pages extends Users {

    public $table;


    public function __construct(){
        parent::__construct();
        $this->table = "pages";
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    

    public function all($cat="")
    {
        //$this->init();
        $data["status"] = "";
        $data['title'] = "Forum";
        $this->load->view('header', $data);
        if($cat != "")
        {
            $category = $this->model_getvalues->getDetails("forum_cats", "id", $cat);
            $data['head'] = $category['cat_name'];
            $data["posts"] = $this->model_getvalues->getTableRows("forum_topics", "topic_id !=", 0, "topic_id");
            
        }else{
            $data['head'] = "Forum: All Posts";
            $data["posts"] = $this->model_getvalues->getTableRows("forum_topics", "topic_id !=", 0, "topic_id");
        }
        $data["latest_posts"] = $this->model_getvalues->getTableRows("forum_topics", "owner !=", 0, "topic_id");
        $this->load->view('all_post', $data);
        $this->load->view('footer');
    }
    
    public function category($cat)
    {
        //$this->init();
        $data["status"] = "";
        $data['title'] = "Forum";
        $data["s"] = 0;
        $this->load->view('header', $data);
        if($cat != "")
        {
            $category = $this->model_getvalues->getDetails("forum_cats", "id", $cat);
            $data['head'] = "Forum: ".$category['cat_name']."";
            $data["posts"] = $this->model_getvalues->getTableRows("forum_topics", "cat_id", $cat, "topic_id");
            
        }else{
            $data['head'] = "Forum: All Posts";
            $data["posts"] = $this->model_getvalues->getTableRows("forum_topics", "topic_id !=", 0, "topic_id");
        }
        $data["latest_posts"] = $this->model_getvalues->getTableRows("forum_topics", "owner !=", 0, "topic_id");
        $data["most_viewed"] = $this->model_getvalues->getTableRows("forum_topics", "owner !=", 0, "views");
        $this->load->view('all_post', $data);
        $this->load->view('footer');
    }

    public function services($stat = "", $id="") {
        //$this->init();
        if ($stat == "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Services deleted");
        }else{
            $data["status"] = "";
        }
        $data['title'] = "Post Services";
        $this->load->view('header', $data);
        
        $this->form_validation->set_rules('txtTopic', 'Topic', 'required|trim|xxx_clean');
        if ($this->form_validation->run()) {
            $array = array("service_name" => $this->input->post('txtTopic'),
                "service_description" => $this->input->post('txtDesc')
            );
            $this->model_insertvalues->addItem($array, 'services');
            $data["status"] = $this->model_htmldata->successMsg("New Service added succesfully");
        }
        
        $data["services"] = $this->model_getvalues->getTableRows("services", "id !=", "0", "id", "asc");
        $this->load->view('services', $data);
        $this->load->view('footer');
    }
	
	
	public function career_category($stat = "", $id="") {
        $this->init();
        if ($stat == "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Career Category deleted");
        }elseif ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Career Category Edited");
        }
        else{
            $data["status"] = "";
        }
        $data['title'] = "Add Career Category";
        $this->load->view('header', $data);
        
        $this->form_validation->set_rules('txtTopic', 'Topic', 'required|trim|xxx_clean');
        if ($this->form_validation->run()) {
            $array = array("category_name" => $this->input->post('txtTopic')
            );
            $this->model_insertvalues->addItem($array, 'career_category');
            $data["status"] = $this->model_htmldata->successMsg("New Career Category added succesfully");
        }
        $data["token"] = $id;
        $data["s"] = 0;
        $data["categories"] = $this->model_getvalues->getTableRows("career_category", "id !=", "0", "id", "desc");
        $this->load->view('career_category', $data);
        $this->load->view('footer');
    }
	
	public function career_edit($a) {
        $this->form_validation->set_rules('txtTopic'.$a.'', 'Category Name', 'required');
        if ($this->form_validation->run()) {
            $array = array("category_name" => $this->input->post("txtTopic".$a.""));
            if ($this->model_updatevalues->updateVal2($a, $array, 'career_category', "id")) {
                redirect('pages/career_category/success');
            }
        }

    }
	
	
	public function counsellor($stat = "", $id="") {
        $this->init();
        if ($stat == "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Counsellor deleted");
        }else{
            $data["status"] = "";
        }
        $data['title'] = "Add Counsellor";
        $this->load->view('header', $data);
        $det = $this->model_getvalues->getDetails("details", "email", $this->session->userdata('email'));
        $this->form_validation->set_rules('txtTopic', 'Topic', 'required|trim|xxx_clean');
        
        if ($this->form_validation->run()) {
                
            $array = array("name" => $this->input->post('txtTopic'),
                "email" => $this->input->post('txtEmail'),
                "password" => $this->input->post('txtPassword'),
                "cat_id" => $this->input->post('ddlCat')
            );
            
            $this->model_insertvalues->addItem($array, 'add_counsellor');
            $data["status"] = $this->model_htmldata->successMsg("New Counsellor added succesfully");
            
        }
        
        $data["counsellor"] = $this->model_getvalues->getTableRows("add_counsellor", "id !=", "0", "id", "asc");
        $data["cats"] = $this->model_getvalues->getTableRows("career_category", "id !=", "0", "id", "asc");
        $this->load->view('counsellor', $data);
        $this->load->view('footer');
    }
	
	
	public function counsellor_edit($a, $stat="") {
        $data['title'] = "Edit Counsellor";
        $this->load->view('header', $data);
        if ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Counsellor Edited");
        }else{
            $data["status"] = "";
        }
        
        $data["counsellors"] = $this->model_getvalues->getTableRows("add_counsellor", "id !=", "0", "id", "asc");
        $data["cats"] = $this->model_getvalues->getTableRows("career_category", "id !=", "0", "id", "asc");
        $data["coun_det"] = $this->model_getvalues->getDetails("add_counsellor", "id", $a);
        $this->form_validation->set_rules('txtTopic', 'Counsellor Name', 'required');
        if ($this->form_validation->run()) {
            $array = array(
							"name" => $this->input->post("txtTopic"), 
							"email" => $this->input->post("txtEmail"),
							"password" => $this->input->post("txtPassword"), 
							"cat_id" => $this->input->post("ddlCat")
							);
            if ($this->model_updatevalues->updateVal('add_counsellor', $array, "id", $a)) {
                redirect('pages/counsellor_edit/'.$a.'/success');
            }
        }
        $this->load->view('counsellor_edit', $data);
        $this->load->view('footer');

    }
	
	
	public function post($stat = "", $id="") {
        $this->init();
        if ($stat == "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Article deleted");
        }else{
            $data["status"] = "";
        }
        $data['title'] = "Add Article";
        $this->load->view('header', $data);
        $det = $this->model_getvalues->getDetails("details", "email", $this->session->userdata('email'));
        $this->form_validation->set_rules('txtTopic', 'Topic', 'required|trim|xxx_clean');
        
        if ($this->form_validation->run()) {
            
            $config['upload_path'] = "../assets/article/";
            $config['allowed_types'] = "jpg|jpeg|gif|JPG|JPEG";
            $config['overwrite'] = true;
			$config['width'] = 640;
            $config['height'] = 360;
            $config['file_name'] = $this->input->post('txtTopic');
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $err = $this->upload->display_errors();
                $data["status"] = $this->model_htmldata->errorMsg($err);
            } else {
                $file_data = $this->upload->data();
                $time = strftime("%B-%d-%Y");
				
            $array = array("name" => $this->input->post('txtTopic'),
                "description" => $this->input->post('txtBrief'),
                "image" => $file_data["file_name"],
				"date_added" => $time,
				"article_from" => "Admin"
            );
            
            $this->model_insertvalues->addItem($array, 'article');
            $data["status"] = $this->model_htmldata->successMsg("New Article added succesfully");

                $config['image_library'] = 'gd2';
                $config['source_image'] = "../assets/article/". $file_data["file_name"];
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 640;
				$config['height'] = 360;

                $this->load->library('image_lib', $config);


                $this->image_lib->resize();
            }
            
            
        }
        
        $data["posts"] = $this->model_getvalues->getTableRows("article", "id !=", "0", "id", "asc");
        $data["cats"] = $this->model_getvalues->getTableRows("portfolio_category", "id !=", "0", "id", "asc");
        $this->load->view('post', $data);
        $this->load->view('footer');
    }
	
	
	public function post_edit($a, $stat="") {
        $data['title'] = "Edit Article";
        $this->load->view('header', $data);
        if ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Article Edited");
        }else{
            $data["status"] = "";
        }
        
        $data["posts"] = $this->model_getvalues->getTableRows("article", "id !=", "0", "id", "asc");
        $data["cats"] = $this->model_getvalues->getTableRows("portfolio_category", "id !=", "0", "id", "asc");
        $data["post_details"] = $this->model_getvalues->getDetails("article", "id", $a);
        $this->form_validation->set_rules('txtTopic', 'Service Name', 'required');
        if ($this->form_validation->run()) {
			$time = strftime("%B-%d-%Y");
            $array = array(
							"name" => $this->input->post("txtTopic"), 
							"description" => $this->input->post("txtBrief"),
							"date_added" => $time,
							"article_from" => "Admin"
						);
            if ($this->model_updatevalues->updateVal('article', $array, "id", $a)) {
                redirect('pages/post_edit/'.$a.'/success');
            }
        }
        $this->load->view('post_edit', $data);
        $this->load->view('footer');

    }
    
    
    
    public function service_edit($a, $stat="") {
        $data['title'] = "Edit Services";
        $this->load->view('header', $data);
        if ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Service Edited");
        }else{
            $data["status"] = "";
        }
        
        $data["services"] = $this->model_getvalues->getTableRows("services", "id !=", "0", "id", "asc");
        $data["serv_det"] = $this->model_getvalues->getDetails("services", "id", $a);
        $this->load->view('service_edit', $data);
        $this->form_validation->set_rules('txtTopic', 'Service Name', 'required');
        if ($this->form_validation->run()) {
            $array = array("service_name" => $this->input->post("txtTopic"), "service_description" => $this->input->post("txtDesc"));
            if ($this->model_updatevalues->updateVal('services', $array, "id", $a)) {
                redirect('pages/service_edit/'.$a.'/success');
            }
        }
        $this->load->view('footer');

    }
    
    
    
    public function portfolio($stat = "", $id="") {
        $this->init();
        if ($stat == "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Portfolio deleted");
        }else{
            $data["status"] = "";
        }
        $data['title'] = "Add Portfolio";
        $this->load->view('header', $data);
        $det = $this->model_getvalues->getDetails("details", "email", $this->session->userdata('email'));
        $this->form_validation->set_rules('txtTopic', 'Topic', 'required|trim|xxx_clean');
        
        if ($this->form_validation->run()) {
            
            $config['upload_path'] = "../assets/portfolio/";
            $config['allowed_types'] = "jpg|jpeg|gif|JPG|JPEG";
            $config['overwrite'] = true;
            $config['file_name'] = $this->input->post('txtTopic');
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $err = $this->upload->display_errors();
                $data["status"] = $this->model_htmldata->errorMsg($err);
            } else {
                $file_data = $this->upload->data();
                
            $array = array("portfolio_name" => $this->input->post('txtTopic'),
                "portfolio_link" => $this->input->post('txtLink'),
                "portfolio_img" => $file_data["file_name"],
                "cat_id" => $this->input->post('ddlCat'),
                "portfolio_brief" => $this->input->post('txtBrief')
            );
            
            $this->model_insertvalues->addItem($array, 'portfolio');
            $data["status"] = $this->model_htmldata->successMsg("New Portfolio added succesfully");

                $config['image_library'] = 'gd2';
                $config['source_image'] = "../assets/portfolio/". $file_data["file_name"];
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 1020;
                $config['height'] = 300;

                $this->load->library('image_lib', $config);


                $this->image_lib->resize();
            }
            
            
        }
        
        $data["portfolio"] = $this->model_getvalues->getTableRows("portfolio", "id !=", "0", "id", "asc");
        $data["cats"] = $this->model_getvalues->getTableRows("portfolio_category", "id !=", "0", "id", "asc");
        $this->load->view('portfolio', $data);
        $this->load->view('footer');
    }
    
    
    
    public function portfolio_edit($a, $stat="") {
        $data['title'] = "Edit Portfolio";
        $this->load->view('header', $data);
        if ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("portfolio Edited");
        }else{
            $data["status"] = "";
        }
        
        $data["portfolios"] = $this->model_getvalues->getTableRows("portfolio", "id !=", "0", "id", "asc");
        $data["cats"] = $this->model_getvalues->getTableRows("portfolio_category", "id !=", "0", "id", "asc");
        $data["port_det"] = $this->model_getvalues->getDetails("portfolio", "id", $a);
        $this->form_validation->set_rules('txtTopic', 'Portfolio Name', 'required');
        if ($this->form_validation->run()) {
            $array = array("portfolio_name" => $this->input->post("txtTopic"), "portfolio_brief" => $this->input->post("txtBrief"), "portfolio_link" => $this->input->post("txtLink"), "cat_id" => $this->input->post("ddlCat"));
            if ($this->model_updatevalues->updateVal('portfolio', $array, "id", $a)) {
                redirect('pages/portfolio_edit/'.$a.'/success');
            }
        }
        $this->load->view('portfolio_edit', $data);
        $this->load->view('footer');

    }
    
    
    

    public function edit($a, $stat="") {
        $data['title'] = "Edit Page";
        $this->load->view('header', $data);
        if ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Page Edited");
        }else{
            $data["status"] = "";
        }
        
        $data['page'] = $a;
        
        $data["page_det"] = $this->model_getvalues->getDetails("pages", "page_name", $a);
        $this->load->view('edit_page', $data);
        $this->form_validation->set_rules('txtTitle', 'Page Title', 'required');
        if ($this->form_validation->run()) {
            $array = array("page_title" => $this->input->post("txtTitle"), "page_brief" => $this->input->post("txtBrief"), "page_content" => $this->input->post("txtContent"));
            if ($this->model_updatevalues->updateVal($this->table, $array, "page_name", $a)) {
                redirect('pages/edit/'.$a.'/success');
            }
        }
        $this->load->view('footer');

    }
    
    
    
    public function mission_vision($stat="") {
        $data['title'] = "Edit Mission and Vision";
        $this->load->view('header', $data);
        if ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Mission and Vision Edited");
        }else{
            $data["status"] = "";
        }
        
        $data["page_det"] = $this->model_getvalues->getDetails("others", "id", 1);
        $this->load->view('mission', $data);
        $this->form_validation->set_rules('txtV', 'Vision', 'required');
        if ($this->form_validation->run()) {
            $array = array("vision" => $this->input->post("txtV"), "mission" => $this->input->post("txtM"));
            if ($this->model_updatevalues->updateVal('others', $array, "id", 1)) {
                redirect('pages/mission_vision/success');
            }
        }
        $this->load->view('footer');

    }
	
    
    public function categories($stat = "", $id="") {
        $this->init();
        if ($stat == "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Category deleted");
        }elseif ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Category Edited");
        }
        else{
            $data["status"] = "";
        }
        $data['title'] = "Portfolio/Works Categories";
        $this->load->view('header', $data);
        
        $this->form_validation->set_rules('txtTopic', 'Topic', 'required|trim|xxx_clean');
        if ($this->form_validation->run()) {
            $array = array("category_name" => $this->input->post('txtTopic')
            );
            $this->model_insertvalues->addItem($array, 'portfolio_category');
            $data["status"] = $this->model_htmldata->successMsg("New Portfolio added succesfully");
        }
        $data["token"] = $id;
        $data["s"] = 0;
        $data["categories"] = $this->model_getvalues->getTableRows("portfolio_category", "id !=", "0", "id", "desc");
        $this->load->view('categories', $data);
        $this->load->view('footer');
    }
    
    
    public function cat_edit($a) {
        $this->form_validation->set_rules('txtTopic'.$a.'', 'Category Name', 'required');
        if ($this->form_validation->run()) {
            $array = array("category_name" => $this->input->post("txtTopic".$a.""));
            if ($this->model_updatevalues->updateVal2($a, $array, 'portfolio_category', "id")) {
                redirect('pages/categories/success');
            }
        }

    }
    
    
    
    public function team($stat = "", $id="") {
        $this->init();
        if ($stat == "deleted") {
            $data["status"] = $this->model_htmldata->successMsg("Team member removed");
        }else{
            $data["status"] = "";
        }
        $data['title'] = "Add Team member";
        $this->load->view('header', $data);
        $det = $this->model_getvalues->getDetails("details", "email", $this->session->userdata('email'));
        $this->form_validation->set_rules('txtName', 'Name', 'required|trim|xxx_clean');
        
        if ($this->form_validation->run()) {
            
            $config['upload_path'] = "../assets/team/";
            $config['allowed_types'] = "jpg|jpeg|gif|JPG|JPEG";
            $config['overwrite'] = true;
            $config['file_name'] = $this->input->post('txtName');
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $err = $this->upload->display_errors();
                $data["status"] = $this->model_htmldata->errorMsg($err);
            } else {
                $file_data = $this->upload->data();
                
            $array = array("staff_name" => $this->input->post('txtName'),
                "position" => $this->input->post('txtPos'),
                "img" => $file_data["file_name"]
            );
            
            $this->model_insertvalues->addItem($array, 'team');
            $data["status"] = $this->model_htmldata->successMsg("New Team member added succesfully");

                $config['image_library'] = 'gd2';
                $config['source_image'] = "../assets/team/". $file_data["file_name"];
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 500;
                $config['height'] = 300;

                $this->load->library('image_lib', $config);


                $this->image_lib->resize();
            }
            
            
        }
        
        $data["team"] = $this->model_getvalues->getTableRows("team", "id !=", "0", "id", "asc");
        $this->load->view('team', $data);
        $this->load->view('footer');
    }
    
    
    public function del($x) {
        $this->load->model("model_deleteValues");
        $data = array("topic_id" => $x);
        $this->model_deleteValues->delItem($data, "forum_topics");

        redirect('forums/post');
    }
    
    public function delete_cat($x) {
        $this->load->model("model_deleteValues");
        $data = array("id" => $x);
        $this->model_deleteValues->delItem($data, "portfolio_category");

        redirect('pages/categories/deleted');
    }
    
     public function del_team($x) {
        $this->load->model("model_deleteValues");
        $data = array("id" => $x);
        $this->model_deleteValues->delItem($data, "team");

        redirect('pages/team/deleted');
    }
    
     public function del_port($x) {
        $this->load->model("model_deleteValues");
        $data = array("id" => $x);
        $this->model_deleteValues->delItem($data, "portfolio");

        redirect('pages/portfolio/deleted');
    }
    
    public function del_serv($x) {
        $this->load->model("model_deleteValues");
        $data = array("id" => $x);
        $this->model_deleteValues->delItem($data, "services");

        redirect('pages/services/deleted');
    }
	
   public function del_car($x) {
        $this->load->model("model_deleteValues");
        $data = array("id" => $x);
        $this->model_deleteValues->delItem($data, "career_category");

        redirect('pages/career_category/deleted');
    }
	
	public function del_counsellor($x) {
        $this->load->model("model_deleteValues");
        $data = array("id" => $x);
        $this->model_deleteValues->delItem($data, "add_counsellor");

        redirect('pages/counsellor/deleted');
    }
	
	public function post_delete($x) {
        $this->load->model("model_deleteValues");
        $data = array("id" => $x);
        $this->model_deleteValues->delItem($data, "article");

        redirect('pages/post/deleted');
    }
    
	

}
