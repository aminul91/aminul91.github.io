<?php include 'application/views/member/user_account.php'; ?>
<div class="ragistation">
    <h1 class="title_h1">Workshop Tools</h1>
    <form name="SubmitFrm" id="SubmitFrm" action="" method="POST" style="float:left;">
    <div class="form_style">
                <br/>
                <label class="lable_style">
                       <span>Category :</span>
                       <span>
                           <select name="category" id="category" class="required select_item" onchange="get_child_equipment_type(this.value,7); return false;">
                               <option value="">Select One</option>
                               <?php
                                
                               if($category)
                               {
                                  foreach ($category as $cate_value)
                                  {
                               ?>
                                        <option <?php if(isset($edit_listing) && $edit_listing['category']==$cate_value['category_id']){echo "selected ";} ?> value="<?php echo $cate_value['category_id'];?>"><?php echo $cate_value['name'];?></option>  
                               <?php
                                  } 
                               }                                
                               ?>                           
                           </select>
                       </span>
                </label>
               
                <label class="lable_style">
                       <span>Sub Category:</span>
                       <span>
                           <select name="sub_category" id="sub_category" class="required select_item">
                               <option value="">Select One</option>
                               <?php                                
                                if($edit_listing['category'] && $edit_listing['sub_category'])
                                {
                                    $subcategoryInfo = get_child_equipment_type($edit_listing['category'],7);
                                    foreach ($subcategoryInfo as $sub_category_value)
                                    {
                                   ?>
                                     <option <?php if(isset($edit_listing) && $edit_listing['sub_category']==$sub_category_value['category_id']){echo "selected ";} ?> value="<?php echo $sub_category_value['category_id'];?>"><?php echo $sub_category_value['name'];?></option>  
                                   <?php
                                    }
                                }                                
                               ?>                               
                           </select>
                       </span>
                </label>
                
                <label class="lable_style">
                       <span>Key Words of your part</span>
                       <span>
                           <input class="required form-control" type="text" name="key_word" id="key_word" value="<?php if(isset($edit_listing['key_word'])) echo $edit_listing['key_word'];?>" placeholder="Key Word" />
                       </span>
                </label>
                
               <label class="lable_style">
                       <span>Condition:</span>
                       <span>
                           <select name="condition" id="condition" class="required select_item">
                               <option value="">Select One</option>
                               <?php
                                $condition = $this->config->item('condition');
                                foreach ($condition as $cond_value)
                                {
                               ?>
                                 <option <?php if(isset($edit_listing) && $edit_listing['condition']==$cond_value){echo "selected ";} ?> value="<?php echo $cond_value;?>"><?php echo $cond_value;?></option>  
                               <?php
                                }
                               ?>   
                           </select>
                       </span>
                    </label>
                
                   <label class="lable_style">
                       <span>Location:</span>
                       <span>
                           <select name="location" id="location" class="required select_item">
                               <option value="">Select One</option>
                               <?php 
                               foreach($location as $val)
                               {
                              ?>
                               <option <?php if(isset($edit_listing) && $edit_listing['location'] == $val['location_id']){echo "selected ";} ?> value="<?php echo $val['location_id'];?>"><?php echo $val['location'];?></option>
                              <?php
                               }
                              ?>                                 
                           </select>
                       </span>
                    </label>
                
                    <label class="lable_style">
                       <span>Sale Price (Including GST if applicable):</span>
                       <span>
                           <input class="required form-control" type="text" name="price" id="price" value="<?php if(isset($edit_listing['price'])) echo $edit_listing['price'];?>" placeholder="Price" />
                       </span>
                    </label>
                
                    <label class="lable_style">
                       <span>Stock #</span>
                       <span>
                           <input class="form-control" type="text" name="stock_no" id="stock_no" value="<?php if(isset($edit_listing['stock_no'])) echo $edit_listing['stock_no'];?>" placeholder="Stock #" />
                       </span>
                   </label>
                
                    <div class="clear"></div>
                    <label class="lable_style">
                       <span>Is Sold</span>
                       <span>
                           <select name="is_sold" id="is_sold" class="required select_item">
                               <option value="0">No</option>
                               <option <?php if(isset($edit_listing) && $edit_listing['is_sold'] == 1){ echo "selected ";} ?> value="1">Yes</option>                             
                           </select>
                       </span>
                    </label>
                
                   <label class="lable_style">
                       <span>Description</span>
                       <span>
                           <textarea name="description" style="height:80px;" id="description" class="required form-control"><?php if(isset($edit_listing['description'])) echo $edit_listing['description'];?></textarea>
                       </span>
                   </label>
                    
                   <div class="clear"></div>
                   <label style="width:80%;">
                       <span>
                           <?php include 'application/views/member/image_upload.php'; ?>
                       </span>
                   </label>
                 
                   <div class="clear"></div>
                   <div class="v_gap"></div>
                   <div class="clear"></div>
                
                    <label class="lable_style margin-5">
                        <span>&nbsp;</span>
                        <span><button type="submit" class="buttom">Submit</button></span>
                    </label>
                
                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>
      
        </div>     
    </form>
    <div class="clear"></div>
    <div class="v_gap"></div>
    <div class="clear"></div>
</div>

<script>
 $(document).ready(function() {
        $('#SubmitFrm').validate({
        });
    });    
</script>
