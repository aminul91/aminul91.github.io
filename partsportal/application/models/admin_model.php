<?php

if(!defined('BASEPATH'))  exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();        
    }
    function admin_login_check($email,$password)
    {
        $sql = "SELECT * FROM ".DBEXT."admin WHERE email = '$email' AND password = '$password' AND status = 1 LIMIT 1";
        $query = $this->db->query($sql);
        return $query->row_array();
    }	
    
    function get_table_information($table_name,$column_name ,$id)
    {
        
        $sql = "SELECT * FROM `$table_name` WHERE `$column_name` = $id LIMIT 1";
       // echo $sql; exit;
        $query = $this->db->query($sql);
        return $query->row_array();
    }
}
?>