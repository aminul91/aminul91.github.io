<?php

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Common_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    //get the menudata
    function getcatagory()
    {
         $q1="SELECT category_name From category_name";
        $query2 = $this->db->query($q1);
        return $query2->result_array();
        
    }
       function getproduct()
    {
         $q1="SELECT * From product WHERE product_class = 1";
        $query = $this->db->query($q1);
        $query1 = $query->result_array();
        return $query1;
    }
    function getbrands()
    {
         $q1="SELECT * From product WHERE product_class = 2";
        $query = $this->db->query($q1);
        $query1 = $query->result_array();
        return $query1;
    }
    function getcatagory_item()
    
    {
        
      
        
       
        $q1="SELECT * From category_name";
        $query2 = $this->db->query($q1);
        $k=array();
        //$z=array();
        $k=$query2->result_array();
        $p=  count($k);
        for($i=0;$i<$p;$i++){
            
            $r[]=$k[$i]['category_id'];
       
        }
        //var_dump($r);
               //$s=array();
               $x=array();
         $v=array();
         $q=array();
          for($i=0;$i<$p;$i++){
            switch($i){
                case $i:
                {
                    
                    $q2="SELECT product_name FROM product_name WHERE category_id=$r[$i]";
         $query3= $this->db->query($q2);
                
                 $x[$i]=$query3->result_array();
                
                 $q5="SELECT product_type_id FROM product_name WHERE category_id=$r[$i]";
                $query5= $this->db->query($q5);
                $v[$i]=$query5->result_array();
                 $e=count($v[$i]);
                 $a[]=$e;
                 for($j=0;$j<$e;$j++){
                    $f= $v[$i][$j]['product_type_id']; 
                //var_dump($e);    
                
                      $q3="SELECT Distinct  brand_name  FROM product WHERE product_type_id=$f";
                      $query4= $this->db->query($q3);
                      $z=$query4->result_array();
                      if($z!=null){
                          //echo "brand found in".$f;
                          //var_dump($z);
                          $b[]=$z;
                      }
                    else {
                        
                    }
                      
                     
                 }
             // var_dump($b);
             // $g=array();
              //$g=$b;
         break;
                    
                }
                
              }
          }
          
          
           //var_dump($v);
               // echo "var product type name";
               // echo "var brandnames";
              // var_dump($b);
              
            
            
               
            
           //exit;
    //  echo "var product type name";
         
                return $b;
                /* foreach ($k as $t)
        {
            $q2="SELECT product_name FROM product_name WHERE category_id="
            
            
        }*/
       
        
        
       
        
        
        
    }
    function getproduct_item()
    {
        
          
        
       
            
        $q1="SELECT * From category_name";
        $query2 = $this->db->query($q1);
        $k=array();
        //$z=array();
        $k=$query2->result_array();
        $p=  count($k);
        for($i=0;$i<$p;$i++){
            
            $r[]=$k[$i]['category_id'];
       
        }
        //var_dump($r);
               //$s=array();
               $x=array();
         $v=array();
         $q=array();
          for($i=0;$i<$p;$i++){
            switch($i){
                case $i:
                {
                    
                    $q2="SELECT product_name FROM product_name WHERE category_id=$r[$i]";
         $query3= $this->db->query($q2);
                
                 $x[$i]=$query3->result_array();
                
                
                     
                 }
           
         break;
                    
                }
                
              }
          
               return $x;  
              
              
                }
          
          
         
              
        
   
    
    // add new data
    function save($table_name, $data_array)
    {
        $this->db->insert($table_name, $data_array);
        return $this->db->insert_id();
    }

    // update data by id
    function update($table_name, $data_array, $index_array, $index_array_value)
    {
        $this->db->where($index_array, $index_array_value);
        $this->db->update($table_name, $data_array);        
        return $this->db->affected_rows();
    }

    // delete data by id
    function delete($table_name, $index_array, $index_array_value)
    {
        $this->db->where($index_array, $index_array_value);
        $this->db->delete($table_name);         
//        $this->db->delete($table_name, $index_array);
        return $this->db->affected_rows();
    }

    // get data list by id
    function get_list_by_index($table_name, $index_array)
    {
        //$this->db->where('id', $id, $table_name);
        return $this->db->get_where($table_name, $index_array)->result_array();
    }
      function get_table_list_byindex($table_name, $col_name,$index)
    {
       $sql = "SELECT * FROM $table_name WHERE $col_name = $index";
       $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    
        // get data table list
    function get_table_list($table_name)
    {
        //$this->db->where('id', $id, $table_name);
        return $this->db->get($table_name)->result_array();
    }

    // get single data by id
    function get_single_by_index($table_name, $index_array)
    {
        $this->db->limit(1);
        return $this->db->get_where($table_name, $index_array)->row_array();
    }

    // get number of data in database
    function count_all($table_name)
    {
        return $this->db->count_all($table_name);
    }

    // get data with paging
    function get_paged_list($table_name, $limit = 10, $offset = 0)
    {
        $this->db->order_by('id', 'asc');
        return $this->db->get($table_name, $limit, $offset);
    }
    
    function check_email_exist($table_name, $email)
    {
        $this->db->get_where($table_name, $index_array);
        return $this->db->affected_rows();
    }
    
    function login_check($data)
    {
        $username  = $data['user_name'];
        $password  = $data['password'];
                $this->db->where('user_name', $username);
                 $this->db->where('password', $password);
               $query = $this->db->get('user');
              
               return $query->row_array();
    }	
    
    function get_info($parent_id,$id)
    {
        $this->db->where('parent_id',$parent_id);
        return $this->db->get('parts_make_model')->result_array();
    }
    function get_make_model2($parent_id,$parts_list_id)
    {
        $sql = "SELECT * FROM parts_make_model WHERE parent_id = $parent_id AND parts_list_id = $parts_list_id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function InsertListingImage($avatar,$listing_id)
    {
        $Del="DELETE FROM `parts_listing_image` WHERE listing_id = $listing_id";
        mysql_query($Del);

        $image_data['listing_id'] = $listing_id;    
        foreach($avatar as $value)
        {
            $image_data['image'] = $value;
            $this->db->insert('parts_listing_image', $image_data);
        }
   }
   
   function search_listing_total($search_con)
   {
        $sql = "$search_con"; 
        $query = $this->db->query($sql);
        return $query->num_rows();
   }
   function search_listing($search_con,$startLimit,$per_page)
   {
        $sql = "$search_con LIMIT $startLimit,$per_page";        
        return result_array($sql);
   }
    
    function get_info_by_index($table_name,$col_name,$index)
    {
       
         $sql = "SELECT * FROM $table_name WHERE $col_name = $index ";
        
        $query = $this->db->query($sql);
          
         
        return $query->result_array();
        
        
    }
     function get_table_join_list($table1,$table2)
    {
        $sql = "SELECT * FROM user NATURAL JOIN category_name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}

?>