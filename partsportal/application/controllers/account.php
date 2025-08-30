<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        checkLogin();
        $this->load->model('common_model', 'Common_model', true);
        $this->load->model('account_model','Account_model', true);
        $this->load->model('action_model','Action_model', true);
    }
    
    public function index()
    {
        my_pckage_listing_limit();
        $data = array();   
        $data['mainContent'] = $this->load->view('member/user_account', '', true);  
        $this->load->view('template', $data);
    }
    
    public function get_model()
    {
        $make_model = $this->Common_model->get_make_model($_POST['parent_id']); 
        $all_model = '';
        foreach ($make_model as $value)
        {
            $all_model.="<option value='{$value['make_model_id']}'>{$value['name']}</option>";
        }
        echo $all_model;
    }
    
    function my_listings()
    {
       $data = array();  
       $data['my_listing'] = $this->Common_model->get_list_by_index('parts_listing',array('member_id'=> $_SESSION['member_id']));
       $data['mainContent'] = $this->load->view('member/my_listings', $data, true);  
       $this->load->view('template', $data);
    }
    
    public function parts_equipment_parts()
    {
        my_pckage_listing_limit();
        $data = array();  
        if(isPostBack())
        {
            $data['equipment_type']     = $_POST['equipment_type'];
            $data['sub_category']       = $_POST['sub_category'];
            $data['make']               = $_POST['make'];
            $data['model']              = $_POST['model'];
            $data['componant_category'] = $_POST['componant_category'];
            $data['key_word']           = $_POST['key_word'];
            $data['part_number']        = $_POST['part_number'];
            $data['new_used']           = $_POST['new_used'];
            $data['part_condition']     = $_POST['part_condition'];
            $data['location']           = $_POST['location'];
            $data['price']              = $_POST['price'];            
            $data['description']        = $_POST['description'];
            
            $data_listing['type_listing_id'] = $this->Common_model->save('parts_equipment_parts',$data); 
            
            $data_listing['stock_no']       = $_POST['stock_no'];
            $data_listing['is_sold']        = $_POST['is_sold'];
            $data_listing['member_id']      = $_SESSION['member_id'];
            $data_listing['parts_list_id']  = 1; // parts_list_id
            $data_listing['created_on']     = date('Y-m-d H:i:s',time());
            
            $listingid = $this->Common_model->save('parts_listing',$data_listing);
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);

            message("Your Listing Added Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        
        $data['equipment_type']        = get_parent_equipment_type(1);  
        $data['page_title']            = 'parts_equipment_parts';
        $data['make']                  = get_make_list(1);
        $data['location']              = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent']           = $this->load->view('member/equipments_parts', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function edit_parts_equipment_parts($listingid,$type_listingid)
    {
        check_user_listing($listingid,$type_listingid);
        $data = array();  
        if(isPostBack())
        {
            $data['equipment_type']     = $_POST['equipment_type'];
            $data['sub_category']       = $_POST['sub_category'];
            $data['make']               = $_POST['make'];
            $data['model']              = $_POST['model'];
            $data['componant_category'] = $_POST['componant_category'];
            $data['key_word']           = $_POST['key_word'];
            $data['part_number']        = $_POST['part_number'];
            $data['new_used']           = $_POST['new_used'];
            $data['part_condition']     = $_POST['part_condition'];
            $data['location']           = $_POST['location'];
            $data['price']              = $_POST['price'];            
            $data['description']        = $_POST['description'];
            
           $this->Common_model->update('parts_equipment_parts',$data,'parts_equipment_parts_id',$type_listingid); 
           $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
           $data_listing['stock_no']    = $_POST['stock_no'];
           $data_listing['is_sold']     = $_POST['is_sold'];    
           
           $this->Action_model->update_listing(1,$type_listingid,$data_listing,  member_id());
                      
           message("Your Listing Updated Successfully.");
           redirect(BASEURL.'my_listings');exit;
        }
        
        $data['equipment_type']        = get_parent_equipment_type(1);
        $data['listing_id']   = $listingid;
        $data['edit_listing'] = $this->Common_model->get_single_by_index('parts_equipment_parts',array('parts_equipment_parts_id'=> $type_listingid));
        $data['listingInfo']                = get_listing_info($type_listingid,1);

        $data['edit_listing']['stock_no']   = $data['listingInfo']['stock_no'];
        $data['edit_listing']['is_sold']    = $data['listingInfo']['is_sold'];   
        
        $data['page_title']   = 'parts_equipment_parts';
        $data['make']         = get_make_list(1);
        $data['model']        = get_model_list(1,$data['edit_listing']['make']);
        $data['location']     = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent']  = $this->load->view('member/equipments_parts', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function parts_equipment_dismantling()
    {
        my_pckage_listing_limit();
        $data = array();  
        if(isPostBack())
        {
            $data['equipment_type']     = $_POST['equipment_type'];
            $data['make']               = $_POST['make'];
            $data['model']              = $_POST['model'];
            $data['serial']             = $_POST['serial'];
            $data['location']           = $_POST['location'];
            
            $data_listing['type_listing_id'] = $this->Common_model->save('parts_equipment_dismantling',$data); 
            
            $data_listing['member_id']      = $_SESSION['member_id'];
            $data_listing['parts_list_id']  = 2;// parts_list_id
            $data_listing['created_on']     = date('Y-m-d H:i:s',time());
            $data_listing['stock_no']               = $_POST['stock_no'];
            
            $listingid = $this->Common_model->save('parts_listing',$data_listing);
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
            
            message("Your Listing Added Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        $data['equipment_type']     = get_parent_equipment_type(2); 
        $data['page_title']  = 'parts_equipment_dismantling';
        $data['make']        = get_make_list(2);
        $data['location']    = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent'] = $this->load->view('member/parts_equipment_dismantling', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function edit_parts_equipment_dismantling($listingid,$type_listingid)
    {
        check_user_listing($listingid,$type_listingid);
       
        
        $data = array();  
        if(isPostBack())
        {
            $data['equipment_type']     = $_POST['equipment_type'];
            $data['make']               = $_POST['make'];
            $data['model']              = $_POST['model'];
            $data['serial']             = $_POST['serial'];
            $data['location']           = $_POST['location'];
                                    
            $this->Common_model->update('parts_equipment_dismantling',$data,'parts_equipment_dismantling_id',$type_listingid); 
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
            $data_listing['stock_no']    = $_POST['stock_no'];
            $data_listing['is_sold']     = $_POST['is_sold'];    
           
            $this->Action_model->update_listing(2,$type_listingid,$data_listing,  member_id());
            
            message("Your Listing Updated Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        $data['equipment_type']             = get_parent_equipment_type(2); 
        
        
        $data['listing_id']                 = $listingid;
        $data['edit_listing']               = $this->Common_model->get_single_by_index('parts_equipment_dismantling',array('parts_equipment_dismantling_id'=> $type_listingid));
        $data['listingInfo']                = get_listing_info($type_listingid,2);

        $data['edit_listing']['stock_no']   = $data['listingInfo']['stock_no'];
        $data['edit_listing']['is_sold']    = $data['listingInfo']['is_sold'];   
        
        $data['page_title']                 = 'parts_equipment_dismantling';
        $data['make']                       = get_make_list(2);
        $data['model']                      = get_model_list(2,$data['edit_listing']['make']);
        $data['location']                   = $this->Common_model->get_table_list('parts_location'); 
        
        $data['mainContent']                = $this->load->view('member/parts_equipment_dismantling', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function parts_lubes()
    {
        my_pckage_listing_limit();
        $data = array();  
        if(isPostBack())
        {
            $data['lube_type']       = $_POST['lube_type'];
            $data['grade']           = $_POST['grade'];
            $data['make']            = $_POST['make'];
            $data['quantity']        = $_POST['quantity'];
            $data['condition']       = $_POST['condition'];
            $data['location']        = $_POST['location'];
            $data['price']           = $_POST['price'];
            $data['description']     = $_POST['description'];
            
            $data_listing['type_listing_id'] = $this->Common_model->save('parts_lubes',$data); 
            
            $data_listing['member_id']      = $_SESSION['member_id'];
            $data_listing['stock_no']       = $_POST['stock_no'];            
            $data_listing['parts_list_id']  = 3;// parts_list_id
            $data_listing['created_on']     = date('Y-m-d H:i:s',time());
            
            $listingid = $this->Common_model->save('parts_listing',$data_listing);
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
            message("Your Listing Added Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        $data['lube_type']   = get_parent_equipment_type(3);
        $data['page_title']  = 'parts_lubes';
        $data['make']        = get_make_list(3);
        $data['location']    = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent'] = $this->load->view('member/parts_lubes', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function edit_parts_lubes($listingid,$type_listingid)
    {
        check_user_listing($listingid,$type_listingid);
        $data = array();  
        if(isPostBack())
        {
            $data['lube_type']       = $_POST['lube_type'];
            $data['grade']           = $_POST['grade'];
            $data['make']            = $_POST['make'];
            $data['quantity']        = $_POST['quantity'];
            $data['condition']       = $_POST['condition'];
            $data['location']        = $_POST['location'];
            $data['price']           = $_POST['price'];
            $data['description']     = $_POST['description'];
            
            $this->Common_model->update('parts_lubes',$data,'parts_lubes_id',$type_listingid);
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            $data_listing['stock_no']    = $_POST['stock_no'];
            $data_listing['is_sold']     = $_POST['is_sold'];    
           
            $this->Action_model->update_listing(3,$type_listingid,$data_listing,  member_id());
            
            message("Your Listing Updated Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        $data['lube_type']                  = get_parent_equipment_type(3);
        $data['listing_id']                 = $listingid;
        $data['edit_listing']               = $this->Common_model->get_single_by_index('parts_lubes',array('parts_lubes_id'=> $type_listingid));
        
        $data['listingInfo']                = get_listing_info($type_listingid,3);
        $data['edit_listing']['stock_no']   = $data['listingInfo']['stock_no'];
        $data['edit_listing']['is_sold']    = $data['listingInfo']['is_sold'];  
        $data['page_title']   = 'parts_lubes';
        $data['make']         = get_make_list(3);
        $data['location']     = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent']  = $this->load->view('member/parts_lubes', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function parts_tyre()
    {
        my_pckage_listing_limit();
        $data = array();  
        if(isPostBack())
        {
            $data['category']        = $_POST['category'];
            $data['rim_size']        = $_POST['rim_size'];
            $data['tyre_size']       = $_POST['tyre_size'];
            $data['brand']           = $_POST['brand'];
            $data['model']           = $_POST['model'];
            $data['tread']           = $_POST['tread'];
            $data['condition']       = $_POST['condition'];
            $data['location']        = $_POST['location'];
            $data['price']           = $_POST['price'];
            $data['description']     = $_POST['description'];
            
            $data_listing['type_listing_id'] = $this->Common_model->save('parts_tyre',$data); 
            
            $data_listing['member_id']      = $_SESSION['member_id'];
            $data_listing['parts_list_id']  = 4; // parts_list_id
            $data_listing['stock_no']       = $_POST['stock_no']; 
            $data_listing['created_on']     = date('Y-m-d H:i:s',time());
            
            $listingid = $this->Common_model->save('parts_listing',$data_listing);
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
            message("Your Listing Added Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        $data['category']    = get_parent_equipment_type(4);
        $data['model']       = get_make_list(4);
        $data['page_title']  = 'parts_tyre'; 
        $data['location']    = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent'] = $this->load->view('member/parts_tyre', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function edit_parts_tyre($listingid,$type_listingid)
    {
        my_pckage_listing_limit();
        $data = array();  
        if(isPostBack())
        {
            $data['category']        = $_POST['category'];
            $data['rim_size']        = $_POST['rim_size'];
            $data['tyre_size']       = $_POST['tyre_size'];
            $data['brand']           = $_POST['brand'];
            $data['model']           = $_POST['model'];
            $data['tread']           = $_POST['tread'];
            $data['condition']       = $_POST['condition'];
            $data['location']        = $_POST['location'];
            $data['price']           = $_POST['price'];
            $data['description']     = $_POST['description'];
            
            $this->Common_model->update('parts_tyre',$data,'parts_tyre_id',$type_listingid); 
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
             $data_listing['stock_no']    = $_POST['stock_no'];
            $data_listing['is_sold']     = $_POST['is_sold'];    
           
            $this->Action_model->update_listing(4,$type_listingid,$data_listing,  member_id());
            
            message("Your Listing Updated Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        $data['category']     = get_parent_equipment_type(4);
        $data['listing_id']   = $listingid;
        $data['edit_listing'] = $this->Common_model->get_single_by_index('parts_tyre',array('parts_tyre_id'=> $type_listingid));        
        $data['listingInfo']  = get_listing_info($type_listingid,4);
        $data['edit_listing']['stock_no'] = $data['listingInfo']['stock_no'];
        $data['edit_listing']['is_sold']    = $data['listingInfo']['is_sold'];  
        
        $data['page_title']   = 'parts_tyre';
        $data['model']         = get_make_list(4);
        $data['location']     = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent']  = $this->load->view('member/parts_tyre', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function parts_workshop_parts_manuals()
    {
        my_pckage_listing_limit();
        $data = array();  
        if(isPostBack())
        {
            $data['equipment_type']     = $_POST['equipment_type'];
            $data['make']               = $_POST['make'];
            $data['model']              = $_POST['model'];
            $data['serial_number']      = $_POST['serial_number'];
            $data['manual_type']        = $_POST['manual_type'];
            $data['manual_formate']     = $_POST['manual_formate'];
            $data['condition']          = $_POST['condition'];
            $data['location']           = $_POST['location'];
            #$data['price']              = $_POST['price'];
            $data['description']        = $_POST['description'];
            
            $data_listing['type_listing_id'] = $this->Common_model->save('parts_workshop_parts_manuals',$data); 
            
            $data_listing['member_id']      = $_SESSION['member_id'];
            $data_listing['stock_no']       = $_POST['stock_no'];
            $data_listing['parts_list_id']  = 5; // parts_list_id
            $data_listing['created_on']     = date('Y-m-d H:i:s',time());
            
            $listingid = $this->Common_model->save('parts_listing',$data_listing);
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
            message("Your Listing Added Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        $data['equipment_type']     = get_parent_equipment_type(5);
        $data['page_title']  = 'parts_workshop_parts_manuals';
        $data['make']        = get_make_list(5);
        $data['location']    = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent'] = $this->load->view('member/parts_workshop_parts_manuals', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function edit_parts_workshop_parts_manuals($listingid,$type_listingid)
    {
        check_user_listing($listingid,$type_listingid);
        $data = array();  
        if(isPostBack())
        {
            $data['equipment_type']     = $_POST['equipment_type'];
            $data['make']               = $_POST['make'];
            $data['model']              = $_POST['model'];
            $data['serial_number']      = $_POST['serial_number'];
            $data['manual_type']        = $_POST['manual_type'];
            $data['manual_formate']     = $_POST['manual_formate'];
            $data['condition']          = $_POST['condition'];
            $data['location']           = $_POST['location'];
            $data['price']              = $_POST['price'];
            $data['description']        = $_POST['description'];
            
            $this->Common_model->update('parts_workshop_parts_manuals',$data,'parts_workshop_parts_manuals_id',$type_listingid); 
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
             
            $data_listing['stock_no']    = $_POST['stock_no'];
            $data_listing['is_sold']     = $_POST['is_sold'];    
           
            $this->Action_model->update_listing(5,$type_listingid,$data_listing,  member_id());
            
            message("Your Listing Updated Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        $data['equipment_type'] = get_parent_equipment_type(5);
        
        $data['listing_id']   = $listingid;
        $data['edit_listing'] = $this->Common_model->get_single_by_index('parts_workshop_parts_manuals',array('parts_workshop_parts_manuals_id'=> $type_listingid));        
        $data['listingInfo']  = get_listing_info($type_listingid,5);
        $data['edit_listing']['stock_no'] = $data['listingInfo']['stock_no'];  
        $data['edit_listing']['is_sold']    = $data['listingInfo']['is_sold']; 
        $data['page_title']   = 'parts_workshop_parts_manuals';
        $data['location']     = $this->Common_model->get_table_list('parts_location'); 
        $data['make']         = get_make_list(5);
        $data['model']        = get_model_list(5,$data['edit_listing']['make']);

        $data['mainContent']  = $this->load->view('member/parts_workshop_parts_manuals', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function parts_machine_attachments()
    {
        my_pckage_listing_limit();
        $data = array();  
        if(isPostBack())
        {
            $data['equipment_type']     = $_POST['equipment_type'];
            $data['sub_category']       = $_POST['sub_category'];
            $data['attachment_type']    = $_POST['attachment_type'];
            $data['make']               = $_POST['make'];
            $data['suit_machine_size']  = $_POST['suit_machine_size'];
            $data['condition']          = $_POST['condition'];
            $data['location']           = $_POST['location'];
            $data['price']              = $_POST['price'];
            $data['description']        = $_POST['description'];
            
            $data_listing['type_listing_id'] = $this->Common_model->save('parts_machine_attachments',$data); 
            
            $data_listing['member_id']      = $_SESSION['member_id'];
            $data_listing['parts_list_id']  = 6; // parts_list_id
            $data_listing['stock_no']       = $_POST['stock_no'];
            $data_listing['created_on']     = date('Y-m-d H:i:s',time());
            
            $listingid = $this->Common_model->save('parts_listing',$data_listing);
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
            message("Your Listing Added Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        
        
        $data['equipment_type']     = get_parent_equipment_type(6); 
        $data['page_title']         = 'parts_machine_attachments';
        $data['make']               = get_make_list(6);
        $data['location']           = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent']        = $this->load->view('member/parts_machine_attachments', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function edit_parts_machine_attachments($listingid,$type_listingid)
    {
        check_user_listing($listingid,$type_listingid);
        $data = array();  
        if(isPostBack())
        {
            $data['equipment_type']     = $_POST['equipment_type'];
            $data['sub_category']       = $_POST['sub_category'];
            $data['attachment_type']    = $_POST['attachment_type'];
            $data['make']               = $_POST['make'];
            $data['suit_machine_size']  = $_POST['suit_machine_size'];
            $data['condition']          = $_POST['condition'];
            $data['location']           = $_POST['location'];
            $data['price']              = $_POST['price'];
            $data['description']        = $_POST['description'];
            
            $this->Common_model->update('parts_machine_attachments',$data,'parts_machine_attachments_id',$type_listingid); 
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
            $data_listing['stock_no']    = $_POST['stock_no'];
            $data_listing['is_sold']     = $_POST['is_sold'];    
           
            $this->Action_model->update_listing(6,$type_listingid,$data_listing,  member_id());
            
            message("Your Listing Updated Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        
        $data['listing_id']   = $listingid;
        $data['equipment_type']     = get_parent_equipment_type(6);
        $data['edit_listing']       = $this->Common_model->get_single_by_index('parts_machine_attachments',array('parts_machine_attachments_id'=> $type_listingid));
        $data['listingInfo']  = get_listing_info($type_listingid,6);
        $data['edit_listing']['stock_no']   = $data['listingInfo']['stock_no'];  
        $data['edit_listing']['is_sold']    = $data['listingInfo']['is_sold']; 
        $data['page_title']         = 'parts_machine_attachments';
        $data['make']               = get_make_list(6); 
        $data['location']           = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent']        = $this->load->view('member/parts_machine_attachments', $data, true);  
        $this->load->view('template', $data);
    }
   
    public function parts_workshop_tools()
    {
        my_pckage_listing_limit();
        $data = array();  
        if(isPostBack())
        {
            $data['category']           = $_POST['category'];
            $data['sub_category']       = $_POST['sub_category'];
            $data['key_word']           = $_POST['key_word'];
            $data['condition']          = $_POST['condition'];
            $data['location']           = $_POST['location'];
            $data['price']              = $_POST['price'];
            $data['description']        = $_POST['description'];
            
            $data_listing['type_listing_id'] = $this->Common_model->save('parts_workshop_tools',$data); 
            
            $data_listing['member_id']      = $_SESSION['member_id'];
            $data_listing['parts_list_id']  = 7; // parts_list_id
            $data_listing['stock_no']       = $_POST['stock_no'];
            $data_listing['created_on']     = date('Y-m-d H:i:s',time());
            
            $listingid = $this->Common_model->save('parts_listing',$data_listing);
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
            message("Your Listing Added Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        
        
        $data['category']     = get_parent_equipment_type(7);
        $data['page_title']         = 'parts_workshop_tools';
        $data['location']           = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent']        = $this->load->view('member/parts_workshop_tools', $data, true);  
        $this->load->view('template', $data);
    }
    
    public function edit_parts_workshop_tools($listingid,$type_listingid)
    {
        check_user_listing($listingid,$type_listingid);
        $data = array();  
        if(isPostBack())
        {
            $data['category']           = $_POST['category'];
            $data['sub_category']       = $_POST['sub_category'];
            $data['key_word']           = $_POST['key_word'];
            $data['condition']          = $_POST['condition'];
            $data['location']           = $_POST['location'];
            $data['price']              = $_POST['price'];
            $data['description']        = $_POST['description'];
            
            $this->Common_model->update('parts_workshop_tools',$data,'parts_workshop_tools_id',$type_listingid); 
            $this->Common_model->InsertListingImage($_POST['avatar'],$listingid);
            
            message("Your Listing Updated Successfully.");
            redirect(BASEURL.'my_listings');exit;
        }
        $data['listing_id']   = $listingid;
        $data['category']     = get_parent_equipment_type(7);
        $data['edit_listing'] = $this->Common_model->get_single_by_index('parts_workshop_tools',array('parts_workshop_tools_id'=> $type_listingid));
        $data['listingInfo']  = get_listing_info($type_listingid,7);
        $data['edit_listing']['stock_no'] = $data['listingInfo']['stock_no'];
        $data['page_title']   = 'parts_workshop_tools';
        $data['location']     = $this->Common_model->get_table_list('parts_location'); 
        $data['mainContent']  = $this->load->view('member/parts_workshop_tools', $data, true);  
        $this->load->view('template', $data);
    }
    
    function delete_listing($listingid,$type_listingid)
    {
        check_user_listing($listingid,$type_listingid);
        delete_listing($listingid,$type_listingid);
        
        message("Your Listing Deleted Successfully.");
        redirect(BASEURL.'my_listings');exit;        
    }
    
    function profile_page_layout()
    {
        $data = array();  
        
        if(isPostBack())
        {
            $data['templateTopHTML']    = $_POST['templateTopHTML'];
            $data['templateBottomHTML'] = $_POST['templateBottomHTML'];
            $data['bgColor']            = $_POST['bgColor'];
            $data['created_on']         = date('Y-m-d H:i:s',time());
            $data['member_id']          = member_id();
            $checkExist = $this->Account_model->get_profile_page_layout(member_id()); 
            if(!$checkExist)
            {
                $this->Common_model->save('parts_template_customized',$data);
            }
            else 
            {
                $this->Common_model->update('parts_template_customized',$data,'member_id',member_id());
            }
        }
        
        $data['page_layout']         = $this->Account_model->get_profile_page_layout(member_id()); 
        $data['page_layout']['bgColor'] = $data['page_layout']['bgColor'] ? $data['page_layout']['bgColor'] : '#ffffff';
        $data['mainContent']         = $this->load->view('profile/profile_page_layout', $data, true);  
        $this->load->view('template', $data);
    }
}
?>