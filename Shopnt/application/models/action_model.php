<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Action_model extends CI_Model {
   function __construct()
   {
        parent::__construct();
   }
   function master_category_list()
   {
       $sql = "SELECT * FROM ".DBEXT."category WHERE parent_category_id = 0  ORDER BY name ASC";
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
    function master_model_list($parts_list_id)
   {
       $sql = "SELECT * FROM ".DBEXT."make_model WHERE parent_id = 0 AND parts_list_id = $parts_list_id  ORDER BY name ASC";
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
   function get_parts_list()
   {
       $sql = "SELECT * FROM ".DBEXT."parts_list WHERE status = 1 ORDER BY parts_list_id ASC";
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
   
   function get_category_list()
   {
       $sql = "SELECT n.news_id,
                      n.member_id,
                      n.category_id,
                      n.title,
                      n.short_brief,
                      n.detail_brif,
                      n.language,
                      n.youtubevideo,
                      n.youtubevideo_short_code,
                      n.created_on,
                      n.status,
                      i.image,
                      i.is_main,
                      i.news_image_id,
                      (CASE n.status
                        WHEN  0 THEN 'Inctive'
                        WHEN  1 THEN 'Active'
                        WHEN  2 THEN 'Archive'
                        WHEN  4 THEN 'Reported'
                        WHEN  5 THEN 'Blocked'
                        ELSE 'Inactive'
                      END) AS news_status,
                      n.publish_date
                FROM ".DBEXT."news n
                LEFT JOIN ".DBEXT."news_image i ON i.news_id = n.news_id AND i.is_main = 1
                WHERE n.status != 3
                ORDER BY n.news_id DESC";
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
   function get_user_list_by_type($condition='')
   {
       $sql = "SELECT * FROM ".DBEXT."member m WHERE m.status = 1 $condition";       
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
   function get_package_list()
   {
       $sql = "SELECT package_id,
                      title,
                      picture_limit,
                      cerdit,
                      (CASE status
                        WHEN  0 THEN 'Inctive'
                        WHEN  1 THEN 'Active'
                        ELSE 'Inactive'
                      END) AS package_status,
                      status,
                      created_on,
                      description,
                      listing_limit,
                      is_default,
                      exp_volume           
                FROM ".DBEXT."package 
                ORDER BY created_on DESC";
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
   
   function sent_newsletter_mail($uL,$subject,$message)
   {
        $data = array();
        $mailBody = $this->load->view('admin/mail/newsletter-mail', $data, true);
        $mailBody = str_replace('<##MEMBER##>', $uL['fname'], $mailBody); 
        $mailBody = str_replace('<##MESSAGEBODY##>', $message, $mailBody); 
        $mailBody = str_replace('<##SITENAME##>', $this->config->item('project_title'), $mailBody); 
        
        $this->load->library('phpmailer/PHPMailer');
        $mail = new PHPMailer();
        $mail->SetFrom($this->config->item('sitemailaddress'), $this->config->item('project_title'));
        $mail->AddReplyTo($this->config->item('sitemailaddress'), $this->config->item('project_title'));
        $mail->Subject = $subject;
        
        
        $body = $mailBody;
        $address = $uL['email'];
        $mail->AddAddress($address, $uL['fname']);
        $mail->MsgHTML($body);
        $mail->Send();
        $mail->ClearAllRecipients();
   }
   
   function get_seller_list($conditions='')
   {
       $sql = "SELECT * FROM ".DBEXT."member m WHERE m.user_type > 0 $conditions";
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
   
   function get_description_information($status = 1)
   {
      $sql = "SELECT * FROM parts_static_page WHERE status = $status LIMIT 1";
      $query = $this->db->query($sql);
      $res = $query->row_array();
      return $res['description'];
   }
   function get_description_information_by_name($parts_name)
   {
      $sql = "SELECT * FROM parts_static_page WHERE parts_name LIKE '%$parts_name%' LIMIT 1";
      $query = $this->db->query($sql);
      $res = $query->row_array();
      return $res['description'];
   }
   
   function get_ads_list()
   {
       $sql = "SELECT * FROM parts_ads ORDER BY ads_id DESC";
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
   function get_about_me_info($member_id)
   {
       $sql = "SELECT * FROM parts_member_info WHERE member_id = $member_id LIMIT 1";
       $query = $this->db->query($sql);
       $row = $query->row_array();
       return $row;
   }
   
   function total_member_listing($member_id)
   {
       $sql = "SELECT COUNT(listing_id) as total_listing FROM parts_listing WHERE member_id = $member_id LIMIT 1";
       $query = $this->db->query($sql);
       $row = $query->row_array();
       return $row['total_listing'] ? $row['total_listing'] : 0;
   }
   
   function get_dealer_list()
   {
       $sql = "SELECT * FROM parts_member WHERE status = 1 AND user_type != 2";
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
   
   function search_dealer_list($conditions = '')
   {
       $sql = "SELECT * FROM parts_member WHERE status = 1 $conditions";
       $query = $this->db->query($sql);
       $res = $query->result_array();
       return $res;
   }
   
   function update_listing($parts_list_id,$type_listing_id,$data,$member_id)
   {
       $stock_no    = $data['stock_no'];
       $is_sold     = $data['is_sold'];
       $sql = "UPDATE `parts_listing` SET `is_sold` = '$is_sold',`stock_no` = '$stock_no' WHERE `parts_list_id` = $parts_list_id AND `type_listing_id` = $type_listing_id AND `member_id` = $member_id";
       $this->db->query($sql);
   }
   function join_parts_equipment_parts($join_sql,$parts_list_id,$type_listing_id)
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
              WHERE l.type_listing_id = $type_listing_id
              AND l.parts_list_id = $parts_list_id
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->row_array();
              return $res;
   }
   function join_parts_equipment_dismantling($join_sql,$parts_list_id,$type_listing_id)
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
              WHERE l.type_listing_id = $type_listing_id
              AND l.parts_list_id = $parts_list_id
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->row_array();
              return $res;
   }
   
   
   function join_parts_lubes($join_sql,$parts_list_id,$type_listing_id)
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
              WHERE l.type_listing_id = $type_listing_id
              AND l.parts_list_id = $parts_list_id
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->row_array();
              return $res;
   }
   function join_parts_tyre($join_sql,$parts_list_id,$type_listing_id)
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
              WHERE l.type_listing_id = $type_listing_id
              AND l.parts_list_id = $parts_list_id
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->row_array();
              return $res;
   }
   function join_parts_workshop_parts_manuals($join_sql,$parts_list_id,$type_listing_id)
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
              WHERE l.type_listing_id = $type_listing_id
              AND l.parts_list_id = $parts_list_id
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->row_array();
              return $res;
   }
   
   function join_parts_machine_attachments($join_sql,$parts_list_id,$type_listing_id)
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
              WHERE l.type_listing_id = $type_listing_id
              AND l.parts_list_id = $parts_list_id
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->row_array();
              return $res;
   }
   
   function join_parts_workshop_tools($join_sql,$parts_list_id,$type_listing_id)
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
              WHERE l.type_listing_id = $type_listing_id
              AND l.parts_list_id = $parts_list_id
              AND m.status = 1";
              $query = $this->db->query($sql);
              $res = $query->row_array();
              return $res;
   }
   function get_parts_information($parts_list_id,$type_listing_id)
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
                      l.stock_no, ";
       
      if($parts_list_id == 1)
      {
          $result = $this->join_parts_equipment_parts($sql,$parts_list_id,$type_listing_id);
      }
      else if($parts_list_id == 2)
      {
          $result = $this->join_parts_equipment_dismantling($sql,$parts_list_id,$type_listing_id);          
      }
      else if($parts_list_id == 3)
      {
          $result = $this->join_parts_lubes($sql,$parts_list_id,$type_listing_id);          
      }
      else if($parts_list_id == 4)
      {
          $result = $this->join_parts_tyre($sql,$parts_list_id,$type_listing_id);           
      }
      else if($parts_list_id == 5)
      {
          $result = $this->join_parts_workshop_parts_manuals($sql,$parts_list_id,$type_listing_id);                     
      }
      else if($parts_list_id == 6)
      {
          $result = $this->join_parts_machine_attachments($sql,$parts_list_id,$type_listing_id);          
      }
      else if($parts_list_id == 7)
      {
          $result = $this->join_parts_workshop_tools($sql,$parts_list_id,$type_listing_id);          
      }
      
      return $result;
   }
   
   function get_listing_image($listing_id)
   {
      $sql = "SELECT * FROM parts_listing_image WHERE listing_id = $listing_id"; 
      $query = $this->db->query($sql);
      $res = $query->result_array();
      return $res;
   }
   function get_suggestion_list()
   {
         
      $sql = "SELECT * FROM  parts_suggestion";
      $query = $this->db->query($sql);
      $res = $query->result_array();
      return $res;        
   }
   
   function get_user_listing($member_id)
   {
       
   }
}
?>