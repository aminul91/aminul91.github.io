<?php include 'application/views/member/user_account.php'; ?>

<div class="ragistation">
    <h1 class="title_h1">Equipment Dismantling</h1>
    <form name="SubmitFrm" id="SubmitFrm" action="" method="POST" style="float:left;">
    <div class="form_style">
                <br/>
                <label class="lable_style">
                       <span>Equipment Type:</span>
                       <span>
                           <select name="equipment_type" id="equipment_type" class="required select_item" onchange="get_child_equipment_type(this.value,2); return false;">
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
                       <span>Make:</span>
                       <span>
                           <select name="make" id="make" class="required select_item" onchange="get_model(this.value,2);">
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
                       <span>Model:</span>
                       <span>
                           <select name="model" id="model" class="required select_item">
                               <option value="">Select One</option>       
                               <?php 
                               if(isset($edit_listing) && $model)
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
                       <span>Serial</span>
                       <span>
                           <input class="required form-control" type="text" name="serial" id="serial" value="<?php if(isset($edit_listing) && $edit_listing['serial']) echo $edit_listing['serial']; ?>" placeholder="Serial" />
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
                    
                    <div class="clear"></div>
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

function get_model(id,parts_list_id)
{
    if(id !='')
    {
      $.ajax({
            type: "POST",
            url: baseUrl + 'account/get_model',
            data:{'parent_id':id,'parts_list_id':parts_list_id },
            success: function(html_data)
            {
               $('#model').html(html_data); 
            }
        });
    }
    else
    {
        $('#model').html('<option value="">select one</option>'); 
    }
}
</script>
