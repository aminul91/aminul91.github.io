<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model', 'Admin_model', true); 
    }
    
    public function index()
    {
        if(is_admin_loggedin()) { redirect('admin_home');exit; } 
        $data = array();
        $this->load->view('admin/login', $data);
    }
    
    public function login_check()
    {
       if(isPostBack())
       {
          $email = $_POST['email_address'];
          $password = password_decode($_POST['password']);
          $adminInfo = $this->Admin_model->admin_login_check($email,$password); 
          
          if($adminInfo)
          {
             $_SESSION['admin_username'] = $adminInfo['username'];
             $_SESSION['is_admin_loggedin'] = '1';
             $_SESSION['admin_id'] = $adminInfo['admin_id'];
             message($this->config->item('admin_login'));
             redirect('admin_home');exit;
          }
          exception($this->config->item('invalid_login_info'));
          redirect('admin');
       } 
    }
    
    public function logout()
    {
       unset($_SESSION['admin_username'],$_SESSION['is_admin_loggedin'],$_SESSION['admin_id']); 
       message($this->config->item('admin_logout'));
       redirect('admin');
    }
}
?>