<div class="bRow">
    <div class="blftPart">
        Equipment Type
    </div>
    <div class="brightPart">
        <select name="equipment_type" id="equipment_type" class="required select_item" onchange="get_child_equipment_type(this.value,6); return false;">
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
        Attachment Type
    </div>
    <div class="brightPart">
        <select name="attachment_type" id="attachment_type" class="required select_item">
           <option value="">Select One</option>
           <?php
            $attachment_type = $this->config->item('attachment_type');
            foreach ($attachment_type as $attachment_value)
            {
           ?>
             <option  value="<?php echo $attachment_value;?>"><?php echo $attachment_value;?></option>  
           <?php
            }
           ?>                               
       </select>
    </div>
    <div class="clear"></div>
</div>


<div class="bRow">
     <div class="blftPart">
         Sale Price (Including GST if applicable)
     </div>
     <div class="brightPart">
         <input class="required form-control" type="text" name="price" id="price"  placeholder="Price" />
     </div>
     <div class="clear"></div>
 </div> 


<div class="clear"></div>