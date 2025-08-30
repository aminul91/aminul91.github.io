<div class="bRow">
    <div class="blftPart">
        Category
    </div>
    <div class="brightPart">
        <select name="category" id="category" class="required select_item">
           <option value="">Select One</option>
           <?php
            #$tyre_category = $this->config->item('tyre_category');
           if($category)
           {
                foreach ($category as $cate_value)
                {
           ?>
                    <option value="<?php echo $cate_value['category_id'];?>"><?php echo $cate_value['name'];?></option>  
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
         Rim Size
     </div>
     <div class="brightPart">
         <select name="rim_size" id="rim_size" class="required select_item">
           <option value="">Select One</option>
           <?php
            $rim_size = $this->config->item('rim_size');
            foreach ($rim_size as $rim_value)
            {
           ?>
             <option value="<?php echo $rim_value;?>"><?php echo $rim_value;?></option>  
           <?php
            }
           ?>                           
          </select>
     </div>
     <div class="clear"></div>
 </div> 



<div class="bRow">
     <div class="blftPart">
         Tyre Size
     </div>
     <div class="brightPart">
         <select name="tyre_size" id="tyre_size" class="required select_item">
           <option value="">Select One</option>
           <?php
            $tyre_size = $this->config->item('tyre_size');
            foreach ($tyre_size as $tyre_size_value)
            {
           ?>
             <option value="<?php echo $tyre_size_value;?>"><?php echo $tyre_size_value;?></option>  
           <?php
            }
           ?>                           
        </select>
     </div>
     <div class="clear"></div>
 </div> 
  

<div class="clear"></div>