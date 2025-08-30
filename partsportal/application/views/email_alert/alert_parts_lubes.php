<div class="bRow">
    <div class="blftPart">
        Lube Type
    </div>
    <div class="brightPart">
        <select name="lube_type" id="lube_type" class="required select_item">
           <option value="">Select One</option>
           <?php
           if($lube_type)
           {
                foreach ($lube_type as $lube_value)
                {
           ?>
                    <option value="<?php echo $lube_value['category_id'];?>"><?php echo $lube_value['name'];?></option>  
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
         Grade
     </div>
     <div class="brightPart">
         <select name="grade" id="grade" class="required select_item">
           <option value="">Select One</option>
           <?php
            $grade = $this->config->item('grade');
            foreach ($grade as $grade_value)
            {
           ?>
             <option  value="<?php echo $grade_value;?>"><?php echo $grade_value;?></option>  
           <?php
            }
           ?>                           
        </select>
     </div>
     <div class="clear"></div>
 </div> 

<div class="bRow">
     <div class="blftPart">
         Make/Brand
     </div>
     <div class="brightPart">
         <select name="make" id="make" class="required select_item" >
           <option value="">Select One</option>
           <?php 
           foreach($make as $make_val)
           {
           ?>
            <option value="<?php echo $make_val['make_model_id'];?>"><?php echo $make_val['name'];?></option>
           <?php
           }
           ?>                            
        </select>
     </div>
     <div class="clear"></div>
 </div> 


<div class="bRow">
     <div class="blftPart">
         Quantity
     </div>
     <div class="brightPart">
         <select name="quantity" id="quantity" class="required select_item">
           <option value="">Select One</option>
           <?php
            $quantity = $this->config->item('quantity');
            foreach ($quantity as $quantity_value)
            {
           ?>
             <option value="<?php echo $quantity_value;?>"><?php echo $quantity_value;?></option>  
           <?php
            }
           ?>                           
        </select>
     </div>
     <div class="clear"></div>
 </div> 




<div class="clear"></div>