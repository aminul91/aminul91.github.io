<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_model', 'Common_model', true);
    }
    
    public function login()
    {
        $data = array();        
        $data['mainContent'] = $this->load->view('login', '', true);  
        $this->load->view('template', $data);
    }
    
    function login_check()
    {
        if(isPostBack())
        {
            $data['email']     = $_POST['email'];
            $data['password']  = md5($_POST['password']);
            
            $UserInfo = $this->Common_model->login_check($data);              
            if($UserInfo)
            {
               $_SESSION['is_member_loggedin'] = '1';
               $_SESSION['member_id']        = $UserInfo['member_id'];
               $_SESSION['member_type']      = $UserInfo['user_type'];
               $_SESSION['username']         = $UserInfo['username'];
               
               message("You are Succssfully Loggedin.");
               redirect('profile');exit;
            }
            exception("Your login Info not matched.");
            redirect('login');
        }    
    }
    
    public function logout()
    {
        unset($_SESSION['is_member_loggedin'],$_SESSION['member_id'],$_SESSION['member_type'],$_SESSION['username']);
        
        message("You Succssfully Loggeout.");
        redirect(BASEURL);exit;
    }
    
    function email_check()
    {
        $email = $this->input->post('email');
        $this->db->where('email', $email);
        $email_check = $this->db->get('parts_member')->row_array();
        if (!empty($email_check))
        {
            echo "INVALID_EMAIL";
        }
        else
        {
            echo "VALID_EMAIL";
        }
    }
   
}
?>