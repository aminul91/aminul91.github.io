<?php include 'application/views/member/user_account.php'; ?>
<div class="ragistation">
    <h1 class="title_h1">Parts Lube</h1>
    <form name="SubmitFrm" id="SubmitFrm" action="" method="POST" style="float:left;">
    <div class="form_style">
                <br/>
                <label class="lable_style">
                       <span>Lube Type:</span>
                       <span>
                           <select name="lube_type" id="lube_type" class="required select_item" >
                               <option value="">Select One</option>
                               <?php
                                if($lube_type)
                                {
                                    foreach ($lube_type as $equipment_type_value)
                                    {
                               ?>
                                    <option <?php if(isset($edit_listing) && $edit_listing['lube_type']==$equipment_type_value['category_id']){echo "selected ";} ?> value="<?php echo $equipment_type_value['category_id'];?>"><?php echo $equipment_type_value['name'];?></option>  
                               <?php
                                    }
                                }
                               ?>                             
                           </select>
                       </span>
                   </label>
                <label class="lable_style">
                       <span>Grade:</span>
                       <span>
                           <select name="grade" id="grade" class="required select_item">
                               <option value="">Select One</option>
                               <?php
                                $grade = $this->config->item('grade');
                                foreach ($grade as $grade_value)
                                {
                               ?>
                                 <option <?php if(isset($edit_listing) && $edit_listing['grade']==$grade_value){echo "selected ";} ?> value="<?php echo $grade_value;?>"><?php echo $grade_value;?></option>  
                               <?php
                                }
                               ?>                           
                           </select>
                       </span>
                </label>
                <label class="lable_style">
                       <span>Make/Brand:</span>
                       <span>
                           <select name="make" id="make" class="required select_item">
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
                       <span>Quantity:</span>
                       <span>
                           <select name="quantity" id="quantity" class="required select_item">
                               <option value="">Select One</option>
                               <?php
                                $quantity = $this->config->item('quantity');
                                foreach ($quantity as $quantity_value)
                                {
                               ?>
                                 <option <?php if(isset($edit_listing) && $edit_listing['quantity']==$quantity_value){echo "selected ";} ?> value="<?php echo $quantity_value;?>"><?php echo $quantity_value;?></option>  
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
                       <span>Location of Part:</span>
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
                       <span>Sale Price (Including GST if applicable)</span>
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
                       <span>Part Description</span>
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
