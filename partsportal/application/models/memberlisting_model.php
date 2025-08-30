<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Memberlisting_model extends CI_Model {
   function __construct()
   {
        parent::__construct();
   }
   
   function join_parts_equipment_parts($join_sql,$condition)
   {
      $sql = $join_sql."
                    p.parts_equipment_parts_id as id,
                    p.equipment_type,
                    p.sub_category,
                    p.make,
                    p.model,
                    p.componant_category,
                    p.key_word,
                    p.part_number,
                    p.new_used,
                    p.part_condition,
                    p.location,
                    p.price,
                    p.description,
                    p.status                    
              FROM parts_listing l
              INNER JOIN parts_member m ON m.member_id = l.member_id
              INNER JOIN parts_equipment_parts p ON p.parts_equipment_parts_id = l.type_listing_id
              WHERE l.parts_list_id = 1
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->result_array();
              return $res;
   }
   function join_parts_equipment_dismantling($join_sql,$condition)
   {
      $sql = $join_sql."
                    d.parts_equipment_dismantling_id as id,
                    d.equipment_type,
                    d.make,
                    d.model,
                    d.serial,
                    d.location,
                    d.status
              FROM parts_listing l
              INNER JOIN parts_member m ON m.member_id = l.member_id
              INNER JOIN parts_equipment_dismantling d ON d.parts_equipment_dismantling_id = l.type_listing_id
              WHERE l.parts_list_id = 2
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->result_array();
              return $res;
   }
   
   
   function join_parts_lubes($join_sql,$condition)
   {
      $sql = $join_sql."
                    lu.parts_lubes_id as id,
                    lu.lube_type,
                    lu.grade,
                    lu.make,
                    lu.quantity,
                    lu.condition,
                    lu.location,
                    lu.price,
                    lu.description,
                    lu.status
              FROM parts_listing l
              INNER JOIN parts_member m ON m.member_id = l.member_id
              INNER JOIN parts_lubes lu ON lu.parts_lubes_id = l.type_listing_id
              WHERE l.parts_list_id = 3
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->result_array();
              return $res;
   }
   function join_parts_tyre($join_sql,$condition)
   {
      $sql = $join_sql."
                    t.parts_tyre_id as id,
                    t.category,
                    t.rim_size,
                    t.tyre_size,
                    t.brand,
                    t.model,
                    t.condition,
                    t.tread,
                    t.location,
                    t.price,
                    t.description,
                    t.status                    
              FROM parts_listing l
              INNER JOIN parts_member m ON m.member_id = l.member_id
              INNER JOIN parts_tyre t ON t.parts_tyre_id = l.type_listing_id
              WHERE l.parts_list_id = 4
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->result_array();
              return $res;
   }
   function join_parts_workshop_parts_manuals($join_sql,$condition)
   {
      $sql = $join_sql."
                    mn.parts_workshop_parts_manuals_id as id,
                    mn.equipment_type,
                    mn.make,
                    mn.model,
                    mn.serial_number,
                    mn.manual_type,
                    mn.manual_formate,
                    mn.condition,
                    mn.location,
                    mn.price,
                    mn.description,
                    mn.status                                      
              FROM parts_listing l
              INNER JOIN parts_member m ON m.member_id = l.member_id
              INNER JOIN parts_workshop_parts_manuals mn ON mn.parts_workshop_parts_manuals_id = l.type_listing_id
              WHERE l.parts_list_id = 5
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->result_array();
              return $res;
   }
   
   function join_parts_machine_attachments($join_sql,$condition)
   {
      $sql = $join_sql."
                    mn.parts_machine_attachments_id as id,
                    mn.equipment_type,
                    mn.sub_category,
                    mn.attachment_type,
                    mn.make,
                    mn.suit_machine_size,
                    mn.condition,
                    mn.location,
                    mn.price,
                    mn.description,
                    mn.status                                      
              FROM parts_listing l
              INNER JOIN parts_member m ON m.member_id = l.member_id
              INNER JOIN parts_machine_attachments mn ON mn.parts_machine_attachments_id = l.type_listing_id
              WHERE l.parts_list_id = 6
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->result_array();
              return $res;
   }
   
   function join_parts_workshop_tools($join_sql,$condition)
   {
      $sql = $join_sql."
                    wt.parts_workshop_tools_id as id,
                    wt.category,
                    wt.sub_category,
                    wt.key_word,
                    wt.condition,
                    wt.location,
                    wt.price,
                    wt.description,
                    wt.status                                                         
              FROM parts_listing l
              INNER JOIN parts_member m ON m.member_id = l.member_id
              INNER JOIN parts_workshop_tools wt ON wt.parts_workshop_tools_id = l.type_listing_id
              WHERE l.parts_list_id = 7
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->result_array();
              return $res;
   }
   function get_parts_information($condition='')
   {
       $result = '';
       $sql = "SELECT m.member_id,
                      m.fname,
                      m.username,
                      m.title,
                      m.email,
                      m.user_type,
                      m.street_address,
                      m.city,
                      m.phone,
                      m.mobile,
                      m.reg_business_name,
                      m.contact_person,
                      m.position_contact_person,
                      m.contact_person_phone,
                      m.contact_person_email,
                      m.address1,
                      m.address2,
                      l.listing_id,
                      l.parts_list_id,
                      l.type_listing_id,
                      l.is_sold,
                      l.stock_no,
                      l.created_on as listing_date,";
       
      $data['equipment_parts'] = $this->join_parts_equipment_parts($sql,$condition);
      $data['equipment_dismantling'] = $this->join_parts_equipment_dismantling($sql,$condition); 
      $data['parts_lubes'] = $this->join_parts_lubes($sql,$condition);
      $data['parts_tyre'] = $this->join_parts_tyre($sql,$condition); 
      $data['parts_manuals'] = $this->join_parts_workshop_parts_manuals($sql,$condition);
      $data['machine_attachments'] = $this->join_parts_machine_attachments($sql,$condition);  
      $data['workshop_tools'] = $this->join_parts_workshop_tools($sql,$condition); 
      return $data;
   }      
}
?>