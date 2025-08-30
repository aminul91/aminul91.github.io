<?php include 'application/views/member/user_account.php'; ?>
<div class="ragistation">
    <h1 class="title_h1">Parts Tyre</h1>
    <form name="SubmitFrm" id="SubmitFrm" action="" method="POST" style="float:left;">
    <div class="form_style">
                <br/>
                <label class="lable_style">
                       <span>Category :</span>
                       <span>
                           <select name="category" id="category" class="required select_item" onchange="get_child_equipment_type(this.value,4); return false;">
                               <option value="">Select One</option>
                               <?php
                                if($category)
                                {
                                    foreach ($category as $equipment_type_value)
                                    {
                               ?>
                                    <option <?php if(isset($edit_listing) && $edit_listing['category']==$equipment_type_value['category_id']){echo "selected ";} ?> value="<?php echo $equipment_type_value['category_id'];?>"><?php echo $equipment_type_value['name'];?></option>  
                               <?php
                                    }
                                }
                               ?>                             
                           </select>
                       </span>
                </label>
                
                <label class="lable_style">
                       <span>Rim Size :</span>
                       <span>
                           <select name="rim_size" id="rim_size" class="required select_item">
                               <option value="">Select One</option>
                               <?php
                                $rim_size = $this->config->item('rim_size');
                                foreach ($rim_size as $rim_value)
                                {
                               ?>
                                 <option <?php if(isset($edit_listing) && $edit_listing['rim_size']==$rim_value){echo "selected ";} ?> value="<?php echo $rim_value;?>"><?php echo $rim_value;?></option>  
                               <?php
                                }
                               ?>                           
                           </select>
                       </span>
                </label>
                
                <label class="lable_style">
                       <span>Tyre Size :</span>
                       <span>
                           <select name="tyre_size" id="tyre_size" class="required select_item">
                               <option value="">Select One</option>
                               <?php
                                $tyre_size = $this->config->item('tyre_size');
                                foreach ($tyre_size as $tyre_size_value)
                                {
                               ?>
                                 <option <?php if(isset($edit_listing) && $edit_listing['tyre_size']==$tyre_size_value){echo "selected ";} ?> value="<?php echo $tyre_size_value;?>"><?php echo $tyre_size_value;?></option>  
                               <?php
                                }
                               ?>                           
                           </select>
                       </span>
                </label>
                
                <label class="lable_style">
                   <span>Brand</span>
                   <span>
                       <input class="required form-control" type="text" name="brand" id="brand" value="<?php if(isset($edit_listing['brand'])) echo $edit_listing['brand'];?>" placeholder="Brand" />
                   </span>
                </label>
                
                <label class="lable_style">
                   <span>Model</span>
                   <span>                       
                       <select name="model" id="model" class="required select_item">
                              <option value="">Select One</option>       
                              <?php 
                               if($model)
                               {
                                   foreach($model as $m)
                                   {
                              ?>
                                      <option <?php if(isset($edit_listing) && $edit_listing['model']==$m['make_model_id']){echo "selected ";} ?>  value="<?php echo $m['make_model_id'];?>" ><?php echo $m['name'];?></option>     
                              <?php 
                                   }
                               } 
                               ?>
                           </select>
                   </span>
                </label>
                
                <label class="lable_style">
                       <span>Tread (If Used):</span>
                       <span>
                           <select name="tread" id="tread" class="required select_item">
                               <option value="">Select One</option>
                               <?php
                                $tread = $this->config->item('tread');
                                foreach ($tread as $tread_value)
                                {
                               ?>
                                 <option <?php if(isset($edit_listing) && $edit_listing['tread']==$tread_value){echo "selected ";} ?> value="<?php echo $tread_value;?>"><?php echo $tread_value;?></option>  
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
