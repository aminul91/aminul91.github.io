<?php
require_once 'db-config.php';
$mailBody = file_get_contents('email-alert-mail-body.php', true);

function mail_to_parts_alert_equipment_parts($mailBody)
{   
   $sql = "SELECT ep.parts_alert_equipment_parts_id,
               ep.equipment_type,
               ep.sub_category,
               ep.make,
               ep.model,
               ep.componant_category,
               ep.key_word,
               ep.part_number,
               ep.new_used,
               ep.part_condition,
               ep.location,
               ep.price,
               ep.status,
               l.parts_alert_listing_id,
               l.parts_list_id,
               l.type_listing_id,
               l.is_sold,
               l.fname,
               l.lname,
               l.email   
        FROM parts_alert_equipment_parts ep
        INNER JOIN parts_alert_listing l ON l.type_listing_id = ep.parts_alert_equipment_parts_id AND l.parts_list_id = 1
        WHERE l.status = 1";
    $result = result_array($sql); 
    

    if($result)
    {
        foreach($result as $rs)
        {
            $equipment_type = $rs['equipment_type'];
            $sub_category = $rs['sub_category'];
            $make = $rs['make'];
            $model = $rs['model'];
            $key_word = $rs['key_word'];
            $componant_category = $rs['componant_category'];
            $part_condition = $rs['part_condition'];
            $location = $rs['location'];
                        
            $search = "SELECT parts_equipment_parts_id as id, make as make,model as model, part_number, sub_category,componant_category, location,price FROM `parts_equipment_parts` WHERE `status` = 1 ";
            
            
            if($equipment_type)
            {
               $search .= "AND equipment_type LIKE '$equipment_type' "; 
            }
            if($sub_category)
            {
               $search .= "AND sub_category LIKE '$sub_category' "; 
            }
            if($make)
            {
               $search .= "AND make = '$make' "; 
            }
            if($model)
            {
               $search .= "AND model = '$model' "; 
            }
            if($key_word)
            {
               $keyword = trim($key_word);
               $search .= "AND key_word LIKE '%$keyword%' ";
            }
            if($componant_category)
            {
               $search .= "AND componant_category LIKE '{$componant_category}' ";
            }
            if($part_condition)
            {
               $search .= "AND part_condition LIKE '{$part_condition}' ";
            }
            if($location)
            {
               $search .= "AND location = '{$location}' ";
            }
            $sResult = result_array($search);
            ## Here we will find data if those information has been match with user search query
            
            $str = '';
          
            if($sResult)
            {
                foreach($sResult as $sRes)
                {
                    $str .= '<tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>';
                    
                    
                    dumpVar($sRes);
                }
            }

        }
    }  
}

function mail_to_parts_alert_equipment_dismantling($mailBody)
{
     $sql = "SELECT d.parts_equipment_dismantling_id,
                    d.equipment_type,
                    d.make,
                    d.model,
                    d.serial,
                    d.location,
                    d.status,
                    l.parts_alert_listing_id,
                    l.parts_list_id,
                    l.type_listing_id,
                    l.is_sold,
                    l.fname,
                    l.lname,
                    l.email   
                 FROM parts_equipment_dismantling d
                 INNER JOIN parts_alert_listing l ON l.type_listing_id = d.parts_equipment_dismantling_id AND l.parts_list_id = 2
                 WHERE l.status = 1";
    $result = result_array($sql); 

    if($result)
    {
       foreach($result as $rs)
       {
          $equipment_type   = $rs['equipment_type']; 
          $make             = $rs['make']; 
          $model            = $rs['model']; 
          $serial           = $rs['serial']; 
          $location         = $rs['location']; 
          
          if($equipment_type)
          {
             $search .= "AND equipment_type LIKE '$equipment_type' "; 
          }
          if($make)
          {
             $search .= "AND make = $make "; 
          }
          if($model)
          {
             $search .= "AND model = $model "; 
          }
          if($serial)
          {
             $search .= "AND serial LIKE '$serial' "; 
          }
          if($location)
          {
             $search .= "AND location LIKE '$location' "; 
          }
       }
    }
}


function mail_to_parts_alert_listing($mailBody)
{
     $sql = "SELECT lu.parts_alert_lubes_id,
                    lu.lube_type,
                    lu.grade,
                    lu.make,
                    lu.quantity,
                    lu.condition,
                    lu.location,
                    lu.price,
                    lu.description,
                    l.parts_alert_listing_id,
                    l.parts_list_id,
                    l.type_listing_id,
                    l.is_sold,
                    l.fname,
                    l.lname,
                    l.email   
                 FROM parts_alert_lubes lu
                 INNER JOIN parts_alert_listing l ON l.type_listing_id = lu.parts_alert_lubes_id AND l.parts_list_id = 3
                 WHERE l.status = 1";
    $result = result_array($sql); 
    if($result)
    {
       foreach($result as $rs)
       {
           $lube_type = $rs['lube_type'];
           $grade = $rs['grade'];
           $make = $rs['make'];
           $quantity = $rs['quantity'];
           $condition = $rs['condition'];
           $location = $rs['location'];
           $price = $rs['price'];

           
           
           if($lube_type)
           {
              $search .= "AND lube_type LIKE '$lube_type' "; 
           }
           if($grade)
           {
              $search .= "AND grade LIKE '$grade' "; 
           }
           if($make)
           {
              $search .= "AND make = $make "; 
           }
           if($quantity)
           {
              $search .= "AND quantity LIKE '$quantity' "; 
           }
           if($condition)
           {
              $search .= "AND condition LIKE '$condition' "; 
           }
           if($location)
           {
              $search .= "AND location = '$location' "; 
           }
           if($price)
           {
              $search .= "AND price = '$price' "; 
           }
       } 
    }
    
    
}

function mail_to_parts_alert_tyre($mailBody)
{
     $sql = "SELECT ty.parts_alert_tyre_id,
                    ty.category,
                    ty.rim_size,
                    ty.tyre_size,
                    ty.brand,
                    ty.model,
                    ty.condition,
                    ty.tread,
                    ty.location,
                    ty.price,
                    ty.description,
                    ty.status,
                    l.parts_alert_listing_id,
                    l.parts_list_id,
                    l.type_listing_id,
                    l.is_sold,
                    l.fname,
                    l.lname,
                    l.email   
                 FROM parts_alert_tyre ty
                 INNER JOIN parts_alert_listing l ON l.type_listing_id = ty.parts_alert_tyre_id AND l.parts_list_id = 4
                 WHERE l.status = 1";
    $result = result_array($sql); 
    
    if($result)
    {
        foreach($result as $rs)
        {
            $category = $rs['category'];
            $rim_size = $rs['rim_size'];
            $tyre_size = $rs['tyre_size'];
            $brand = $rs['brand'];
            $model = $rs['model'];
            $condition = $rs['condition'];
            $tread = $rs['tread'];
            $location = $rs['location'];
            $price = $rs['price'];
            
            if($category)
            {
              $search .= "AND category LIKE '$category' "; 
            }
            if($rim_size)
            {
              $search .= "AND rim_size LIKE '$rim_size' "; 
            }
            if($tyre_size)
            {
              $search .= "AND tyre_size LIKE '$tyre_size' "; 
            }
            if($brand)
            {
              $search .= "AND brand LIKE '$brand' "; 
            }
            if($model)
            {
              $search .= "AND model LIKE '$model' "; 
            }
            if($condition)
            {
              $search .= "AND condition LIKE '$condition' "; 
            }
            if($tread)
            {
              $search .= "AND tread LIKE '$tread' "; 
            }
            if($location)
            {
              $search .= "AND location = $location "; 
            }
            if($price)
            {
              $search .= "AND price LIKE '$price' "; 
            }
        }
    }
}
function mail_to_parts_alert_workshop_parts_manuals($mailBody)
{
     $sql = "SELECT pm.parts_alert_workshop_parts_manuals_id,
                    pm.equipment_type,
                    pm.make,
                    pm.model,
                    pm.serial_number,
                    pm.manual_type,
                    pm.manual_formate,
                    pm.condition,
                    pm.location,
                    pm.price,
                    l.parts_alert_listing_id,
                    l.parts_list_id,
                    l.type_listing_id,
                    l.is_sold,
                    l.fname,
                    l.lname,
                    l.email   
                 FROM parts_alert_workshop_parts_manuals pm
                 INNER JOIN parts_alert_listing l ON l.type_listing_id = pm.parts_alert_workshop_parts_manuals_id AND l.parts_list_id = 5
                 WHERE l.status = 1";
    $result = result_array($sql); 
    
    if($result)
    {
        foreach($result as $rs)
        {
           $equipment_type = $rs['equipment_type']; 
           $make = $rs['make']; 
           $model = $rs['model']; 
           $serial_number = $rs['serial_number']; 
           $manual_type = $rs['manual_type']; 
           $manual_formate = $rs['manual_formate']; 
           $condition = $rs['condition']; 
           $location = $rs['location']; 
           $price = $rs['price']; 
           
           if($equipment_type)
           {
              $search .= "AND equipment_type LIKE '$equipment_type' "; 
           }
           if($make)
           {
              $search .= "AND make = $make "; 
           }
           if($model)
           {
              $search .= "AND model = $model "; 
           }
           if($serial_number)
           {
              $search .= "AND serial_number LIKE '$serial_number' "; 
           }
           if($manual_type)
           {
              $search .= "AND manual_type LIKE '$manual_type' "; 
           }
           if($manual_formate)
           {
              $search .= "AND manual_formate LIKE '$manual_formate' "; 
           }
           if($condition)
           {
              $search .= "AND condition LIKE '$condition' "; 
           }
           if($location)
           {
              $search .= "AND location = $location "; 
           }
           if($price)
           {
              $search .= "AND price LIKE '$price' "; 
           }
        }
    }        
}

function mail_to_parts_alert_machine_attachments($mailBody)
{
     $sql = "SELECT ma.parts_alert_machine_attachments_id,
                    ma.equipment_type,
                    ma.sub_category,
                    ma.attachment_type,
                    ma.make,
                    ma.suit_machine_size,
                    ma.condition,
                    ma.location,
                    ma.price,
                    l.parts_alert_listing_id,
                    l.parts_list_id,
                    l.type_listing_id,
                    l.is_sold,
                    l.fname,
                    l.lname,
                    l.email   
                 FROM parts_alert_machine_attachments ma
                 INNER JOIN parts_alert_listing l ON l.type_listing_id = ma.parts_alert_machine_attachments_id AND l.parts_list_id = 6
                 WHERE l.status = 1";
    $result = result_array($sql);
    
    if($result)
    {
        foreach($result as $rs)
        {
            $equipment_type = $rs['equipment_type']; 
            $sub_category = $rs['sub_category']; 
            $sub_category = $rs['sub_category']; 
            $attachment_type = $rs['attachment_type']; 
            $make = $rs['make']; 
            $suit_machine_size = $rs['suit_machine_size']; 
            $condition = $rs['condition']; 
            $location = $rs['location']; 
            $price = $rs['price']; 
            
            if($equipment_type)
            {
               $search .= "AND equipment_type LIKE '$equipment_type' "; 
            }
            if($sub_category)
            {
               $search .= "AND sub_category LIKE '$sub_category' "; 
            }
            if($attachment_type)
            {
               $search .= "AND attachment_type LIKE '$attachment_type' "; 
            }
            if($make)
            {
               $search .= "AND make LIKE '$make' "; 
            }
            if($suit_machine_size)
            {
               $search .= "AND suit_machine_size LIKE '$suit_machine_size' "; 
            }
            if($condition)
            {
               $search .= "AND condition LIKE '$condition' "; 
            }
            if($location)
            {
               $search .= "AND location = '$location' "; 
            }
            if($price)
            {
               $search .= "AND price LIKE '$price' "; 
            }
        }
    }        
}
function mail_to_parts_alert_workshop_tools($mailBody)
{
     $sql = "SELECT wt.parts_alert_workshop_tools_id,
                    wt.category,
                    wt.sub_category,
                    wt.key_word,
                    wt.condition,
                    wt.location,
                    wt.price,                    
                    l.parts_alert_listing_id,
                    l.parts_list_id,
                    l.type_listing_id,
                    l.is_sold,
                    l.fname,
                    l.lname,
                    l.email   
                 FROM parts_alert_workshop_tools wt
                 INNER JOIN parts_alert_listing l ON l.type_listing_id = ma.parts_alert_machine_attachments_id AND l.parts_list_id = 6
                 WHERE l.status = 1";
    $result = result_array($sql);
    
    if($result)
    {
        foreach($result as $rs)
        {
            $category = $rs['category']; 
            $sub_category = $rs['sub_category']; 
            $key_word = $rs['key_word']; 
            $condition = $rs['condition']; 
            $location = $rs['location']; 
            $price = $rs['price']; 
            
            if($category)
            {
               $search .= "AND category LIKE '$category' "; 
            }
            if($sub_category)
            {
               $search .= "AND sub_category LIKE '$sub_category' "; 
            }
            if($key_word)
            {
               $search .= "AND key_word LIKE '$key_word' "; 
            }
            if($condition)
            {
               $search .= "AND condition LIKE '$condition' "; 
            }
            if($location)
            {
               $search .= "AND location = $location "; 
            }
            if($price)
            {
               $search .= "AND price LIKE '$price' "; 
            }
        }
    }       
}

mail_to_parts_alert_equipment_parts($mailBody);
?>