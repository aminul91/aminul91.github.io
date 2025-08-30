<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_model', 'Common_model', true);
        $this->load->model('action_model', 'Action_model', true);
        $this->load->library('pagination');
    }
    
    function equipment_parts_part_num_search()
    {
       $data = array();
       /*****************/
        $pageNo = $this->uri->segment(2, 0); 
        $_SESSION['pageNo'] = "/".$pageNo;
        $config['uri_segment'] = 2;
        $startLimit = ($pageNo) ? $pageNo : 0; 
        $config['per_page'] =  20;
        $per_page   =  $config['per_page'];
        /*****************/
        
       if(isPostBack())
       {
           $search="SELECT parts_equipment_parts_id as id, make as make,model as model, part_number, sub_category,componant_category, location,equipment_type as type,price FROM `parts_equipment_parts` WHERE `status` = 1 ";
          
           if(!$_POST['parts_num'])
           {
               redirect(BASEURL);exit;
           }  
           else
           {
              if(!$_POST['matched'])
              {
                  $search .=" AND part_number = '{$_POST['parts_num']}'";
              }
              else 
             {
                if($_POST['matched']=='pertial')
                {
                    $search .=" AND part_number LIKE '%{$_POST['parts_num']}%'";
                }  
                else if($_POST['matched']=='full')
                {
                    $search .=" AND part_number = '{$_POST['parts_num']}'";
                }  
             }
           }     
           $_SESSION['search'] = $search;
       } 
       $data['total_list_count'] = $this->Common_model->search_listing_total($_SESSION['search']);
       $data['listing']          = $this->Common_model->search_listing($_SESSION['search'],$startLimit,$per_page);
       
       /*****************/
       $data['page_no'] = $pageNo;    
       $config['base_url'] = BASEURL."equipment_parts_part_num_search/";
       $config['total_rows'] = $data['total_list_count'];   
       $this->pagination->initialize($config);
       $data['pagination'] = $this->pagination->create_links();
       /*****************/
       
       $data['page_title']= 'Parts Search';
       $data['ul_class']= 'search_item';
       $data['parts_list_id']= 1;
       $data['mainContent']  = $this->load->view('search_list', $data, true);  
       $this->load->view('template', $data);
    }
    
    function equipment_parts_search()
    {
       $data = array();
       /*****************/
        $pageNo = $this->uri->segment(2, 0); 
        $_SESSION['pageNo'] = "/".$pageNo;
        $config['uri_segment'] = 2;
        $startLimit = ($pageNo) ? $pageNo : 0; 
        $config['per_page'] =  20;
        $per_page   =  $config['per_page'];
        /*****************/
        
       if(isPostBack())
       {
           $search="SELECT parts_equipment_parts_id as id, make as make,model as model, part_number, sub_category,componant_category, location,price FROM `parts_equipment_parts` WHERE `status` = 1 ";
           if($_POST['equipment_type'])
           {
               $search .= "AND equipment_type = '{$_POST['equipment_type']}' ";
           }    
           if($_POST['sub_category'])
           {
               $search .= "AND sub_category = '{$_POST['sub_category']}' ";
           }    
           if($_POST['make'])
           {
               $search .= "AND make = '{$_POST['make']}' ";
           }
           if($_POST['model'])
           {
               $search .= "AND model = '{$_POST['model']}' ";
           } 
           if($_POST['key_word'])
           {
               $keyword = trim($_POST['key_word']);
               $search .= "AND key_word LIKE '%$keyword%' ";
           } 
           if($_POST['componant_category'])
           {
               $search .= "AND componant_category = '{$_POST['componant_category']}' ";
           }    
           if($_POST['part_condition'])
           {
               $search .= "AND part_condition = '{$_POST['part_condition']}' ";
           }    
           if($_POST['location'])
           {
               $search .= "AND location = '{$_POST['location']}' ";
           }    
           $_SESSION['search'] = $search;
       }  

       $data['total_list_count'] = $this->Common_model->search_listing_total($_SESSION['search']);
       $data['listing']          = $this->Common_model->search_listing($_SESSION['search'],$startLimit,$per_page);
       
       
       /*****************/
       $data['page_no'] = $pageNo;    
       $config['base_url'] = BASEURL."equipment_parts_search/";
       $config['total_rows'] = $data['total_list_count'];   
       $this->pagination->initialize($config);
       $data['pagination'] = $this->pagination->create_links();
       /*****************/
       
       $data['page_title']= 'Parts Search';
       $data['parts_list_id']=1;
       $data['mainContent']  = $this->load->view('search_list', $data, true);  
       $this->load->view('template', $data);
    }
    
    function equipment_dismantling_search()
    {
       $data = array();
       /*****************/
        $pageNo = $this->uri->segment(2, 0); 
        $_SESSION['pageNo'] = "/".$pageNo;
        $config['uri_segment'] = 2;
        $startLimit = ($pageNo) ? $pageNo : 0; 
        $config['per_page'] =  20;
        $per_page   =  $config['per_page'];
        /*****************/
        
       if(isPostBack())
       {
           $search="SELECT parts_equipment_dismantling_id as id,make as make, model as model,location FROM `parts_equipment_dismantling` WHERE `status` = 1 ";
           if($_POST['equipment_type'])
           {
               $search .= "AND equipment_type = '{$_POST['equipment_type']}' ";
           }    
           if($_POST['make'])
           {
               $search .= "AND make = '{$_POST['make']}' ";
           }    
           if($_POST['model'])
           {
               $search .= "AND model = '{$_POST['model']}' ";
           }    
           if($_POST['location'])
           {
               $search .= "AND location = '{$_POST['location']}' ";
           }    
           $_SESSION['search'] = $search;
       }  
       
       $data['total_list_count'] = $this->Common_model->search_listing_total($_SESSION['search']);
       $data['listing']          = $this->Common_model->search_listing($_SESSION['search'],$startLimit,$per_page);
       
       /*****************/
       $data['page_no'] = $pageNo;    
       $config['base_url'] = BASEURL."equipment_dismantling_search/";
       $config['total_rows'] = $data['total_list_count'];   
       $this->pagination->initialize($config);
       $data['pagination'] = $this->pagination->create_links();
       /*****************/
       
       
       $data['page_title']= 'Dismantling';
       $data['parts_list_id']= 2;
       $data['mainContent']  = $this->load->view('search_list', $data, true);  
       $this->load->view('template', $data);
    }
    
    function workshop_parts_manuals_search()
    {
       $data = array();
       /*****************/
        $pageNo = $this->uri->segment(2, 0); 
        $_SESSION['pageNo'] = "/".$pageNo;
        $config['uri_segment'] = 2;
        $startLimit = ($pageNo) ? $pageNo : 0; 
        $config['per_page'] =  20;
        $per_page   =  $config['per_page'];
        /*****************/
        
       if(isPostBack())
       {
           $search="SELECT parts_workshop_parts_manuals_id as id,make,model,manual_type as type,location,price FROM `parts_workshop_parts_manuals` WHERE `status` = 1 ";
           if($_POST['equipment_type'])
           {
               $search .= "AND equipment_type = '{$_POST['equipment_type']}' ";
           }    
           if($_POST['make'])
           {
               $search .= "AND make = '{$_POST['make']}' ";
           }    
           if($_POST['model'])
           {
               $search .= "AND model = '{$_POST['model']}' ";
           }    
           if($_POST['location'])
           {
               $search .= "AND location = '{$_POST['location']}' ";
           }    
           $_SESSION['search'] = $search;
       }    
       $data['total_list_count'] = $this->Common_model->search_listing_total($_SESSION['search']);
       $data['listing']          = $this->Common_model->search_listing($_SESSION['search'],$startLimit,$per_page);
       
       /*****************/
       $data['page_no'] = $pageNo;    
       $config['base_url'] = BASEURL."workshop_parts_manuals_search/";
       $config['total_rows'] = $data['total_list_count'];   
       $this->pagination->initialize($config);
       $data['pagination'] = $this->pagination->create_links();
       /*****************/
       
       $data['page_title']= 'Workshop Manuals';
       $data['parts_list_id']= 5;
       $data['mainContent']  = $this->load->view('search_list', $data, true);  
       $this->load->view('template', $data);
    }
    
    function parts_lubes_search()
    {
       $data = array();
       /*****************/
        $pageNo = $this->uri->segment(2, 0); 
        $_SESSION['pageNo'] = "/".$pageNo;
        $config['uri_segment'] = 2;
        $startLimit = ($pageNo) ? $pageNo : 0; 
        $config['per_page'] =  20;
        $per_page   =  $config['per_page'];
        /*****************/
        
       if(isPostBack())
       {
           $search="SELECT parts_lubes_id as id,lube_type as type,grade,quantity, location, price FROM `parts_lubes` WHERE `status` = 1 ";
           
           if($_POST['lube_type'])
           {
               $search .= "AND lube_type = '{$_POST['lube_type']}' ";
           }    
           if($_POST['sub_category'])
           {
               $search .= "AND grade = '{$_POST['grade']}' ";
           }    
           if($_POST['quantity'])
           {
               $search .= "AND quantity = '{$_POST['quantity']}' ";
           }    
           if($_POST['location'])
           {
               $search .= "AND location = '{$_POST['location']}' ";
           }    
           $_SESSION['search'] = $search;
       }   
       
       $data['total_list_count'] = $this->Common_model->search_listing_total($_SESSION['search']);
       $data['listing']          = $this->Common_model->search_listing($_SESSION['search'],$startLimit,$per_page);
       
       /*****************/
       $data['page_no'] = $pageNo;    
       $config['base_url'] = BASEURL."parts_lubes_search/";
       $config['total_rows'] = $data['total_list_count'];   
       $this->pagination->initialize($config);
       $data['pagination'] = $this->pagination->create_links();
       /*****************/
       
       $data['page_title']     = 'Lubes';
       $data['ul_class']     = 'search_item_big';
       $data['parts_list_id']= 3;
       $data['mainContent']  = $this->load->view('search_list', $data, true);  
       $this->load->view('template', $data);
    }
    
    
    function parts_machine_attachments_search()
    {
       $data = array();
       /*****************/
        $pageNo = $this->uri->segment(2, 0); 
        $_SESSION['pageNo'] = "/".$pageNo;
        $config['uri_segment'] = 2;
        $startLimit = ($pageNo) ? $pageNo : 0; 
        $config['per_page'] =  20;
        $per_page   =  $config['per_page'];
        /*****************/
        
       if(isPostBack())
       {
           $search="SELECT parts_machine_attachments_id as id,sub_category,location,suit_machine_size,`condition`,price FROM `parts_machine_attachments` WHERE `status` = 1 ";
           
           if($_POST['attachment_type'])
           {
               $search .= "AND equipment_type LIKE '{$_POST['attachment_type']}' ";
           }    
           if($_POST['sub_category'])
           {
               $search .= "AND sub_category LIKE '{$_POST['sub_category']}' ";
           }    
           if($_POST['keyword'])
           {
               $keyword = trim($_POST['keyword']);
               $search .= "AND description LIKE '%$keyword%' ";
           }    
           if($_POST['condition'])
           {
               $search .= "AND `condition` = '{$_POST['condition']}' ";
           }    
           if($_POST['location'])
           {
               $search .= "AND location = '{$_POST['location']}' ";
           }    
           $_SESSION['search'] = $search;
       }  
       
       $data['total_list_count'] = $this->Common_model->search_listing_total($_SESSION['search']);
       $data['listing']          = $this->Common_model->search_listing($_SESSION['search'],$startLimit,$per_page);
       
       /*****************/
       $data['page_no'] = $pageNo;    
       $config['base_url'] = BASEURL."parts_machine_attachments_search/";
       $config['total_rows'] = $data['total_list_count'];   
       $this->pagination->initialize($config);
       $data['pagination'] = $this->pagination->create_links();
       /*****************/
       
       $data['page_title']= 'Attachments';
       $data['parts_list_id']= 6;
       $data['mainContent']  = $this->load->view('search_list', $data, true);  
       $this->load->view('template', $data);
    }
    
    
    function parts_tyre_search()
    {
       $data = array();
       /*****************/
        $pageNo = $this->uri->segment(2, 0); 
        $_SESSION['pageNo'] = "/".$pageNo;
        $config['uri_segment'] = 2;
        $startLimit = ($pageNo) ? $pageNo : 0; 
        $config['per_page'] =  20;
        $per_page   =  $config['per_page'];
        /*****************/
        
       if(isPostBack())
       {
           $search="SELECT parts_tyre_id as id,location,category as type,price,tyre_size,`condition` FROM `parts_tyre` WHERE `status` = 1 ";
           
           if($_POST['category'])
           {
               $search .= "AND category = '{$_POST['category']}' ";
           }    
           if($_POST['rim_size'])
           {
               $search .= "AND rim_size = '{$_POST['rim_size']}' ";
           }    
           if($_POST['tyre_size'])
           {
               $search .= "AND tyre_size = '{$_POST['tyre_size']}' ";
           }    
           if($_POST['keyword'])
           {
               $keyword = trim($_POST['keyword']);
               $search .= "AND description LIKE '%$keyword%' ";
           }    
           if($_POST['condition'])
           {
               $search .= "AND `condition` = '{$_POST['condition']}' ";
           }    
           if($_POST['location'])
           {
               $search .= "AND location = '{$_POST['location']}' ";
           }    
           $_SESSION['search'] = $search;
       }    
       $data['total_list_count'] = $this->Common_model->search_listing_total($_SESSION['search']);
       $data['listing']          = $this->Common_model->search_listing($_SESSION['search'],$startLimit,$per_page);
       
       /*****************/
       $data['page_no'] = $pageNo;    
       $config['base_url'] = BASEURL."parts_tyre_search/";
       $config['total_rows'] = $data['total_list_count'];   
       $this->pagination->initialize($config);
       $data['pagination'] = $this->pagination->create_links();
       /*****************/
       
       $data['page_title']= 'Tyres';
       $data['parts_list_id']= 4;
       $data['mainContent']  = $this->load->view('search_list', $data, true);  
       $this->load->view('template', $data);
    }
    
    function parts_workshop_tools_search()
    {
       $data = array();
       /*****************/
        $pageNo = $this->uri->segment(2, 0); 
        $_SESSION['pageNo'] = "/".$pageNo;
        $config['uri_segment'] = 2;
        $startLimit = ($pageNo) ? $pageNo : 0; 
        $config['per_page'] =  20;
        $per_page   =  $config['per_page'];
        /*****************/
        
       if(isPostBack())
       {
           $search="SELECT parts_workshop_tools_id as id,location,category,`condition`,sub_category, price FROM `parts_workshop_tools` WHERE `status` = 1 ";
           
           if($_POST['category'])
           {
               $search .= "AND category = '{$_POST['category']}' ";
           }    
           if($_POST['sub_category'])
           {
               $search .= "AND sub_category = '{$_POST['sub_category']}' ";
           }     
           if($_POST['keyword'])
           {
               $keyword = trim($_POST['keyword']);
               $search .= "AND description LIKE '%$keyword%' ";
           }    
           if($_POST['condition'])
           {
               $search .= "AND `condition` = '{$_POST['condition']}' ";
           }    
           if($_POST['location'])
           {
               $search .= "AND location = '{$_POST['location']}' ";
           }    
           $_SESSION['search'] = $search;
       }    
       $data['total_list_count'] = $this->Common_model->search_listing_total($_SESSION['search']);
       $data['listing']          = $this->Common_model->search_listing($_SESSION['search'],$startLimit,$per_page);
       
       /*****************/
       $data['page_no'] = $pageNo;    
       $config['base_url'] = BASEURL."parts_workshop_tools_search/";
       $config['total_rows'] = $data['total_list_count'];   
       $this->pagination->initialize($config);
       $data['pagination'] = $this->pagination->create_links();
       /*****************/
       
       $data['page_title']= 'Tools';
       $data['parts_list_id']= 7;
       $data['mainContent']  = $this->load->view('search_list', $data, true);  
       $this->load->view('template', $data);
    }
    function search_dealer()
    {
        if(isPostBack())
        {
            $username = $_SESSION['src_username'] = trim($_POST['username']);
            $user_type = $_SESSION['src_user_type'] = $_POST['user_type'];
            
            if($username)
            {
                $conditions[] = "username LIKE '$username'";
            }
            if($user_type)
            {
                $conditions[] = "user_type = $user_type";
            }
            else 
            {
               $conditions[] = "user_type != 2"; 
            }
            if($conditions)
            {
                $conditions = count($conditions) ? ' AND ' . implode(' AND ', $conditions) : '';
            }
            else 
            {
                $conditions = '';
            }
            $_SESSION['src_delear_list'] = $conditions;            
        }
        
        $data = array();
        $data['username'] = $_SESSION['src_username'];
        $data['user_type'] = $_SESSION['src_user_type'];
        $data['delList'] = $this->Action_model->search_dealer_list($_SESSION['src_delear_list']);
        $data['mainContent'] = $this->load->view('find_dealer', $data, true);
        $this->load->view('template', $data);                
    }    
}
?>