<?php include 'application/views/member/user_account.php'; ?>
<div class="ragistation">
    <h1 class="title_h1">Machine Attachments</h1>
    <form name="SubmitFrm" id="SubmitFrm" action="" method="POST" style="float:left;">
    <div class="form_style">
                <br/>
                <label class="lable_style">
                       <span>Equipment Type:</span>
                       <span>
                           <select name="equipment_type" id="equipment_type" class="required select_item" onchange="get_child_equipment_type(this.value,6); return false;">
                               <option value="">Select One</option>
                               <?php
                                
                                if($equipment_type)
                                {
                                    foreach ($equipment_type as $equipment_type_value)
                                    {
                               ?>
                                    <option <?php if(isset($edit_listing) && $edit_listing['equipment_type']==$equipment_type_value['category_id']){echo "selected ";} ?> value="<?php echo $equipment_type_value['category_id'];?>"><?php echo $equipment_type_value['name'];?></option>  
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
                               <?
                               if($edit_listing['sub_category'] && $edit_listing['equipment_type'])
                               {
                                   $subcategoryInfo = get_child_equipment_type($edit_listing['equipment_type'],6);
                                   if($subcategoryInfo)
                                   {
                                       foreach($subcategoryInfo as $sub_category_value)
                                       {
                               ?>
                                            <option <?php if(isset($edit_listing) && $edit_listing['sub_category'] == $sub_category_value['category_id']){echo "selected ";} ?> value="<?php echo $sub_category_value['category_id'];?>"><?php echo $sub_category_value['name']?></option> 
                               <?
                                       }
                                   }
                               }
                               ?>
                           </select>
                       </span>
                </label>
                
                <label class="lable_style">
                       <span>Attachment Type:</span>
                       <span>
                           <select name="attachment_type" id="attachment_type" class="required select_item">
                               <option value="">Select One</option>
                               <?php
                                $attachment_type = $this->config->item('attachment_type');
                                foreach ($attachment_type as $attachment_value)
                                {
                               ?>
                                 <option <?php if(isset($edit_listing) && $edit_listing['attachment_type']==$attachment_value){echo "selected ";} ?> value="<?php echo $attachment_value;?>"><?php echo $attachment_value;?></option>  
                               <?php
                                }
                               ?>                               
                           </select>
                       </span>
                </label>
                
                <label class="lable_style">
                       <span>Make:</span>
                       <span>
                           <select name="make" id="make" class="required select_item" >
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
                       </span>
                </label>
                
                <label class="lable_style">
                       <span>Suit machine size:</span>
                       <span>
                           <select name="suit_machine_size" id="suit_machine_size" class="required select_item">
                               <option value="">Select One</option>
                               <?php
                                $suit_machine_size = $this->config->item('suit_machine_size');
                                foreach ($suit_machine_size as $suit_machine_size_value)
                                {
                               ?>
                                 <option <?php if(isset($edit_listing) && $edit_listing['suit_machine_size']==$suit_machine_size_value){echo "selected ";} ?> value="<?php echo $suit_machine_size_value;?>"><?php echo $suit_machine_size_value;?></option>  
                               <?php
                                }
                               ?>                               
                           </select>
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
