<?php 

class Welcome extends CI_Controller {
    
     function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
          
                 
	}


	
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		
		$data = array(); 
               // $menu_data = array(); 
                $this->load->model('common_model', 'Common_model', true);
              //  $menu_data['menu'] = $this->Common_model->get_table_list('category_name');
                
                   //$this->load->view('menu', $menu_data, true);
                     $data = array();   
                       
                       // $data['brand'] = $this->Common_model->get_table_list_byindex('user','class','1');
                       // $this->load->menu_catagory;
                    //$data = array();   
                        $this->load->model('common_model', 'Common_model', true);
                        $new= $this->Common_model->getcatagory();
                       
                        $data['catagory']=$new;
                         $data['product']= $this->Common_model->getproduct();
                         $data['brands']= $this->Common_model->getbrands();
                        $data['product_type']=$this->Common_model->getproduct_item();
                        $data['item'] = $this->Common_model->getcatagory_item();
                        //var_dump($data['item']);
                        //exit;
                         
                  $data['mainContent'] = $this->load->view('home', $data, true);
		  
          $this->load->view('template', $data);
	}
       
         public function create_shop()
	{
             $this->load->helper('url');
             $this->load->helper('html');
		
                    $data = array();    
		  $data['mainContent'] = $this->load->view('form', $data, true);
               
		   
          $this->load->view('template', $data);
	}
        
        
        public function myshop()
	
                
        {
          //  echo "hellow";
           // exit;
    
          if ($_POST != NULL)
                  {
                    $data = array(); 
                    $data['brand_name']          = $_POST['b_name'];
                    $data['owner_name']        = $_POST['o_name'];
                    $data['Location']        = $_POST['location'];
                    $data['contact_number']            = $_POST['c_number'];
                    $data['contact_email']        = $_POST['c_email'];
                    $data['user_name'] = $_POST['c_username'];
                    $data['password']           = $_POST['password'];
                    $data['category_id']     = $_POST['category_id'];
                    $data['brand_des']          = $_POST['shop_info'];
              $user = $data['user_name'] ;
              $password = $data['password'] ;
              
                 
              
                     $this->load->model('common_model', 'Common_model', true);
                  
                   $this->Common_model->save('user', $data);
              
                 
                    $q='SELECT shop_id FROM `user` WHERE `user_name` = "'.$user.'" AND `password` = "'. $password.'" LIMIT 1';
                     $query = $this->db->query($q);
                   $p= $query->row_array();
                        
              
                     $_SESSION['shop_id']  = $p['shop_id'];
                   
                  }
                
                  
                     $this->load->helper('url');
                  $this->load->helper('html');
             
           
                    $data = array();  
                   

		  $data['mainContent'] = $this->load->view('myshop', $data, true);
		   
                  $this->load->view('template', $data);
        
        
        
        }
          function manage_shop()
        {
        $p = $_SESSION['shop_id'];
                
             $this->load->helper('url');
             $this->load->helper('html');
		$this->load->model('common_model', 'Common_model', true);
                   
                      
                        $data = array();   
                       
                       $save = $this->Common_model->get_info_by_index('user','shop_id',$p);
            
                         
           
        $this->load->library('upload');
       $config = array(
            'allowed_types' => 'jpg|png|bmp|jpeg', 
            'upload_path'=>'./images1/', //make sure you have this folder
            'max_size'=>2000
        );
        $this->upload->initialize($config);
        $this->load->library('upload',$config);

                 $in=array('product_type_id'=>$this->input->post('product_type_id'),
        'category_id'=>$save['0']['category_id'],
        'shop_id'=>$save['0']['shop_id'],
        'price' => $this->input->post('a_price'),
        'product_description' => $this->input->post('a_info'), 
        'product_image' => $_FILES['userfile']['name']);
               
    if ( ! $this->upload->do_upload())
		{
	echo $this->upload->display_errors();

	        }
		else
        {
       
     
     $this->load->model('common_model', 'Common_model', true);
   
                  
    $this->Common_model->save('product', $in);
                    
  
   
        }
          
       
       $data = array();   
                        $this->load->model('common_model', 'Common_model', true);
                        $new = $this->Common_model->get_info_by_index('product','shop_id',$p);
                       
                        
                         $data['product'] = $new;
                        
      $data['mainContent'] = $this->load->view('manageshop', $data, true);
		   
          $this->load->view('template', $data);
        
            
            
        }
        
        public function login()
	{
            
            if ($_POST != NULL)
                  {
                    $data = array(); 
                    $data['brand_name']          = $_POST['b_name'];
                    $data['user_name']        = $_POST['u_name'];
                
                
                      $this->load->model('common_model', 'Common_model', true);
                  
                      $this->Common_model->save('forget', $data);
                   }
	
                  $this->load->helper('url');
             $this->load->helper('html');
             
             
		
                    $data = array();    
		  $data['mainContent'] = $this->load->view('login', $data, true);
		   
          $this->load->view('template', $data);
                
	}
          public function login_check()
	{
	
                  $this->load->helper('url');
             $this->load->helper('html');
		 if (isset($_POST))
                  {
                 
                    $data['user_name']        = $_POST['c_username'];
                    $data['password']        = $_POST['password'];
                   
                    $this->load->model('common_model', 'Common_model', true);
                     $userinfo = $this->Common_model->login_check($data);
                       
                  }
                if($userinfo!= NULL)
                    
                { 
                    
                      $_SESSION['shop_id']  = $userinfo['shop_id'];
                      $_SESSION['brand_name']  = $userinfo['brand_name'];
                      
                      
                        $data = array();   
                        $this->load->model('common_model', 'Common_model', true);
                        $new = $this->Common_model->get_info_by_index('product','shop_id',$userinfo['shop_id']);
                        
                         $data['product'] = $new;
                        
		        $data['mainContent'] = $this->load->view('manageshop', $data, true);
		   
                        $this->load->view('template', $data);
                        
                }
                
             else
                 {
                 //$_SESSION['message']="INCORRECT LOGIN INFORMATION";
                
                 $data = array(); 
                 
                 $data['wrong'] = "You entered wrong login information!!!try again please";
                    
		  $data['mainContent'] = $this->load->view('login', $data, true);
		   
          $this->load->view('template', $data);
                 
                 }
        }
        public function menu_catagory()
        {
            
                        
		        //$data['mainContent'] = $this->load->view('home', $data, true);
        }
         
        public function marketinfo()
	{
		 $this->load->helper('url');
             $this->load->helper('html');
		
                    $data = array(); 
                     
                    $this->load->model('common_model', 'Common_model', true);
                     $data['market']= $this->Common_model->get_table_list('market_info');
                   //  var_dump($data);
                    
		  $data['mainContent'] = $this->load->view('marketinfo', $data, true);
		   
          $this->load->view('template', $data);
	}      
	
         public function delete($p,$q)
	{
             echo $p;
             echo $q;
             
             $this->load->helper('url');
             $this->load->helper('html');
		$this->load->model('common_model', 'Common_model', true);
                    $this->Common_model->delete('product','product_id', $p);
                      
                        $data = array();   
                       
                       $data['product'] = $this->Common_model->get_info_by_index('product', 'shop_id',$q);
                         
		        $data['mainContent'] = $this->load->view('manageshop', $data, true);
		   
                        $this->load->view('template', $data);
		
	}
        public function update_product($p)
	{
            
            
            
            $this->load->helper('url');
             $this->load->helper('html');
		$this->load->model('common_model', 'Common_model', true);
                    $data = array(); 
               
                      
                          
                       
                       $data['product'] = $this->Common_model->get_info_by_index('product', 'product_id',$p);
                         
		        $data['mainContent'] = $this->load->view('update_product', $data, true);
		   
                        $this->load->view('template', $data);
		
	}
        
        
        public function update_product_complete($p)
        {
                      
         if (isset($_POST))
                  {
                     
                     $data = array();
                    $this->load->helper('url');
                   $this->load->helper('html');
                   
                   
                    $this->load->library('upload');
       $config = array(
            'allowed_types' => 'jpg|png|bmp', 
            'upload_path'=>'./images1/', //make sure you have this folder
            'max_size'=>2000
        );
        $this->upload->initialize($config);
        $this->load->library('upload',$config);
        
                   if ( ! $this->upload->do_upload())
		{
	echo $this->upload->display_errors();

	        }
		else
        {
		$this->load->model('common_model', 'Common_model', true);
                    $data['price'] = $_POST['price'];
                    $data['product_description'] = $_POST['description'];
                    $data['product_image'] = $_FILES['userfile']['name'];
                    
                    $this->Common_model-> update('product', $data, 'product_id', $p);
        }
                   
                  }
        }
        
         public function check()
	{
		
		echo "checked";
                exit;
	}
         
    public function product($p)
	{
		 $this->load->helper('url');
             $this->load->helper('html');
		$this->load->model('common_model', 'Common_model', true);
                    
                      
                        $data = array();   
                       
                       $data['product'] = $this->Common_model->get_info_by_index('product', 'product_type_id',$p);
                         
		        $data['mainContent'] = $this->load->view('menuview', $data, true);
		   
                        $this->load->view('template', $data);
		
	}
          public function brandmenu($p,$q)
	{
		 $this->load->helper('url');
                        $this->load->helper('html');
		
		$this->load->model('common_model', 'Common_model', true);
                          
                      
                        $data = array();   
                       $this->Common_model->get_info_by_index('product','product_type_id',$q);
                       $data['product'] = $this->Common_model->get_info_by_index('product', 'shop_id',$p);
                        $data['shop'] =  $this->Common_model->get_info_by_index('user','shop_id',$p);
		        $data['mainContent'] = $this->load->view('mainshop', $data, true);
		   
                        $this->load->view('template', $data);
	}
          public function branddiv($p)
	{
		               
              
              
                         $this->load->helper('url');
                        $this->load->helper('html');
		
              
                         $data = array();   
                        $this->load->model('common_model', 'Common_model', true);
                        $new = $this->Common_model->get_info_by_index('product','shop_id',$p);
                      $data['shop'] =  $this->Common_model->get_info_by_index('user','shop_id',$p);
                    $data['product'] = $new;
                        
		        $data['mainContent'] = $this->load->view('mainshop', $data, true);
		   
                        $this->load->view('template', $data);
                        
		
	}
    
         public function brandlist()
	{
		
                         $this->load->helper('url');
                        $this->load->helper('html');
		
              
                         $data = array();   
                        $this->load->model('common_model', 'Common_model', true);
                       $data['product'] = $this->Common_model->get_table_join_list('user','category_name');
		               $data['brands']= $this->Common_model->getbrands();  
                               
		        $data['mainContent'] = $this->load->view('brand', $data, true);
		   
                        $this->load->view('template', $data);
                        
	}
          public function updateshop()
	{
              
               $this->load->helper('url');
                  $this->load->helper('html');
                   $p = $_SESSION['shop_id'];
		
		    $data = array();   
                        $this->load->model('common_model', 'Common_model', true);
                      
                      $data['shop'] =  $this->Common_model->get_info_by_index('user','shop_id',$p);
                         $data['mainContent'] = $this->load->view('updateshop', $data, true);
		   
                        $this->load->view('template', $data);
                  
                
                  
                    
	}
         public function updateshop_complete()
	{
              $p = $_SESSION['shop_id'];
                   if ($_POST != NULL)
                  {
                    $data = array(); 
                    $data['brand_name']          = $_POST['b_name'];
                    $data['owner_name']        = $_POST['o_name'];
                    $data['Location']        = $_POST['location'];
                    $data['contact_number']            = $_POST['c_number'];
                    $data['contact_email']        = $_POST['c_email'];
                    $data['user_name'] = $_POST['c_username'];
                    $data['password']           = $_POST['password'];
                    $data['category_id']     = $_POST['category_id'];
                    $data['brand_des']          = $_POST['shop_info'];
                    $this->load->helper('url');
                  $this->load->helper('html');
                 
              
                     $this->load->model('common_model', 'Common_model', true);
                  
                   $this->Common_model->update('user', $data,'shop_id', $p);
                  }
                     
                   
                  
              
              
		
		     $data = array();   
                        $this->load->model('common_model', 'Common_model', true);
                       $data['product'] = $this->Common_model->get_info_by_index('product','shop_id',$p);
                        
      $data['mainContent'] = $this->load->view('manageshop', $data, true);
		   
          $this->load->view('template', $data);
                
                  
                    
	}
    
     public function guide()
	{
		
                     $data = array();   
                     
                       $this->load->helper('url');
             $this->load->helper('html');
                         
		        $data['mainContent'] = $this->load->view('guide', $data, true);
		   
                        $this->load->view('template', $data);
	
	}
    
     public function fullshow($p)
	{
		
                     $data = array();   
                     
                       $this->load->helper('url');
             $this->load->helper('html');
           
                        $this->load->model('common_model', 'Common_model', true);
                       $data['product'] = $this->Common_model->get_info_by_index('product','product_id',$p);
                         
		        $data['mainContent'] = $this->load->view('fullshow', $data, true);
		   
                        $this->load->view('template', $data);
	
	}
    
    
         public function aboutus()
	{
		
        
             $this->load->helper('url');
             $this->load->helper('html');
                     $data = array();   
                    
                         
		        $data['mainContent'] = $this->load->view('we', $data, true);
		   
                        $this->load->view('template', $data);
	
	}
          
       public function back($p)
	{    
            $q = $_SESSION['shop_id'];
           $this->load->helper('url');
             $this->load->helper('html');
                     $data = array();   
                    
		if($p == 1)
        {
            $data = array();   
                        $this->load->model('common_model', 'Common_model', true);
                          $data['product'] = $this->Common_model->get_info_by_index('product','shop_id',$q);
                       
                        
                        
                        
      $data['mainContent'] = $this->load->view('manageshop', $data, true);
		   
          $this->load->view('template', $data);
	
        }
        
           
}
    
      public function forgot()
	
      {    
           
           $this->load->helper('url');
             $this->load->helper('html');
                     $data = array();                   
      $data['mainContent'] = $this->load->view('forgot', $data, true);
		   
          $this->load->view('template', $data);
	
        
        
           
     }
    
    
          
        public function logout()
	{
		
	
               
             session_destroy();
            
                   
                     $data = array();   
                     
                       $this->load->helper('url');
             $this->load->helper('html');
                         
		        $data['mainContent'] = $this->load->view('login', $data, true);
		   
                        $this->load->view('template', $data);
                       
                       
                 
	}
}

?>

 