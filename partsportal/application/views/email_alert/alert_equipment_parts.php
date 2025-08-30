<div class="bRow">
    <div class="blftPart">
        Equipment Type
    </div>
    <div class="brightPart">
        <select name="equipment_type" id="equipment_type" class="required select_item" onchange="get_child_equipment_type(this.value,1); return false;">
           <option value="">Select One</option>
           <?php
            #$equipment_type = $this->config->item('equipment_type');
            if($equipment_type)
            {
                 foreach ($equipment_type as $equipment_type_value)
                 {
            ?>
                     <option value="<?php echo $equipment_type_value['category_id'];?>"><?php echo $equipment_type_value['name'];?></option>  
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
         Sub Category
     </div>
     <div class="brightPart">
         <select name="sub_category" id="sub_category" class="required select_item">
           <option value="">Select One</option>                               
       </select>
     </div>
     <div class="clear"></div>
 </div> 

<div class="bRow">
     <div class="blftPart">
         Make
     </div>
     <div class="brightPart">
         <select name="make" id="make" class="required select_item" onchange="get_model(this.value,1);">
           <option value="">Select One</option>
           <?php 
           foreach($make as $make_val)
           {
           ?>
                <option  value="<?php echo $make_val['make_model_id'];?>"><?php echo $make_val['name'];?></option>
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
        </select>
     </div>
     <div class="clear"></div>
 </div> 


<div class="bRow">
     <div class="blftPart">
         Component Category
     </div>
     <div class="brightPart">
         <select name="componant_category" id="componant_category" class="required select_item">
           <option value="">Select One</option>
           <?php
            $componant_category = $this->config->item('componant_category');
            foreach ($componant_category as $componant_type_value)
            {
           ?>
             <option  value="<?php echo $componant_type_value;?>"><?php echo $componant_type_value;?></option>  
           <?php
            }
           ?>                               
        </select>
     </div>
     <div class="clear"></div>
 </div> 



<div class="bRow">
     <div class="blftPart">
         Key Words of your part
     </div>
     <div class="brightPart">
         <input class="required form-control" type="text" name="key_word" id="key_word"  placeholder="Key Words of your part" />
     </div>
     <div class="clear"></div>
 </div> 


<div class="bRow">
     <div class="blftPart">
         Part number if known
     </div>
     <div class="brightPart">
         <input class="form-control" type="text" name="part_number" id="part_number"  placeholder="Part number if known" />
     </div>
     <div class="clear"></div>
 </div> 

<div class="clear"></div>