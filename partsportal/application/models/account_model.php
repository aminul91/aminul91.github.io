<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account_model extends CI_Model {

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
        $email = $data['email'];
        $password = $data['password'];

        $sql = "SELECT * FROM `parts_member` WHERE email = '$email' AND password = '$password' AND status = 1 LIMIT 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function get_member_information($member_id)
    {
        $sql = "SELECT * FROM parts_member WHERE member_id = $member_id LIMIT 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function get_my_package()
    {
        $sql = "SELECT * FROM parts_member_packege WHERE member_id = {$_SESSION['member_id']} AND status = 1 LIMIT 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function change_package_list($package_id)
    {
        $data['package_id'] = $package_id;
        $data['created_on'] = date('Y-m-d H:i:s', time());
        $data['member_id'] = $_SESSION['member_id'];

        $sql = "UPDATE parts_member_packege SET status = 0 WHERE member_id = {$_SESSION['member_id']}";
        $this->db->query($sql);

        $this->db->insert('parts_member_packege', $data);
    }
    function delete_add($id)
    {
         $this->db->where('ads_id', $id);
         $this->db->delete('parts_ads'); 
    }
    function get_profile_page_layout($member_id)
    {
         $sql = "SELECT * FROM parts_template_customized WHERE member_id = $member_id LIMIT 1";
         $query = $this->db->query($sql);
         return $query->row_array();
    }
}

?>