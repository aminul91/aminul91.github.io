<div class="bRow">
    <div class="blftPart">
        Category
    </div>
    <div class="brightPart">
        <select name="category" id="category" class="required select_item" onchange="get_child_equipment_type(this.value,7); return false;">
           <option value="">Select One</option>
           <?php
            #$equipment_type = $this->config->item('equipment_type');
            if($category)
            {
                 foreach ($category as $equipment_type_value)
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
        Key Words of your part
    </div>
    <div class="brightPart">
        <input class="required form-control" type="text" name="key_word" id="key_word"  placeholder="Key Word" />
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div> 