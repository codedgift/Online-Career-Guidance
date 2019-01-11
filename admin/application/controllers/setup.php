<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setup extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->table = "courses";
    }

    public function index() {
        
        if($this->model_getvalues->getCount("details", "install", "1") == 0)
        {
            $data['title'] = "Setup";
            $this->load->view('header2', $data);
            $this->load->library("form_validation");
            $data["status"] = "";
            $this->form_validation->set_rules('txtEmail', 'Email', 'required|trim|xxx_clean');
            $this->form_validation->set_rules('txtPasword', 'Password', 'required|trim');

            if ($this->form_validation->run()) {
            $array = array("fullname" => $this->input->post("txtName"),
                "email" => $this->input->post("txtEmail"),
                "business_name" => $this->input->post("txtBiz"),
                "install" => 1,
                "passwd" => $this->input->post("txtPasword"));
            if ($this->model_insertvalues->addItem($array, 'details')) {

                $message = '<p>Congratulations!</p>';
                $message .= '<p>Your website has been setup succesfully.</p>';
                $message .= '<p>Login Details: <br>Email: ' . $this->input->post('txtEmail') . ' <br> Password: ' . $this->input->post('txtPasword') . '</p>';
                $message .= '<p>You can change your theme whenever you wish from your Admin Panel</p>';

                $email = $this->input->post('txtEmail');

                $this->model_htmldata->senderMail($email, $message, "Website Setup Complete");
                redirect('users/login');

                
            }
        }
            $this->load->view('setup.php', $data);
            $this->load->view('footer.php');
        }else{
            redirect('users/dashboard');
        }
        
    }
    
    
    
    public function register($redir = "", $func = "") {

        $this->load->library('facebook');

        $data['login_url'] = $this->facebook->getLoginUrl(array(
            'redirect_uri' => site_url('users/register_fb'),
            'scope' => array("email", "public_profile", "user_friends", "publish_actions") // permissions here
        ));


        $data['title'] = "Register an Account";
        $this->load->view('header', $data);
        $data["status"] = "";
        $this->load->library("form_validation");
        $this->form_validation->set_rules('txtFirstName', 'First Name', 'required|trim|xxx_clean');
        $this->form_validation->set_rules('txtLastName', 'Last Name', 'required|trim|xxx_clean');
        $this->form_validation->set_rules('txtEmail', 'Email Address', 'required|trim|xxx_clean|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('txtPhone', 'Phone Number', 'required|trim|xxx_clean');
        $this->form_validation->set_rules('txtPass', 'Password', 'required|trim|xxx_clean');
        $this->form_validation->set_rules('txtPass2', 'Confirm Password', 'required|trim|matches[txtPass]');

        $this->form_validation->set_message('is_unique', 'This Email Address already exist');

        if ($this->form_validation->run()) {
            $array = array("lastName" => $this->input->post("txtLastName"),
                "firstName" => $this->input->post("txtFirstName"),
                "phone" => $this->input->post("txtPhone"),
                "email" => $this->input->post("txtEmail"),
                "country" => $this->input->post("country"),
                "state" => $this->input->post("state"),
                "lga" => $this->input->post("lga"),
                "age" => $this->input->post("age"),
                "gender" => $this->input->post("gender"),
                "password" => md5($this->input->post("txtPass")),
                "activate" => md5($this->input->post("txtEmail")));
            if ($this->model_insertvalues->addItem($array, 'users')) {

                $key = md5($this->input->post('txtEmail'));

                $message = '<p>Welcome to Nigeria\'s Biggest online training-learning platform. We are exicted you joined.</p>';
                $message .= '<p>Your account has been created using this email on LearnNowNow.</p>';
                $message .= '<p>Login Details: <br>Email: ' . $this->input->post('txtEmail') . ' <br> Password: ' . $this->input->post('txtPass') . '</p>';
                $message .= '<p><a href="' . base_url() . 'users/activate/' . $key . '"><button type="button" style="padding: 5px 20px; background-color: #2a80b9; color: #FFF; font-weight: bold; border: #FFF solid 1px">Please Click here to activate your account</button></a></p>';

                $email = $this->input->post('txtEmail');

                $this->model_htmldata->senderMail($email, $message, "Welcome On Board", $this->input->post("txtLastName") . " " . $this->input->post("txtFirstName"), "LearnNowNow Account Activation");

                if ($redir == "") {
                    redirect('users/registration_complete');
                } else {
                    redirect($redir . '/' . $func);
                }
            }
        }
        $this->load->view("register", $data);
        $this->load->view("footer");
    }
}
