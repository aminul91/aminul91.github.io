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
        $email     = $data['email'];
        $password  = $data['password'];
        
        $sql = "SELECT * FROM `parts_member` WHERE email = '$email' AND password = '$password' AND status = 1 LIMIT 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }	
    
    function get_make_model($parent_id)
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
    
    

}

?>