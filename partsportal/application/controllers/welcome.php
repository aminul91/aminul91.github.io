<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_model', 'Common_model', true);
        $this->load->model('action_model', 'Action_model', true);
    }

    public function index()
    {   
        $data = array();        
        $data['location'] = $this->Common_model->get_table_list('parts_location');
        $data['mainContent'] = $this->load->view('home', $data, true);
        $this->load->view('template', $data);
    }

    public function registration()
    {
        $data = array();
        if (isPostBack())
        {
            if (trim(strtolower($_POST['captcha'])) != $_SESSION['captcha'])
            {
               exception("Captcha not matched.");
               redirect('registration'); exit;
            } 
            else
            {
                $user_type = $_POST['user_type'];
                if ($user_type == 2)
                {
                    $data['title']          = $_POST['p_title'];
                    $data['fname']          = $_POST['p_fname'];
                    $data['surname']        = $_POST['p_surname'];
                    $data['dob']            = commonDateFormat($_POST['p_dob'], 'dd/mm/yy');
                    $data['country']        = $_POST['p_country'];
                    $data['street_address'] = $_POST['p_street_address'];
                    $data['city']           = $_POST['p_city'];
                    $data['state']          = $_POST['p_state'];
                    $data['postcode']       = $_POST['p_postcode'];
                    $data['phone']          = $_POST['p_phone'];
                    $data['mobile']         = $_POST['p_mobile'];
                    $data['email']          = $_POST['p_email'];
                    $data['password']       = md5($_POST['p_password']);
                    $data['status']         = 1;
                    $data['created_on']     = date('Y-m-d H:i:s', time());
                    $data['user_type']      = $user_type;
                } 
                else if ($user_type == 3)
                {
                    $data['username'] = $_POST['a_reg_business_name'];
                    $data['reg_business_name'] = $_POST['a_reg_business_name'];
                    $data['business_abn'] = $_POST['a_business_abn'];
                    $data['dealer_licence'] = $_POST['a_dealer_licence'];
                    $data['street_address'] = $_POST['a_street_address'];
                    $data['city'] = $_POST['a_city'];
                    $data['postcode'] = $_POST['a_postcode'];
                    $data['state'] = $_POST['a_state'];
                    $data['phone'] = $_POST['a_phone'];
                    $data['website'] = $_POST['a_website'];
                    $data['mobile'] = $_POST['a_mobile'];
                    $data['email'] = $_POST['a_email'];
                    $data['password'] = md5($_POST['a_password']);
                    $data['contact_person'] = $_POST['a_contact_person'];
                    $data['position_contact_person'] = $_POST['a_position_contact_person'];
                    $data['contact_person_phone'] = $_POST['a_contact_person_phone'];
                    $data['contact_person_email'] = $_POST['a_contact_person_email'];
                    $data['status'] = 1;
                    $data['created_on'] = date('Y-m-d H:i:s', time());
                    $data['user_type'] = $user_type;
                    $data['country'] = 'AU';
                } 
                else if ($user_type == 4)
                {
                    $data['reg_business_name'] = $_POST['i_business_company_name'];
                    $data['username'] = urlencode($_POST['i_business_company_name']);
                    $data['business_company_id_number'] = $_POST['i_business_company_id_number'];
                    $data['address1'] = $_POST['i_address1'];
                    $data['address2'] = $_POST['i_address2'];
                    $data['state'] = $_POST['i_state'];
                    $data['city'] = $_POST['i_city'];
                    $data['postcode'] = $_POST['i_postcode'];
                    $data['country'] = $_POST['i_country'];
                    $data['phone'] = $_POST['i_phone'];
                    $data['website'] = $_POST['i_website'];
                    $data['email'] = $_POST['i_email'];
                    $data['password'] = md5($_POST['i_password']);
                    $data['contact_person'] = $_POST['i_contact_person'];
                    $data['position_contact_person'] = $_POST['i_position_contact_person'];
                    $data['contact_person_phone'] = $_POST['i_contact_person_phone'];
                    $data['contact_person_email'] = $_POST['i_contact_person_email'];
                    $data['alibaba_membership'] = $_POST['i_alibaba_membership'];
                    $data['made_in_china'] = $_POST['i_made_in_china'];
                    $data['other_membership'] = $_POST['i_other_membership'];
                    $data['status'] = 1;
                    $data['created_on'] = date('Y-m-d H:i:s', time());
                    $data['user_type'] = $user_type;
                }

                $member_id = $this->Common_model->save('parts_member', $data);
                
                unset($data);
                $data['created_on'] = date('Y-m-d H:i:s', time());
                $data['status'] = 1;
                $data['member_id'] = $member_id;
                $data['package_id'] = default_package_id();
                $this->Common_model->save('parts_member_packege', $data);
                message('Registration has been completed successfully');
                redirect('login'); exit;
            }                        
        }
        
        $data['mainContent'] = $this->load->view('registration', $data, true);
        $this->load->view('template', $data);
    }

    public function login()
    {
        $data = array();
        $data['mainContent'] = $this->load->view('login', '', true);
        $this->load->view('template', $data);
    }

    function ajax_p_set_state_list()
    {
        $country_code = $_POST['country_code'];
        $statelist = getStateList($country_code);
        $str = '';
        if ($statelist)
        {
            foreach ($statelist as $k => $v)
            {
                $str .= '<option value="' . $k . '">' . $v . '</option>';
            }
        }

        echo $str;
        exit;
    }

    function ajax_c_set_state_list()
    {
        $country_code = $_POST['country_code'];
        $statelist = getStateList($country_code);
        $str = '';
        if ($statelist)
        {
            foreach ($statelist as $k => $v)
            {
                $str .= '<option value="' . $k . '">' . $v . '</option>';
            }
        }

        echo '<select id="state" name="state">' . $str . '</select>';
        exit;
    }

    function visit_profile($username = '')
    {
        check_profile_owner($username);
        $data = array();
        $userInfo = get_user_info(trim($username));
        if($userInfo['user_type'] == 3)
        {
           $userInfo['address'] = $userInfo['street_address'].', '.$userInfo['city'].', '.$userInfo['postcode'].', '.$userInfo['country'];
        }
        else if($userInfo['user_type'] == 4)
        {
           $userInfo['address'] = $userInfo['address1'].', '.$userInfo['address2'].', '.$userInfo['city'].', '.$userInfo['country'];
        }
        
        
        $data['username'] = $username;
        $data['contact_person_phone'] = $userInfo['contact_person_phone'];
        $data['contact_person_email'] = $userInfo['contact_person_email'];        
        $data['address'] = $userInfo['address'];
        $data['total_listing'] = $this->Action_model->total_member_listing($userInfo['member_id']);
        $data['mainContent'] = $this->load->view('profile/visit_profile', $data, true);
        $this->load->view('preofile_template', $data);
    }

    function faq()
    {
        $data = array();
        $this->db->where('status', 1);
        $data['faq_list'] = $this->db->get('parts_faq_manager')->result_array();
        $data['mainContent'] = $this->load->view('faq', $data, true);
        $this->load->view('template', $data);
    }

    function dealer_contact($username = '', $pagename = '')
    {
        check_profile_owner($username);
        $data = array();
        if (isPostBack())
        {
            $mailBody = $this->load->view('mail/dealer-contact', '', true);
            $mailBody = str_replace('<##MEMBER##>', $username, $mailBody);
            $mailBody = str_replace('<##VISITOR##>', $_POST['yourname'], $mailBody);
            $mailBody = str_replace('<##TITLE##>', $_POST['title'], $mailBody);
            $mailBody = str_replace('<##EMAIL##>', $_POST['email'], $mailBody);
            $mailBody = str_replace('<##ADDRESS##>', $_POST['address'], $mailBody);
            $mailBody = str_replace('<##COUNTRY##>', $_POST['country'], $mailBody);
            $mailBody = str_replace('<##STATE##>', $_POST['state'], $mailBody);
            $mailBody = str_replace('<##POSTCODE##>', $_POST['postcode'], $mailBody);
            $mailBody = str_replace('<##HOME_PHONE##>', $_POST['homephone'], $mailBody);
            $mailBody = str_replace('<##BUSINESS_PHONE##>', $_POST['businessphone'], $mailBody);
            $mailBody = str_replace('<##MOBILE##>', $_POST['mobile'], $mailBody);
            $mailBody = str_replace('<##FAX##>', $_POST['fax'], $mailBody);
            $mailBody = str_replace('<##PREFERED_CONTACT_METHOD##>', $_POST['contact_method'], $mailBody);
            $mailBody = str_replace('<##MESSAGE##>', $_POST['message'], $mailBody);
            $mailBody = str_replace('<##TRADINGIN##>', $_POST['trading'] ? 'Yes' : 'No', $mailBody);
            $mailBody = str_replace('<##TRADINGIN_DETAILS##>', $_POST['trading_msg'], $mailBody);
            $mailBody = str_replace('<##RESEARCHED_FINANCE##>', $_POST['researched_finance'] ? 'Yes' : 'No', $mailBody);
            $mailBody = str_replace('<##QUOTE_FOR_FINANCE##>', $_POST['receiving_quote'] ? 'Yes' : 'No', $mailBody);

            
            $subject = "Visitor inquery " . time();

            $this->load->library('phpmailer/PHPMailer');
            $mail = new PHPMailer();
            $mail->SetFrom($this->config->item('site_email_addr'), $this->config->item('sitename'));
            $mail->AddReplyTo($this->config->item('site_email_addr'), $this->config->item('sitename'));
            $mail->Subject = $subject;

            $body = $mailBody;
            $address = get_user_email_by_username($username);
            $mail->AddAddress($address, $username);
            $mail->MsgHTML($body);
            $mail->Send();
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

            message('Your query has been sent successfully');
        }
        $data['username'] = $username;
        $data['mainContent'] = $this->load->view('profile/dealer_contact', $data, true);
        $this->load->view('preofile_template', $data);
    }

    function contact_us()
    {
        $data = array();
        $data['mainContent'] = $this->load->view('contact_us', $data, true);
        $this->load->view('template', $data);
    }

    function send_contact_us_msg()
    {
        if (isPostBack())
        {
            $data_info = array();
            $data_info['name'] = $_POST['name'];
            $data_info['email'] = $_POST['email'];
            $data_info['subject'] = $_POST['subject'];
            $data_info['message'] = $_POST['message'];
            $ADMIN_EMAIL_ID = $this->config->item('contact_us_email');
            

            $this->load->library('phpmailer/PHPMailer');
            $mail = new PHPMailer();
            $mail->SetFrom( $data_info['email'] ,  $data_info['name']);
            $mail->AddReplyTo( $data_info['email'], $data_info['name']);
            $mail->Subject =  $data_info['subject'];

            $body =   $data_info['message'];
            $address = $ADMIN_EMAIL_ID;
            $mail->AddAddress($address);
            $mail->MsgHTML($body);
            $mail->Send();
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

            message('Thank you.You have sent an email to us. We will contact with you.');
            redirect('contact_us');
        }
    }
    function suggestion()
    {
         if (isPostBack())
        {
            $data_info = array();
            $data_info['name'] = $_POST['name'];
            $data_info['phone'] = $_POST['phone'];
            $data_info['email'] = $_POST['email'];
            $data_info['subject'] = $_POST['subject'];
            $data_info['suggestion'] = $_POST['suggestion'];
            $ADMIN_EMAIL_ID = 'kamrulzuiu@gmail.com';
            

            $this->load->library('phpmailer/PHPMailer');
            $mail = new PHPMailer();
            $mail->SetFrom( $data_info['email'],$data_info['name']);
            $mail->AddReplyTo( $data_info['email'],$data_info['name']);
            $mail->Subject =  $data_info['subject'];

            $body =   $data_info['message'];
            $address = $ADMIN_EMAIL_ID;
            $mail->AddAddress($address);
            $mail->MsgHTML($body);
            $mail->Send();
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();
             $this->Common_model->save('parts_suggestion',$data_info);

            message('Thank you for your valuable suggestion');
            
            redirect('suggestion');
        }
        
        $data = array();
        $data['mainContent'] = $this->load->view('suggestion', $data, true);
        $this->load->view('template', $data); 
    }
    
    function update_about_me()
    {
        $data = array();
        $member_id = member_id();
        if(isPostBack())
        {            
            $data['info'] = $_POST['info'];
            $data['status'] = 1;            
            $row = $this->Action_model->get_about_me_info($member_id);
            if($row)
            {
                $this->Common_model->update('parts_member_info',$data,'member_id',$member_id);
            }
            else 
            {
                $data['member_id'] = $member_id;
                $this->Common_model->save('parts_member_info',$data); 
            }
        }
        $data['aboutme'] = $this->Action_model->get_about_me_info($member_id);
        $data['mainContent'] = $this->load->view('profile/update_about_me', $data, true);
        $this->load->view('template', $data);
    }
    
    function find_dealer()
    {
        $data = array();
        $data['delList'] = $this->Action_model->get_dealer_list();
        $data['mainContent'] = $this->load->view('find_dealer', $data, true);
        $this->load->view('template', $data);
    }
    
    function parts_detail($username='',$parts_list_id=0,$type_listing_id=0)
    {
       $data = array();
       $data['username']    = $username;
       $data['partsInfo'] = $this->Action_model->get_parts_information($parts_list_id,$type_listing_id);
       
       $data['listing_id'] = $listing_id = $data['partsInfo']['listing_id'];
       $data['partsImg'] = $this->Action_model->get_listing_image($listing_id); 
       //dumpVar($data);
      
       $data['mainContent'] = $this->load->view('profile/parts_detail', $data, true);
       $this->load->view('preofile_template', $data); 
    }
    
    function partsdetail($parts_list_id=0,$type_listing_id=0)
    {
       $data = array();
       $data['partsInfo'] = $this->Action_model->get_parts_information($parts_list_id,$type_listing_id);              
       $data['listing_id'] = $listing_id = $data['partsInfo']['listing_id'];
       $data['partsImg'] = $this->Action_model->get_listing_image($listing_id);  
       $data['mainContent'] = $this->load->view('profile/partsdetail', $data, true);
       $this->load->view('template', $data);
    }
    
    function add_credit()
    {
       $data = array();
       $data['mainContent'] = $this->load->view('profile/add_credit', $data, true);
       $this->load->view('template', $data);
    }
    
    function save_credit()
    {
       if(isPostBack())
       {
           dumpVar($_POST);
       }
    }
}
?>