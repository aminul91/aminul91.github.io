<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Emailalert_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function save_parts_equipment_parts($POSTDATA)
    {
        
        $data['equipment_type']     = $POSTDATA['equipment_type'];
        $data['sub_category']       = $POSTDATA['sub_category'];
        $data['make']               = $POSTDATA['make'];
        $data['model']              = $POSTDATA['model'];
        $data['componant_category'] = $POSTDATA['componant_category'];
        $data['key_word']           = $POSTDATA['key_word'];
        $data['part_number']        = $POSTDATA['part_number'];
        #$data['new_used']           = $POSTDATA['new_used'];
        #$data['part_condition']     = $POSTDATA['part_condition'];
        #$data['location']           = $POSTDATA['location'];
        #$data['price']              = $POSTDATA['price'];

        $data_listing['type_listing_id'] = $this->save('parts_alert_equipment_parts',$data); 

        $data_listing['fname']          = $POSTDATA['fname'];
        $data_listing['lname']          = $POSTDATA['lname'];
        $data_listing['email']          = $POSTDATA['email'];
        $data_listing['parts_list_id']  = 1; // parts_list_id
        $data_listing['created_on']     = date('Y-m-d H:i:s',time());        

        $parts_alert_listing_id = $this->save('parts_alert_listing',$data_listing);
    }
    function save_parts_equipment_dismantling($POSTDATA)
    {
        $data['equipment_type']         = $POSTDATA['equipment_type'];
        $data['make']                   = $POSTDATA['make'];
        $data['model']                  = $POSTDATA['model'];
        #$data['serial']                 = $POSTDATA['serial'];
        #$data['location']               = $POSTDATA['location'];

        $data_listing['type_listing_id'] = $this->save('parts_alert_equipment_dismantling',$data); 

        $data_listing['fname']          = $POSTDATA['fname'];
        $data_listing['lname']          = $POSTDATA['lname'];
        $data_listing['email']          = $POSTDATA['email'];
        $data_listing['parts_list_id']  = 2; // parts_list_id
        $data_listing['created_on']     = date('Y-m-d H:i:s',time());   

        $parts_alert_listing_id = $this->save('parts_alert_listing',$data_listing);
    }
    
    function save_parts_lubes($POSTDATA)
    {
        $data['lube_type']       = $POSTDATA['lube_type'];
        $data['grade']           = $POSTDATA['grade'];
        $data['make']            = $POSTDATA['make'];
        $data['quantity']        = $POSTDATA['quantity'];
        #$data['condition']       = $POSTDATA['condition'];
        #$data['location']        = $POSTDATA['location'];
        #$data['price']           = $POSTDATA['price'];

        $data_listing['type_listing_id'] = $this->save('parts_alert_lubes',$data); 
            
        $data_listing['fname']          = $POSTDATA['fname'];
        $data_listing['lname']          = $POSTDATA['lname'];
        $data_listing['email']          = $POSTDATA['email'];
        $data_listing['parts_list_id']  = 3; // parts_list_id
        $data_listing['created_on']     = date('Y-m-d H:i:s',time());   

        $parts_alert_listing_id = $this->save('parts_alert_listing',$data_listing);        
    }
    
    function save_parts_tyre($POSTDATA)
    {
        $data['category']               = $POSTDATA['category'];
        $data['rim_size']               = $POSTDATA['rim_size'];
        $data['tyre_size']              = $POSTDATA['tyre_size'];
        #$data['brand']                  = $POSTDATA['brand'];
        #$data['model']                  = $POSTDATA['model'];
        #$data['tread']                  = $POSTDATA['tread'];
        $data['condition']              = $POSTDATA['condition'];
        #$data['location']               = $POSTDATA['location'];
        #$data['price']                  = $POSTDATA['price'];
        
        $data_listing['type_listing_id']= $this->save('parts_alert_tyre',$data); 
        
        $data_listing['fname']          = $POSTDATA['fname'];
        $data_listing['lname']          = $POSTDATA['lname'];
        $data_listing['email']          = $POSTDATA['email'];
        $data_listing['parts_list_id']  = 4; // parts_list_id
        $data_listing['created_on']     = date('Y-m-d H:i:s',time());   

        $parts_alert_listing_id = $this->save('parts_alert_listing',$data_listing); 
    }
    function save_parts_workshop_parts_manuals($POSTDATA)
    {
        $data['equipment_type']     = $POSTDATA['equipment_type'];
        $data['make']               = $POSTDATA['make'];
        $data['model']              = $POSTDATA['model'];
        #$data['serial_number']      = $POSTDATA['serial_number'];
        $data['manual_type']        = $POSTDATA['manual_type'];
        $data['manual_formate']     = $POSTDATA['manual_formate'];
        #$data['condition']          = $POSTDATA['condition'];
        #$data['location']           = $POSTDATA['location'];
        #$data['price']              = $POSTDATA['price'];

        $data_listing['type_listing_id']= $this->save('parts_alert_workshop_parts_manuals',$data); 
        
        $data_listing['fname']          = $POSTDATA['fname'];
        $data_listing['lname']          = $POSTDATA['lname'];
        $data_listing['email']          = $POSTDATA['email'];
        $data_listing['parts_list_id']  = 5; // parts_list_id
        $data_listing['created_on']     = date('Y-m-d H:i:s',time());   

        $parts_alert_listing_id = $this->save('parts_alert_listing',$data_listing); 
    }
    function save_parts_machine_attachments($POSTDATA)
    {
        $data['equipment_type']     = $POSTDATA['equipment_type'];
        $data['sub_category']       = $POSTDATA['sub_category'];
        $data['attachment_type']    = $POSTDATA['attachment_type'];
        #$data['make']               = $POSTDATA['make'];
        #$data['suit_machine_size']  = $POSTDATA['suit_machine_size'];
        #$data['condition']          = $POSTDATA['condition'];
        #$data['location']           = $POSTDATA['location'];
        $data['price']              = $POSTDATA['price'];
        
        $data_listing['type_listing_id']= $this->save('parts_alert_machine_attachments',$data); 
        
        $data_listing['fname']          = $POSTDATA['fname'];
        $data_listing['lname']          = $POSTDATA['lname'];
        $data_listing['email']          = $POSTDATA['email'];
        $data_listing['parts_list_id']  = 6; // parts_list_id
        $data_listing['created_on']     = date('Y-m-d H:i:s',time());   

        $parts_alert_listing_id = $this->save('parts_alert_listing',$data_listing); 
    }
    function save_parts_workshop_tools($POSTDATA)
    {
        $data['category']           = $POSTDATA['category'];
        $data['sub_category']       = $POSTDATA['sub_category'];
        $data['key_word']           = $POSTDATA['key_word'];
        #$data['condition']          = $POSTDATA['condition'];
        #$data['location']           = $POSTDATA['location'];
        #$data['price']              = $POSTDATA['price'];
            
        $data_listing['type_listing_id'] = $this->Common_model->save('parts_alert_workshop_tools',$data); 
        
        $data_listing['fname']          = $POSTDATA['fname'];
        $data_listing['lname']          = $POSTDATA['lname'];
        $data_listing['email']          = $POSTDATA['email'];
        $data_listing['parts_list_id']  = 7; // parts_list_id
        $data_listing['created_on']     = date('Y-m-d H:i:s',time());   

        $parts_alert_listing_id = $this->save('parts_alert_listing',$data_listing); 
    }
    
    function save($table_name, $data_array)
    {
        $this->db->insert($table_name, $data_array);
        return $this->db->insert_id();
    }
}

?>