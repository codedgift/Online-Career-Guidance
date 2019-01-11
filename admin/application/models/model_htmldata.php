<?php

class Model_htmlData extends CI_Model {

    function successMsg($msg) {
        return '<div class="alert alert-success"><strong><i class=" icon-ok-4"></i> Success!</strong> ' . $msg . '.</div>';
    }

    function errorMsg($msg) {
        return '<div class="alert alert-danger"><strong><i class=" icon-mic"></i> Oops!</strong> ' . $msg . '.</div>';
    }
    
    function verifyMsg($msg) {
        return '<div class="alert alert-danger" style="margin-bottom:0px"><strong><i class=" icon-tag"></i></strong> ' . $msg . '.</div>';
    }

    function infoMsg($msg) {
        return '<div class="alert alert-info"><strong>Oops!</strong> ' . $msg . '.</div>';
    }
    

    function adminMail($message, $subject) {
        $this->load->library("email", array('mailtype' => 'html'));
        $this->email->from('admin@learnnownow.com', 'LNN System');
        $this->email->to('support@learnnownow.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }
    

    function senderMail($email, $message, $subject, $site, $site_email) {
        $email_msg = $this->message_body($title, $name, $message);
        $this->load->library("email", array('mailtype' => 'html'));
        $this->email->from($site_email, $site);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($email_msg);
        $this->email->send();
    }
    
    function senderMail2($email, $message, $subject) {
        $email_msg = $this->message_body($title, $name, $message);
        $this->load->library("email", array('mailtype' => 'html'));
        //$this->email->from($site_email, $site);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($email_msg);
        $this->email->send();
    }
    
    
    function message_body($title, $name, $msg) {
        $bdy = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>'.$title.'</title>
  </head>
  <body>
  <p>'.$msg.'</p>
    </body>
</html>
';
        return $bdy;
    }

}

?>