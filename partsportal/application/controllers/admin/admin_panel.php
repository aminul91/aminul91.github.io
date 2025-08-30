<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_panel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model', 'Admin_model', true);
        $this->load->model('action_model', 'Action_model', true);
        $this->load->model('common_model', 'Common_model', true);
        $this->load->model('memberlisting_model', 'Memberlisting_model', true);
        checkAdminLogin();
    }

    public function index()
    {
        $data = array();
        $data['mainContent'] = $this->load->view('admin/home', $data, true);
        $this->load->view('admin/template', $data);
    }
    function category_edit($category_id)
    {   $data_info = array();
        if (isPostBack())
        {
           $data_info['parts_list_id'] = $_POST['parts_list_id'];
           $data_info['parent_category_id'] = isset($_POST['parent_category_id']) ? $_POST['parent_category_id'] : 0;
           $data_info['name'] = $_POST['name'];
           $this->Common_model->update('parts_category', $data_info,'category_id', $category_id);
           $_SESSION['message'] = 'Category has been updated successfully';
           redirect('admin/category_list'); exit;
        }
      $data = array();
      $data['parent_category_list'] = $this->Action_model->master_category_list();
      $data['parts'] = $this->Action_model->get_parts_list();     
      $data['category'] = $this->Admin_model->get_table_information('parts_category','category_id',$category_id);    
      $data['mainContent'] = $this->load->view('admin/category/category_edit', $data, true);
      $this->load->view('admin/template',$data);  
    }

    public function category_list()
    {
        $data = array();
        if (isPostBack())
        {
            $data['parts_list_id'] = $_POST['parts_list_id'];
            $data['name'] = $_POST['name'];
            $data['parent_category_id'] = $_POST['parent_category_id'];
            $data['status'] = 1;
            $data['created_on'] = date('Y-m-d H:i:s', time());
            $this->Common_model->save(DBEXT . 'category', $data);
            unset($data);
            $_SESSION['message'] = 'Category has been saved successfully';
            redirect('admin/category_list');
            exit;
        }
        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);

        $data['category_list'] = $this->Action_model->master_category_list();
        $data['parts'] = $this->Action_model->get_parts_list();
        $data['mainContent'] = $this->load->view('admin/category/category_list', $data, true);
        $this->load->view('admin/template', $data);
    }

    function delete_category()
    {
        $category_id = $_POST['category_id'];
        if ($category_id)
        {
            $sql = "DELETE FROM parts_category WHERE category_id = $category_id  LIMIT 1";
            $this->db->query($sql);
            
            $sql = "DELETE FROM parts_category WHERE parent_category_id = $category_id";
            $this->db->query($sql);
            
            echo 1;
        }
        //redirect('admin/category_list');
        
        exit;
    }

    function set_category_status($status, $category_id)
    {
        if ($category_id)
        {
            $sql = "UPDATE " . DBEXT . "category SET status = '$status' WHERE category_id = $category_id LIMIT 1";
            $this->db->query($sql);
            $_SESSION['message'] = 'Category status has been updated successfully';
        }
        redirect('admin/category_list');
        exit;
    }

    function package_list()
    {
        $data = array();

        if (isPostBack())
        {
            $data['title'] = $_POST['title'];
            $data['picture_limit'] = $_POST['picture_limit'];
            $data['exp_volume'] = $_POST['exp_volume'];
            $data['cerdit'] = $_POST['cerdit'];
            $data['hilighted_ads_limit'] = $_POST['hilighted_ads_limit'];
            $data['status'] = $_POST['status'];
            $data['listing_limit'] = $_POST['listing_limit'];
            $data['created_on'] = date('Y-m-d H:i:s', time());

            $this->Common_model->save(DBEXT . 'package', $data);

            unset($data);
            $_SESSION['message'] = 'New package has been saved successfully';
        }


        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);

        $data['package_list'] = $this->Action_model->get_package_list();
        $data['mainContent'] = $this->load->view('admin/package/package_list', $data, true);
        $this->load->view('admin/template', $data);
    }

    function set_package_status($status, $package_id)
    {
        $sql = "UPDATE `" . DBEXT . "package` SET `status` = '$status' WHERE `package_id` = $package_id LIMIT 1";
        $this->db->query($sql);
        $_SESSION['message'] = 'Package status has been updated successfully';
        redirect('admin/package_list');
        exit;
    }

    function delete_package($package_id)
    {
        if ($package_id)
        {
            $sql = "DELETE FROM " . DBEXT . "package WHERE package_id = $package_id LIMIT 1";
            $this->db->query($sql);
            $_SESSION['message'] = 'Package has been deleted successfully';
        }
        redirect('admin/package_list');
        exit;
    }

    function newsletter()
    {
        if (isPostBack())
        {
            $user_type = $_POST['user_type'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            if ($user_type == 5)
            {
                $condition = "";
            } else
            {
                $condition = "AND m.user_type = $user_type";
            }
            $userList = $this->Action_model->get_user_list_by_type($condition);
            if ($userList)
            {
                foreach ($userList as $uL)
                {
                    #$uL['email']; 
                    $this->Action_model->sent_newsletter_mail($uL, $subject, $message);
                }
            }
            $_SESSION['message'] = 'Newsletter has been sent to seller successfully';
        }

        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);
        $data['mainContent'] = $this->load->view('admin/mail/newsletter', $data, true);
        $this->load->view('admin/template', $data);
    }

    function seller_list()
    {
        $data = array();
        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);

        $data['seller_list'] = $this->Action_model->get_seller_list();
        $data['mainContent'] = $this->load->view('admin/seller_list', $data, true);
        $this->load->view('admin/template', $data);
    }

    function delete_member($member_id)
    {
        $sql = "DELETE FROM parts_member WHERE member_id = 1";
        $this->db->query($sql);
        $_SESSION['message'] = 'Member information has been deleted successfully';
        redirect('seller_list');
        exit;
    }

    function set_member_status($status, $member_id)
    {
        $sql = "UPDATE parts_member SET status = '$status' WHERE member_id = $member_id";
        $this->db->query($sql);
        $_SESSION['message'] = 'Member status has been changed successfully';
        redirect('seller_list');
        exit;
    }

    function search_member()
    {
        if (isPostBack())
        {
            $data['username'] = $_SESSION['src_username'] = $_POST['username'];
            $data['email'] = $_SESSION['src_email'] = $_POST['email'];
            $data['user_type'] = $_SESSION['src_user_type'] = $_POST['user_type'];
            $data['created_on'] = $_SESSION['src_created_on'] = $_POST['created_on'];

            if ($_SESSION['src_username'])
            {
                $conditions[] = "m.username LIKE '%{$_SESSION['src_username']}%'";
            }
            if ($_SESSION['src_email'])
            {
                $conditions[] = "m.email LIKE '{$_SESSION['src_email']}'";
            }
            if ($_SESSION['src_user_type'])
            {
                $conditions[] = "m.user_type = {$_SESSION['src_user_type']}";
            }
            if ($_SESSION['src_created_on'])
            {
                $conditions[] = "DATE(m.created_on) = '{$_SESSION['src_created_on']}'";
            }
            if ($conditions)
            {
                $conditions = count($conditions) ? ' AND ' . implode(' AND ', $conditions) : '';
            } else
            {
                $conditions = '';
            }

            $_SESSION['src_member_cond'] = $conditions;
        }
        $data['username'] = $_SESSION['src_username'];
        $data['email'] = $_SESSION['src_email'];
        $data['user_type'] = $_SESSION['src_user_type'];
        $data['created_on'] = $_SESSION['src_created_on'];

        $data['seller_list'] = $this->Action_model->get_seller_list($_SESSION['src_member_cond']);
        $data['mainContent'] = $this->load->view('admin/seller_list', $data, true);
        $this->load->view('admin/template', $data);
    }

    function faq_list()
    {
        if (isPostBack())
        {
            $data['faq_ques'] = $_POST['faq_ques'];
            $data['faq_answer'] = $_POST['faq_answer'];
            $data['created_on'] = date('Y-m-d H:i:s', time());
            $this->db->insert('parts_faq_manager', $data);

            $_SESSION['message'] = 'Added Successfully.';
            redirect(BASEURL . 'faq_list');
            exit;
        }
        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);
        $data['page_title'] = 'Create new Faq.';
        $data['faq_list'] = $this->db->get('parts_faq_manager')->result_array();
        $data['mainContent'] = $this->load->view('admin/faq/faq_list', $data, true);
        $this->load->view('admin/template', $data);
    }

    function edit_faq_list($faq_id)
    {
        if (isPostBack())
        {
            $data['faq_ques'] = $_POST['faq_ques'];
            $data['faq_answer'] = $_POST['faq_answer'];
            $data['created_on'] = date('Y-m-d H:i:s', time());

            $this->db->where('faq_manager_id', $faq_id);
            $this->db->update('parts_faq_manager', $data);

            $_SESSION['message'] = 'Updated Successfully.';
            redirect(BASEURL . 'faq_list');
            exit;
        }

        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);

        $data['page_type'] = 'Edit';
        $data['page_title'] = 'Edit Faq Question.';
        $this->db->where('faq_manager_id', $faq_id);
        $data['faq'] = $this->db->get('parts_faq_manager')->row_array();
        $data['mainContent'] = $this->load->view('admin/faq/faq_list', $data, true);
        $this->load->view('admin/template', $data);
    }

    function delete_faq($faq_id)
    {
        $this->db->where('faq_manager_id', $faq_id);
        $this->db->delete('parts_faq_manager');

        $_SESSION['message'] = 'Deleted Successfully';
        redirect(BASEURL . 'faq_list');
        exit;
    }

    function static_page($status = 2)
    {
        if (isPostBack())
        {
            $data['description'] = $_POST['description'];
            $this->Common_model->update('parts_static_page', $data, 'status', $status);
            $_SESSION['message'] = 'Information has been updated successfully';
        }

        if ($status == 2)
        {
            $data['page_title'] = 'About us';
        } else if ($status == 3)
        {
            $data['page_title'] = 'Advertise with us';
        } else if ($status == 4)
        {
            $data['page_title'] = 'Business Options for all Dealers';
        } else if ($status == 5)
        {
            $data['page_title'] = 'Safety Tips for Buying & Selling online';
        } 
        
        else if ($status == 6)
        {
            $data['page_title'] = 'Buying Parts from a Overseas Dealer';
        }
        else if ($status == 7)
        {
            $data['page_title'] = 'safety tips';
        }

        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);

        $data['status'] = $status;
        $data['description'] = $this->Action_model->get_description_information($status);
        $data['mainContent'] = $this->load->view('admin/static-page/static_page', $data, true);
        $this->load->view('admin/template', $data);
    }

    function menu_desc($parts_name)
    {
        $parts_name = trim($parts_name);
        if (isPostBack())
        {
            $data['description'] = $_POST['description'];
            $this->Common_model->update('parts_static_page', $data, 'parts_name', $parts_name);
            $_SESSION['message'] = 'Information has been updated successfully';
        }

        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);
        $data['page_title'] = $parts_name;
        $data['parts_name'] = $parts_name;
        $data['description'] = $this->Action_model->get_description_information_by_name($parts_name);
        $data['mainContent'] = $this->load->view('admin/menu_desc/static_page', $data, true);
        $this->load->view('admin/template', $data);
    }

    function advertise_list()
    {
        if (isPostBack())
        {
            $data['image'] = $_POST['image'];
            $data['url'] = $_POST['url'];
            $data['status'] = $_POST['status'];
            $data['title'] = $_POST['title'];
            $data['created_on'] = date('Y-m-d H:i:s', time());
            $this->Common_model->save('parts_ads', $data);
            $_SESSION['message'] = 'New ads has been saved successfully';
        }
        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);

        $data['page_title'] = 'Advertise';
        $data['ads_list'] = $this->Action_model->get_ads_list();
        $data['mainContent'] = $this->load->view('admin/advertise_list', $data, true);
        $this->load->view('admin/template', $data);
    }

    function delete_ads($ads_id)
    {
          $this->db->where('ads_id',$ads_id);
          $this->db->delete('parts_ads');
          redirect(BASEURL.'admin/advertise_list');
    }

    function ads_edit($ads_id)
    {       
        $data = array();
        if (isPostBack())
        {
            
            $data_info['image']          = $_POST['image'];
            $data_info['title']          = $_POST['title'];
            $data_info['url']            = $_POST['url'];
            $data_info['status ']        = $_POST['status'];   
            $this->Common_model->update('parts_ads', $data_info,'ads_id',$ads_id);
        }
        $data['page_title'] = 'Edit Advertise';
        $data['myProfile'] = $this->Admin_model->get_table_information('parts_ads','ads_id',$ads_id);
        $data['mainContent'] = $this->load->view('admin/ads_edit', $data, true);
        $this->load->view('admin/template', $data);
    }
    function ajax_parent_category_list()
    {
        $parts_list_id = $_POST['parts_list_id'];
        
        $sql = "SELECT * FROM parts_category WHERE parts_list_id = $parts_list_id AND parent_category_id = 0 ORDER BY category_id ASC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        $str = '<option value="0">--select--</option>';
        
        if($result)
        {
           foreach($result as $res)
           {
               $str .= '<option value="'.$res['category_id'].'">'.$res['name'].'</option>';
           }
        }
        
        echo $str;
        exit;
    }
     function ajax_parent_model_list()
    {
        $parts_list_id = $_POST['parts_list_id'];
        
        $sql = "SELECT * FROM parts_make_model WHERE parts_list_id = $parts_list_id AND parent_id = 0 ORDER BY make_model_id ASC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        $str = '<option value="0">--select--</option>';
        
        if($result)
        {
           foreach($result as $res)
           {
               $str .= '<option value="'.$res['make_model_id'].'">'.$res['name'].'</option>';
           }
        }
        
        echo $str;
        exit;
    }
   
    
    function make_model_list()
    {
        $data = array();
        if (isPostBack())
        {
            $data['parts_list_id'] = $_POST['parts_list_id'];
            $data['name'] = $_POST['name'];
            
            if($_POST['make_model_id']>0)
            {
                $data['parent_id'] = $_POST['make_model_id'];
                $_SESSION['message'] = 'Model has been saved successfully';                
            }
            else
            {
                $data['parent_id'] == 0;  
                $_SESSION['message'] = 'Make has been saved successfully';
            }
            $data['status'] = 1;
            $data['type'] = 1;
            $data['created_on'] = date('Y-m-d H:i:s', time());
            $this->Common_model->save(DBEXT . 'make_model', $data);
            
            unset($data);            
            redirect('admin/make_model_list');
            exit;
        }
        $data['message'] = (isset($_SESSION['message'])) ? $_SESSION['message'] : '';
        unset($_SESSION['message']);
        $data['parts'] = $this->Action_model->get_parts_list();
        $data['mainContent'] = $this->load->view('admin/makemodel/make_model_list', $data, true);
        $this->load->view('admin/template', $data);
    }
    
    function delete_make_model($make_model_id)
    {
        $sql = "DELETE FROM `parts_make_model` WHERE `make_model_id` = $make_model_id";
        $this->db->query($sql);
        $_SESSION['message'] = 'Record has been deleted successfully';
        redirect('admin/make_model_list');
        exit;
    }
    
    function set_default_status($is_default,$package_id)
    {
        $sql = "UPDATE `parts_package` SET `is_default` = '0'";
        $this->db->query($sql);
        
        $sql = "UPDATE `parts_package` SET `is_default` = '$is_default' WHERE `package_id` = $package_id";
        $this->db->query($sql);
        
        $_SESSION['message'] = 'Package default status has been updated successfully';
        redirect('admin/package_list');
        exit;
    }
    
    function suggestion_box()
    {
        $data = array();
        $data['suggestion_list'] = $this->Action_model->get_suggestion_list();
        $data['mainContent'] = $this->load->view('admin/suggestion_box', $data, true);
        $this->load->view('admin/template', $data);
    }
    
    function credit_purchase_history()
    {
       $data = array();
       $data['mainContent'] = $this->load->view('admin/credit_purchase_history', $data, true);
       $this->load->view('admin/template', $data);       
    }
    
    function add_credit($member_id)
    {
       $data = array();
       $data['mainContent'] = $this->load->view('admin/add_credit', $data, true);
       $this->load->view('admin/template', $data);       
    }
    
    
    function member_parts_list()
    {
       $data = array();             
       $data['userListing'] = $this->Memberlisting_model->get_parts_information();
       
       #dumpVar($data['userListing']);
       
       $data['mainContent'] = $this->load->view('admin/member_parts_list', $data, true);
       $this->load->view('admin/template', $data); 
    }
    function edit_parts_by_member_login($parts_list_id,$listing_id,$type_listing_id)
    {
        #echo $parts_list_id.'----'.$listing_id.'-----'.$type_listing_id;exit;
        $UserInfo = get_member_info_by_listing_id($listing_id);
        $_SESSION['is_member_loggedin'] = '1';
        $_SESSION['member_id']        = $UserInfo['member_id'];
        $_SESSION['member_type']      = $UserInfo['user_type'];
        $_SESSION['username']         = $UserInfo['username'];
        
        if($parts_list_id == 1)
        {
            redirect("edit_parts_equipment_parts/$listing_id/$type_listing_id"); exit;
        }
        if($parts_list_id == 2)
        {
            redirect("edit_parts_equipment_dismantling/$listing_id/$type_listing_id"); exit;
        }
        if($parts_list_id == 3)
        {
            redirect("edit_parts_lubes/$listing_id/$type_listing_id"); exit;
        }
        if($parts_list_id == 4)
        {
            redirect("edit_parts_tyre/$listing_id/$type_listing_id"); exit;
        }
        if($parts_list_id == 5)
        {
            redirect("edit_parts_workshop_parts_manuals/$listing_id/$type_listing_id"); exit;
        }
        if($parts_list_id == 6)
        {
            redirect("edit_parts_machine_attachments/$listing_id/$type_listing_id"); exit;
        }
        if($parts_list_id == 7)
        {
            redirect("edit_parts_workshop_tools/$listing_id/$type_listing_id"); exit;
        }
    }
    function edit_make_model($make_model_id)
    {
        $data_info = array();
        if (isPostBack())
        {
            $data_info['parts_list_id'] = $_POST['parts_list_id'];
            if(isset($_POST['make_model_id']))
                $data_info['parent_id'] =   $_POST['make_model_id'] ;
            $data_info['name'] = $_POST['name'];
            $this->Common_model->update('parts_make_model', $data_info, 'make_model_id', $make_model_id);
            $_SESSION['message'] = 'Model has been updated successfully';
            redirect('admin/make_model_list');
            exit;
        }
        $data = array();
        $data['parts'] = $this->Action_model->get_parts_list();
        $data['model'] = $this->Admin_model->get_table_information('parts_make_model', 'make_model_id', $make_model_id);
        
        $data['parent_model_list'] = $this->Action_model->master_model_list($data['model']['parts_list_id']);
        $data['mainContent'] = $this->load->view('admin/makemodel/edit_make_model', $data, true);
        $this->load->view('admin/template', $data);
    }
    function delete_parts_list($listing_id)
    {
        $sql = "DELETE FROM `parts_listing` WHERE `listing_id` = $listing_id";
        $this->db->query($sql);
        $_SESSION['message'] = 'Record has been deleted successfully';
        redirect('admin/member-parts-list');
        exit;
    }
}

?>