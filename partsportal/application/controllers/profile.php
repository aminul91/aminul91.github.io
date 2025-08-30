<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('common_model', 'Common_model', true);
        $this->load->model('account_model', 'Account_model', true);

        checkLogin();
    }

    public function index()
    {
        $data = array();
        $data['mainContent'] = $this->load->view('profile/profile', '', true);
        $this->load->view('template', $data);
    }

    function package_list() 
    
    {
        $data = array();
        if (isPostBack()) 
            {
            $this->Account_model->change_package_list($_POST['package_id']);
            }
        $data['my_package'] = $this->Account_model->get_my_package();
        $data['package_list'] = $this->Common_model->get_table_list('parts_package');
        $data['mainContent'] = $this->load->view('profile/package_list', $data, true);
        $this->load->view('template', $data);
    }

    function my_profile() 
    {
        $data = array();
        if (isPostBack()) 
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

                if (isset($_POST['p_password']) && $_POST['p_password'] != "")
                {
                    $data['password'] = md5($_POST['p_password']);
                }
            }
         
         else if ($user_type == 3) 
           {
                $data['username']                   = $_POST['a_username'];
                $data['reg_business_name']          = $_POST['a_username'];
                $data['business_abn']               = $_POST['a_business_abn'];
                $data['dealer_licence']             = $_POST['a_dealer_licence'];
                $data['street_address']             = $_POST['a_street_address'];
                $data['city']                       = $_POST['a_city'];
                $data['postcode']                   = $_POST['a_postcode'];
                $data['state']                      = $_POST['a_state'];
                $data['phone']                      = $_POST['a_phone'];
                $data['website']                    = $_POST['a_website'];
                $data['mobile']                     = $_POST['a_mobile'];
                $data['contact_person']             = $_POST['a_contact_person'];
                $data['position_contact_person']    = $_POST['a_position_contact_person'];
                $data['contact_person_phone']       = $_POST['a_contact_person_phone'];
                $data['contact_person_email']       = $_POST['a_contact_person_email'];
                $data['country'] = 'AU';

            if (isset($_POST['a_password']) && $_POST['a_password'] != "")
                {
                    $data['password'] = md5($_POST['a_password']);
                }
           }
           else if ($user_type == 4) 
           {
                $data['username']                   =     $_POST['i_business_company_name'];
                $data['reg_business_name']          =     $_POST['i_business_company_name'];
                $data['business_company_id_number'] =     $_POST['i_business_company_id_number'];
                $data['address1']                   =     $_POST['i_address1'];
                $data['address2']                   =     $_POST['i_address2'];
                $data['city']                       =     $_POST['i_city'];
                $data['postcode']                   =     $_POST['i_postcode'];
                $data['country']                    =     $_POST['i_country'];
                $data['state']                     =     $_POST['i_state'];
                $data['phone']                      =     $_POST['i_phone'];
                $data['website']                    =     $_POST['i_website'];
                $data['contact_person']             =     $_POST['i_contact_person'];
                $data['position_contact_person']    =     $_POST['i_position_contact_person'];
                $data['contact_person_phone']       =     $_POST['i_contact_person_phone'];
                $data['contact_person_email']       =     $_POST['i_contact_person_email'];
                $data['alibaba_membership']         =     $_POST['i_alibaba_membership'];
                $data['made_in_china']              =     $_POST['i_made_in_china'];
                $data['other_membership']           =     $_POST['i_other_membership'];

                if (isset($_POST['i_password']) && $_POST['i_password'] != "")
                {
                    $data['password'] = md5($_POST['i_password']);
                }
             }
            $member_id = member_id();
            $this->Common_model->update('parts_member', $data, 'member_id', $member_id);
        }
       
        $data['myProfile'] = $this->Account_model->get_member_information(member_id());
        
       
        if ($data['myProfile']['country'] == 'AU' ||  $data['myProfile']['country'] == 'US' ||  $data['myProfile']['country'] == 'CA') 
        {
            $data['state_list'] = getStateList($data['myProfile']['country']);
        }
     
      
        
        $data['mainContent'] = $this->load->view('profile/my_profile', $data, true);
        $this->load->view('template', $data);
    }
    
     function view_profile() 
    {
       
        $data['myProfile'] = $this->Account_model->get_member_information(member_id());
        $data['mainContent'] = $this->load->view('profile/view_profile', $data, true);
        $this->load->view('template', $data);
    }

    function change_password() 
    {
        $data = array();
        if (isPostBack()) 
        {
            $this->db->set('password', md5($_POST['password']));
            $this->db->where('member_id', $_SESSION['member_id']);
            $this->db->update('parts_member');
            redirect(BASEURL . 'profile');
        }
        $data['mainContent'] = $this->load->view('profile/change_password', $data, true);
        $this->load->view('template', $data);
    }

}

?>