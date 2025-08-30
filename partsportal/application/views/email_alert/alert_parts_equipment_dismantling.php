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
         Make
     </div>
     <div class="brightPart">
         <select name="make" id="make" class="required select_item" onchange="get_model(this.value,2);">
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