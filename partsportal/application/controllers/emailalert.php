<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emailalert extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_model', 'Common_model', true);
        $this->load->model('emailalert_model', 'Emailalert_model', true);
        $this->load->model('action_model', 'Action_model', true);
        $this->load->model('account_model', 'Account_model', true);
        $this->load->model('mylisting_model', 'Mylisting_model', true);
    }
    
    public function index()
    {
        $data = array();
	if(isPostBack())
        {
            if(empty($_SESSION['captcha']) || trim(strtolower($_POST['captcha'])) != $_SESSION['captcha']) 
            {
               exception("Captcha Not Matched.");
            } 
            else 
            {
                $contact_method = $_POST['contact_method'];
                if($contact_method == "parts_equipment_parts")
                {
                    $this->Emailalert_model->save_parts_equipment_parts($_POST);
                    $data['query_equipment'] = $query_equipment = 'Equipment Parts';
                }
                if($contact_method == "parts_equipment_dismantling")
                {
                    $this->Emailalert_model->save_parts_equipment_dismantling($_POST);
                    $data['query_equipment'] = $query_equipment = 'Equipment Dismantling';
                }
                if($contact_method == "parts_lubes")
                {
                    $this->Emailalert_model->save_parts_lubes($_POST);
                    $data['query_equipment'] = $query_equipment = 'Lubes';
                }
                if($contact_method == "parts_tyre")
                {
                    $this->Emailalert_model->save_parts_tyre($_POST);
                    $data['query_equipment'] = $query_equipment = 'Tyre';
                }
                
                if($contact_method == "parts_workshop_parts_manuals")
                {
                    $this->Emailalert_model->save_parts_workshop_parts_manuals($_POST);
                    $data['query_equipment'] = $query_equipment = 'Workshop & Parts Manuals';
                }
                if($contact_method == "parts_machine_attachments")
                {
                    $this->Emailalert_model->save_parts_machine_attachments($_POST);
                    $data['query_equipment'] = $query_equipment = 'Machine Attachments';
                }
                if($contact_method == "parts_workshop_tools")
                {
                    $this->Emailalert_model->save_parts_workshop_tools($_POST);
                    $data['query_equipment'] = $query_equipment = 'Workshop Tools';
                }
                message('Email alert query has been saved successfully for ['.$query_equipment.']');
            }
        }
        $data['make']                   = get_make_list(1);
        $data['equipment_type']         = get_parent_equipment_type(1); 
        $data['location']               = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent']            = $this->load->view('email_alert/email_alert', $data, true);  
        $this->load->view('template', $data);
     }
     
     function load_mail_content()
     {
         $data = array();
         $mail_content = $_POST['mail_content'];
         if($mail_content == 'parts_equipment_parts')
         {             
             $data['make']        = get_make_list(1);
             $data['location']    = $this->Common_model->get_table_list('parts_location');              
             $data['equipment_type']        = get_parent_equipment_type(1);
             $content = $this->load->view('email_alert/alert_equipment_parts', $data, true); 
         }
         if($mail_content == 'parts_equipment_dismantling')
         {             
             $data['make']        = get_make_list(2);
             $data['location']    = $this->Common_model->get_table_list('parts_location'); 
             $data['equipment_type']        = get_parent_equipment_type(2);
             $content = $this->load->view('email_alert/alert_parts_equipment_dismantling', $data, true); 
         }
         if($mail_content == 'parts_lubes')
         {             
             $data['make']              = get_make_list(3); 
             $data['location']          = $this->Common_model->get_table_list('parts_location');
             $data['lube_type']         = get_parent_equipment_type(3);
             $content = $this->load->view('email_alert/alert_parts_lubes', $data, true); 
         }
         
         if($mail_content == 'parts_tyre')
         {             
             $data['location']          = $this->Common_model->get_table_list('parts_location');
             $data['category']          = get_parent_equipment_type(4);
             $content = $this->load->view('email_alert/alert_parts_tyre', $data, true); 
         }
         if($mail_content == 'parts_workshop_parts_manuals')
         {             
             $data['make']                      = get_make_list(5);
             $data['location']                  = $this->Common_model->get_table_list('parts_location'); 
             $data['equipment_type']            = get_parent_equipment_type(5);
             $content = $this->load->view('email_alert/alert_parts_workshop_parts_manuals', $data, true); 
         }
         if($mail_content == 'parts_machine_attachments')
         {             
             $data['make']         = get_make_list(6);
             $data['location']     = $this->Common_model->get_table_list('parts_location'); 
             $data['equipment_type']            = get_parent_equipment_type(6);
             $content = $this->load->view('email_alert/alert_parts_machine_attachments', $data, true); 
         }         
         if($mail_content == 'parts_workshop_tools')
         {             
             $data['location']              = $this->Common_model->get_table_list('parts_location'); 
             $data['category']              = get_parent_equipment_type(7);
             $content = $this->load->view('email_alert/alert_parts_workshop_tools', $data, true); 
         }
         
         echo $content;exit;
     }
     
     public function get_model()
     {
        $make_model = $this->Common_model->get_make_model2($_POST['parent_id'],$_POST['parts_list_id']); 
        $all_model = '';
        foreach ($make_model as $value)
        {
            $all_model.="<option value='{$value['make_model_id']}'>{$value['name']}</option>";
        }
        echo $all_model;
     }
     
     function parts_list($username='',$pagename='')
     {
        check_profile_owner($username);
        $data['username'] = $username;
        $data['user_information'] = $user_information = get_user_info($username);
        $data['userListing'] = $this->Mylisting_model->get_parts_information($user_information['member_id']);
        
        $data['mainContent'] = $this->load->view('profile/parts_list', $data, true);  
        $this->load->view('preofile_template', $data); 
     }
     function about($username='',$pagename='')
     {
        check_profile_owner($username);
        $data['username'] = $username;
        $data['user_information'] = $user_information = get_user_info($username);
        $data['aboutme'] = $this->Action_model->get_about_me_info($user_information['member_id']);
        $data['mainContent'] = $this->load->view('profile/about', $data, true);  
        $this->load->view('preofile_template', $data);  
     }
     
     function parts($parts_name='')
     {
        $data['description'] = $this->Action_model->get_description_information_by_name($parts_name);
        $data['mainContent'] = $this->load->view('parts', $data, true);  
        $this->load->view('template', $data);  
     }
     function about_us()
     { 
        $data['description'] = $this->Action_model->get_description_information(2);
          
        $data['mainContent'] = $this->load->view('about_us', $data, true);  
        $this->load->view('template', $data);  
     }
     function advertise_with_us()
     {
        $data['description'] = $this->Action_model->get_description_information(3);
        $data['mainContent'] = $this->load->view('advertise_with_us', $data, true);  
        $this->load->view('template', $data);  
     }
     function page($parts_name)
     {
        $data['description'] = $this->Action_model->get_description_information_by_name($parts_name);
        $data['mainContent'] = $this->load->view('home_static_page', $data, true);  
        $this->load->view('template', $data);  
     }
     
     function contact_information()
     {
        if(isPostBack())
        {
            $data['w'];
            
            
            dumpVar($_POST);
        }
        $data['cInfo'] = $this->Account_model->get_member_information(member_id()); 
        $data['mainContent'] = $this->load->view('contact_information', $data, true);  
        $this->load->view('template', $data);  
     }
    function ajax_child_equipment_type()
    {
        $parent_category_id = $_POST['parent_category_id'];
        $parts_list_id = $_POST['parts_list_id'];
        $str = '<option value="">Select One</option>';
        
        if($parent_category_id>0)
        {
            $subcategoryInfo = get_child_equipment_type($parent_category_id,$parts_list_id);
            if($subcategoryInfo)
            {
               foreach($subcategoryInfo as $sinfo)
               {
                   $str .= '<option value="'.$sinfo['category_id'].'">'.$sinfo['name'].'</option>';
               }
            }
        }
        echo $str;
        exit;
    }
    
    function sample_check()
    {
       $data = array();
       $data['mainContent'] = $this->load->view('sample_check', $data, true);  
       $this->load->view('preofile_template', $data);  
    }
    
    function report_a_scam()
    {
        if (isPostBack())
        {
            $data_info = array();
            $data_info['title'] = $subject = $_POST['title'];
            $data_info['description'] = $_POST['description'];
            $ADMIN_EMAIL_ID = $this->config->item('report_a_scam_email');

            $this->load->library('phpmailer/PHPMailer');
            $mail = new PHPMailer();
            $mail->SetFrom($this->config->item('site_email_addr'), $this->config->item('sitename'));
            $mail->AddReplyTo($this->config->item('site_email_addr'), $this->config->item('sitename'));
            $mail->Subject = $subject;

            $body =   $data_info['description'];
            $address = $ADMIN_EMAIL_ID;
            $mail->AddAddress($address);
            $mail->MsgHTML($body);
            $mail->Send();
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

            message('Thank you for your reporting.');
            redirect('report_a_scam');
       }
       $data = array();
       $data['mainContent'] = $this->load->view('report_a_scam', $data, true);  
       $this->load->view('template', $data);  
    }
}
?>