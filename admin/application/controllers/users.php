<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


/**
 * Users
 * 
 * @package   
 * @author Gift Amah
 * @version 2016
 * @access public
 */

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    protected function init() {
        if ($this->session->userdata('is_logged_in')) {

            $data['user'] = $this->model_getvalues->getDetails("details", "email", $this->session->userdata('email'));
        } else {
            redirect("users/login");
        }
    }
    
    public function index()
    {
        redirect('users/dashboard');
    }

    public function profile_pic($id) {
        if (file_exists("assets/user_images/" . $user["pic"] . "") == FALSE || $user["pic"] == null) {
            $img = '<img src="' . base_url() . '"assets/img/user2.png" alt="Teacher" style="height: 30px" class="img styled" />';
        } else {
            $img = '<img src="' . base_url() . '"assets/user_images/' . $user["pic"] . ' alt="Teacher" style="height: 30px" class="img styled" />';
        }
    }

    public function dashboard($stat = "") {
        
        $this->init();
        $data['title'] = "My Dashboard";
        $data['status'] = "";
        
        $data["user"] = $this->model_getvalues->getDetails("details", "email", $this->session->userdata('email'));
        $this->load->view('header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('footer');
    }

    public function my_profile() {
        //App->init();
        $this->init();
        $data['title'] = "My Profile";
        $data["user"] = $this->model_getvalues->getDetails("users", "user_id", $this->session->userdata('user_id'));
        $this->load->view('header', $data);
        $data['status'] = "";
        $this->load->view('my_profile', $data);
        $this->load->view('footer');
    }

    private function chkVerified() {
        $user = $this->model_getvalues->getDetails("users", "user_id", $this->session->userdata('user_id'));
        if ($user['verified'] === '0') {
            return true;
        }
    }



    public function activate($x) {
        $data['title'] = "Account Activation";
        $this->load->view('header', $data);
        $data["status"] = "";
        $this->load->library("form_validation");
        $data["user"] = $this->model_getvalues->getDetails("users", "activate", $x);
        if ($data["user"]) {
            $arr = array("status" => '1');
            $this->model_updatevalues->updateVal("users", $arr, "user_id", $data["user"]["user_id"]);
            $data["status"] = "Hello " . $data["user"]["lastName"] . " " . $data["user"]["firstName"] . ", You have succesfully activated your account. <a style='text-decoration: underline' href='" . base_url() . "users/login'> Click here to Login</a>";
            $this->load->view('activate', $data);
        } else {
            $data["status"] = $this->model_htmldata->errorMsg("Invalid activation credentials");
            $this->load->view('activate_error', $data);
        }
        
        $this->load->view('footer');
    }

    public function login($redir = "", $func = "", $param = "") {

       

        $data['title'] = "Login";
        $this->load->view('header', $data);
        $this->load->library("form_validation");
        $data["status"] = "";
        $this->form_validation->set_rules('txtLoginEmail', 'Email', 'required|trim|xxx_clean|callback_validate_credentials');
        $this->form_validation->set_rules('txtLoginPass', 'Password', 'required|trim');

        if ($this->form_validation->run()) {
            $user = $this->model_getvalues->getDetails("details", "email", $this->input->post("txtLoginEmail"));

            
                $data = array(
                    'email' => $this->input->post("txtLoginEmail"),
                    'is_logged_in' => 1,
                    'biz_name' => $user['business_name'],
                    'template' => $user['template'],
                    'user_name' => $user['fullname']
                );
                $this->session->set_userdata($data);
                redirect('users/dashboard');
            
        }
        $this->load->view('login.php', $data);
        $this->load->view('footer.php');
    }
    
    
    public function validate_credentials() {
        if ($this->model_getvalues->can_login()) {
            return true;
        } else {
            $this->form_validation->set_message("validate_credentials", "Incorrect Login Credentials");
            return false;
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('users/dashboard');
    }

    public function registration_complete() {
        $data['title'] = "Registration Complete";
        $this->load->view('header', $data);
        $this->load->view('registration_complete');
        $this->load->view('footer');
    }

    public function profile($id) {
        //App->init();
        $this->init();
        $data['title'] = "Profile";
        $data["user"] = $this->model_getvalues->getDetails("users", "user_id", $id);
        $this->load->view('header', $data);
        $data['status'] = "";
        $this->load->view('profile', $data);
        $this->load->view('footer');
    }


    public function edit_contact($stat = "") {

        $this->init();
        $data['title'] = "Edit Profile";
        $this->load->view('header', $data);

        $data['contact'] = $this->model_getvalues->getDetails("contact", "contact_email !=", "dd");
        $data['details'] = $this->model_getvalues->getDetails("details", "email !=", "dd");
        if ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Your profile has been updated");
        } else {
            $data['status'] = '';
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('txtEmail', 'Email Address', 'required|trim|xxx_clean|valid_email');


        if ($this->form_validation->run()) {
            $array = array("contact_email" => $this->input->post("txtEmail"),
                "facebook" => $this->input->post("txtFacebook"),
                "twitter" => $this->input->post("txtTwitter"),
                "linkedin" => $this->input->post("txtLinkedin"),
                "address" => $this->input->post("txtAddr"),
                "phone" => $this->input->post("txtPhone"),
                "google" => $this->input->post("txtGoogle"),
                "skype" => $this->input->post("txtSkype"));
            
            $array2 = array("email" => $this->input->post("txtEmail"),
                "fullname" => $this->input->post("txtName"),
                "business_name" => $this->input->post("txtBiz"),
                "color" => $this->input->post("txtColor"),
                "template" => $this->input->post("ddlTemplate"));
            
            $this->model_updatevalues->updateVal("contact", $array, "contact_email", $this->session->userdata('email'));
            
            if ($this->model_updatevalues->updateVal("details", $array2, "email", $this->session->userdata('email'))) {
                redirect('users/edit_contact/success');
            }
        }

        $this->load->view('edit_profile', $data);
        $this->load->view('footer');
    }

    public function change_image($stat = "") {
        $this->init();
        $data['title'] = "Change Header Image";
        $data['det'] = $this->model_getvalues->getDetails("details", "email", $this->session->userdata('email'));
        $this->load->view('header', $data);
        if ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Header Image Uploaded");
        } else {
            $data["status"] = "";
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('btnSub', 'Company Name', '');
        if ($this->form_validation->run()) {
            $config['upload_path'] = '../assets/images/';
            $config['allowed_types'] = "jpg|jpeg|gif|png|JPG|JPEG";
            $config['overwrite'] = true;
            $config['file_name'] = "hdh";
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $err = $this->upload->display_errors();
                $data["status"] = $this->model_htmldata->errorMsg($err);
            } else {
                $file_data = $this->upload->data();
                $this->model_updatevalues->updateVal("details", array("header_image" => $file_data["file_name"]), "email", $this->session->userdata("email"));

                $config['image_library'] = 'gd2';
                $config['source_image'] = '../assets/images/' . $file_data["file_name"] . '';
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 1020;
                $config['height'] = 300;

                $this->load->library('image_lib', $config);


                $this->image_lib->resize();

                redirect('users/change_image/success');
            }
        }

        $this->load->view('change_image', $data);
        $this->load->view('footer');
    }
    
    
    public function change_logo($stat = "") {
        $this->init();
        $data['title'] = "Change Header Image";
        $data['det'] = $this->model_getvalues->getDetails("details", "email", $this->session->userdata('email'));
        $this->load->view('header', $data);
        if ($stat == "success") {
            $data["status"] = $this->model_htmldata->successMsg("Logo Uploaded");
        } else {
            $data["status"] = "";
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('btnSub', 'Company Name', '');
        if ($this->form_validation->run()) {
            $config['upload_path'] = '../assets/logo/';
            $config['allowed_types'] = "jpg|jpeg|gif|png|JPG|JPEG";
            $config['overwrite'] = true;
            $config['file_name'] = "logo";
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                $err = $this->upload->display_errors();
                $data["status"] = $this->model_htmldata->errorMsg($err);
            } else {
                $file_data = $this->upload->data();
                $this->model_updatevalues->updateVal("details", array("logo" => $file_data["file_name"]), "email", $this->session->userdata("email"));

                $config['image_library'] = 'gd2';
                $config['source_image'] = '../assets/logo/' . $file_data["file_name"] . '';
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 500;
                $config['height'] = 150;

                $this->load->library('image_lib', $config);


                $this->image_lib->resize();

                redirect('users/change_logo/success');
            }
        }

        $this->load->view('change_logo', $data);
        $this->load->view('footer');
    }

    public function change_password() {
        $this->init();
        $data['status'] = '';

        $data['title'] = "Change Password";
        $this->load->view('header', $data);
        $this->form_validation->set_rules('txtOldPass', 'Old Password', 'required');
        $this->form_validation->set_rules('txtNewPass', 'New Password', 'required');
        $this->form_validation->set_rules('txtNewPass2', 'Confirm New Password', 'required|trim|matches[txtNewPass]');
        $password = $this->input->post('txtOldPass');

        if ($this->form_validation->run()) {
            if ($this->model_getvalues->getDetails("details", "passwd", $password)) {
                if ($this->model_updatevalues->updatePassword($this->session->userdata("email"))) {

                    $data["status"] = $this->model_htmldata->successMsg("You succesfully updated your password");
                }
            } else {
                $data["status"] = $this->model_htmldata->errorMsg("Your Old Password is incorrect");
            }
        }
        $this->load->view("change_password", $data);
        $this->load->view('footer');
    }

    public function forgot_password() {

        $data['title'] = "Forgot Password";
        $this->load->view('header', $data);
        $this->load->library("form_validation");
        $data["status"] = "";

        $this->form_validation->set_rules('txtForgotEmail', 'Email', 'required|trim|xxx_clean|callback_validate_email');

        if ($this->form_validation->run()) {
            $user = $this->model_getvalues->getDetails("users", "email", $this->input->post('txtForgotEmail'));

            $key = md5($this->input->post('txtForgotEmail'));

            $message = '<p>This is a request for password recovery for your account on the LearnNowNow.com.</p> <p>To reset your password, please click on the link below.</p>';
            $message .= '<a href="' . base_url() . 'users/reset_password/' . $key . '">Please Click here to reset password</a>';

            $email = $this->input->post('txtForgotEmail');


            $this->model_htmldata->senderMail($email, $message, "Password Reset", $user['firstName'] . " " . $user['lastName'], "Reset your password");

            $data["status"] = $this->model_htmldata->successMsg("A Password Recovery has been sent to your Email address. Please check");
        }
        $this->load->view("forgot_password", $data);
        $this->load->view('footer');
    }

    public function validate_email() {
        if ($this->model_getvalues->check_email()) {
            return true;
        } else {
            $this->form_validation->set_message("validate_email", "This Email does not match any User");
            return false;
        }
    }

    public function reset_password($x) {
        $data['title'] = "Password Reset";
        $this->load->view("header");
        $this->load->library("form_validation");
        $data["status"] = "";

        $data["status"] = "";
        $this->load->library("form_validation");
        $user = $this->model_getvalues->getDetails("users", "activate", $x);
        if ($user) {
            $data['valid'] = true;
            $data['user'] = $user;
            $this->form_validation->set_rules('txtNewPass', 'Password', 'required|trim');
            $this->form_validation->set_rules('txtNewPass2', 'Confirm Password', 'required|trim|matches[txtNewPass]');
            if ($this->form_validation->run()) {

                if ($this->model_updatevalues->updatePassword($user["user_id"])) {
                    $data["status"] = $this->model_htmldata->successMsg("You succesfully updated your password. <a style='color: blue; text-decoration: underline' href='" . base_url() . "users/login'> Click here to Login</a>");
                }
            }
        } else {
            $data['valid'] = false;
            $data["status"] = $this->model_htmldata->errorMsg("Sorry, you are not eligibe to view this page: Invalid Token!");
        }
        $this->load->view("reset_password", $data);
        $this->load->view('footer');
    }


    public function my_classes() {
        $this->init();
        $data['title'] = "My Classes";
        $this->load->view('header', $data);
        $data['status'] = "";
        $data['s'] = 0;
        $data['i'] = 0;
        $data["classes"] = $this->model_getvalues->getTableRows2("classes", "status !=", 0, "user_id", $this->session->userdata('user_id'), "class_id", "desc");
        $data["classes2"] = $this->model_getvalues->getTableRows2("classes", "status", 0, "user_id", $this->session->userdata('user_id'), "class_id", "desc", 8);
        $this->load->view('my_classes', $data);
        $this->load->view('footer');
    }

    public function delete_my_class($cid) {
        $this->load->model("model_deleteValues");
        $data = array("class_id" => $cid);
        $this->model_deleteValues->delItem($data, "classes");

        redirect('users/my_classes');
    }

}
