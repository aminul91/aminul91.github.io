<div class="bRow">
    <div class="blftPart">
        Equipment Type
    </div>
    <div class="brightPart">
        <select name="equipment_type" id="equipment_type" class="required select_item">
           <option value="">Select One</option>
           <?php
           if($equipment_type)
           {
                foreach ($equipment_type as $equipment_type_value)
                {
                ?>
                    <option  value="<?php echo $equipment_type_value['category_id'];?>"><?php echo $equipment_type_value['name'];?></option>  
                <?php
                } 
           }            
           ?>                             
       </select>
    </div>
    <div class="clear"></div>
</div>
<div class="bRow">
    <div class="blftPart">
        Make
    </div>
    <div class="brightPart">
        <select name="make" id="make" class="required select_item" onchange="get_model(this.value,5);">
           <option value="">Select One</option>
           <?php 
           foreach($make as $make_val)
           {
           ?>
           <option <?php if(isset($edit_listing) && $edit_listing['make']==$make_val['make_model_id']){echo "selected ";} ?> value="<?php echo $make_val['make_model_id'];?>"><?php echo $make_val['name'];?></option>
           <?php
           }
           ?>                            
       </select>
    </div>
    <div class="clear"></div>
</div>


<div class="bRow">
     <div class="blftPart">
         Model
     </div>
     <div class="brightPart">
         <select name="model" id="model" class="required select_item">
           <option value="">Select One</option>       
           <?php if(isset($edit_listing) && $edit_listing['model'])
           {
          ?>
           <option value="<?php echo $edit_listing['model'];?>" selected><?php echo get_make_model_name($edit_listing['model']);?></option>     
          <?php 
           } 
           ?>
        </select>
     </div>
     <div class="clear"></div>
 </div> 



<div class="bRow">
     <div class="blftPart">
         Manual Type:
     </div>
     <div class="brightPart">
           <select name="manual_type" id="manual_type" class="required select_item">
               <option value="">Select One</option>       
                <?php
                $manual_type = $this->config->item('manual_type');
                foreach ($manual_type as $manual_type_value)
                {
               ?>
                 <option <?php if(isset($edit_listing) && $edit_listing['manual_type']==$manual_type_value){echo "selected ";} ?> value="<?php echo $manual_type_value;?>"><?php echo $manual_type_value;?></option>  
               <?php
                }
               ?> 
           </select>
     </div>
     <div class="clear"></div>
 </div> 



<div class="bRow">
     <div class="blftPart">
         Manual Formate
     </div>
     <div class="brightPart">
            <select name="manual_formate" id="manual_formate" class="required select_item">
               <option value="">Select One</option>       
                <?php
                $manual_formate = $this->config->item('manual_formate');
                foreach ($manual_formate as $$manual_formate_value)
                {
               ?>
                 <option value="<?php echo $$manual_formate_value;?>"><?php echo $$manual_formate_value;?></option>  
               <?php
                }
               ?> 
           </select>
     </div>
     <div class="clear"></div>
 </div> 

<div class="clear"></div>