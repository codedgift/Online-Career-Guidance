<?php

class Response extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    

    public function check() {
        $ajax = ajax();
        //$ajax->update('shwres', 'good');
        $ajax->success('Cjax was successfully installed.', 5);     
        

        //$ajax->update('ddlCategoriesView', $page);
    }
    
    public function req_search($item) {
        $ajax = ajax();
        //$ajax->update('reqSearch', $item);
        $courses = $this->model_getvalues->searchVal("courses", "course_name", $item, "course_name", "asc");
        //$res = array();
        foreach ($courses as $course)
        {
            $res[] = $course->course_id;
        }
        $data["courses"] = $res;
        //$ajax->update('', $res);
        $page = $this->load->view('req_requests_search', $data, TRUE);

        $ajax->update('reqSearch', $page);
        //echo $res;
        //$cats = $this->model_getvalues->getTableRows("classes", "course_id", $courses['id'], "classes", "asc");
        

        //$ajax->update('ddlCategoriesView', $page);
    }
    
    public function fetch_category($id, $ex=""){
        
        $ajax = ajax();
        //$data['id'] = $id;
        $cats = $this->model_getvalues->getTableRows("categories", "level_id", $id, "category_id");
        
        $v = '<select class="form-control" name="ddlCategories" id="ddlCategories">';
        $v .= '<option value="" selected>Select Category</option>';
        
        foreach ($cats as $cat)
        {
            $course_count = $this->model_getvalues->getCount("courses", "category_id", $cat->category_id);
            $v .= '<option value="'.$cat->category_id.'">'.$cat->category_name.' ('.$course_count.')</option>';
        }
        
        $v .= '</select>';
        
        
        
        $ajax->update('ddlCategoriesView', $v);
        if($ex == "2")
        {
            $ajax->change('ddlCategories', $ajax->call('../../ajax.php?response/fetch_courses/|ddlCategories|'));
            
        }else{
            $ajax->change('ddlCategories', $ajax->call('../ajax.php?response/fetch_courses/|ddlCategories|'));
        }
    }
    
    public function fetch_courses($id){
        
        $ajax = ajax();
        $courses = $this->model_getvalues->getTableRows("courses", "category_id", $id, "course_id");
        $teacher = $this->model_getvalues->getDetails("teacher", "user_id", $this->session->userdata('user_id'));
        $teacher_courses = explode("`|", $teacher['courses']);
        
        $v = '<select class="form-control" name="ddlCourse" id="ddlCourse" onchange="course_name()">';
        
        foreach ($courses as $course)
        {
            if(in_array($course->course_id, $teacher_courses)) :
                $v .= '<option value="no"  style="font-weight:bolder; color:red">'.$course->course_name.' (This course is curently among the courses you teach!)</option>';
            else :
                $v .= '<option value="'.$course->course_id.'">'.$course->course_name.'</option>';
            endif;
        }
           
        $v .= '</select>';
        $v2 = '<p>Can\'t find the course you want to teach in the category selected? <input type="button" onclick="new_course()" value="Click Here" class="button btn btn-primary" name="btnSubmit"/> to add yours</p>';
        
        $ajax->update('ddlCoursesView', $v);
        $ajax->update('newest', $v2);
    }

    

}