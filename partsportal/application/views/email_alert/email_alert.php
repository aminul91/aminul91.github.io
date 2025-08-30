<link href="<?php echo BASEURL?>styles/css3-buttons.css" rel="stylesheet" type="text/css" />
<div class="vist_profile">
    <div class="main_tab_2">
    	<div class="span_row">
            <form id="SubmitFrm" name="SubmitFrm" method="post" action="">
                
                <span class="titleBox">Parts Alert</span>
                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>
                
                <div class="bRow">
                    <div class="blftPart">
                        Equipment Type
                    </div>
                    <div class="brightPart">
                        <select id="contact_method" name="contact_method" onchange="set_mail_content(this.value);">
                            <?php
                            $all_parts_list = get_all_parts_list();
                            foreach($all_parts_list as $val)
                            {
                            ?>
                            <option  value="<?php echo $val['table_name']?>"><?php echo $val['parts_name']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="clear"></div>
                </div> 
                
                <div id="parts_type_content">
                    
                    <div class="bRow">
                        <div class="blftPart">
                            Equipment Type
                        </div>
                        <div class="brightPart">
                            <select name="equipment_type" id="equipment_type" class="required select_item" onchange="get_child_equipment_type(this.value,1); return false;">
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
                             Make
                         </div>
                         <div class="brightPart">
                             <select name="make" id="make" class="required select_item" onchange="get_model(this.value,1);">
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
                               <?php if(isset($edit_listing) && $edit_listing['model'])
                               {
                              ?>
                               <option value="<?php echo $edit_listing['model'];?>" ><?php echo get_make_model_name($edit_listing['model']);?></option>     
                              <?php 
                               } 
                               ?>
                            </select>
                         </div>
                         <div class="clear"></div>
                     </div> 


                    <div class="bRow">
                         <div class="blftPart">
                             Component Category
                         </div>
                         <div class="brightPart">
                             <select name="componant_category" id="componant_category" class="required select_item">
                               <option value="">Select One</option>
                               <?php
                                $componant_category = $this->config->item('componant_category');
                                foreach ($componant_category as $componant_type_value)
                                {
                               ?>
                                 <option  value="<?php echo $componant_type_value;?>"><?php echo $componant_type_value;?></option>  
                               <?php
                                }
                               ?>                               
                            </select>
                         </div>
                         <div class="clear"></div>
                     </div> 



                    <div class="bRow">
                         <div class="blftPart">
                             Key Words of your part
                         </div>
                         <div class="brightPart">
                             <input class="required form-control" type="text" name="key_word" id="key_word"  placeholder="Key Words of your part" />
                         </div>
                         <div class="clear"></div>
                     </div> 


                    <div class="bRow">
                         <div class="blftPart">
                             Part number if known
                         </div>
                         <div class="brightPart">
                             <input class="form-control" type="text" name="part_number" id="part_number"  placeholder="Part number if known" />
                         </div>
                         <div class="clear"></div>
                     </div> 

                    

                </div>
                
                
                <div class="bRow">
                    <div class="blftPart">
                        First Name
                    </div>
                    <div class="brightPart">
                        <input class="required form-control" type="text" name="fname" id="fname"  placeholder="First Name" />
                    </div>
                    <div class="clear"></div>
                </div> 
                
                <div class="bRow">
                    <div class="blftPart">
                        Lasr Name
                    </div>
                    <div class="brightPart">
                        <input class="required form-control" type="text" name="lname" id="lname"  placeholder="Last Name" />
                    </div>
                    <div class="clear"></div>
                </div> 
                
                <div class="bRow">
                    <div class="blftPart">
                        E-mail
                    </div>
                    <div class="brightPart">
                        <input class="form-control required email" type="text" name="email" id="email" value="" placeholder="E-mail" />
                    </div>
                    <div class="clear"></div>
                </div> 
                
                <div class="bRow">
                    <div class="blftPart">
                        Captcha
                    </div>
                    <div class="brightPart">
                       <img src="<?php echo BASEURL; ?>captcha/captcha.php" id="captcha" /><br/>
                       <a href="javascript:void(0);" onclick="
                           document.getElementById('captcha').src='<?php echo BASEURL; ?>captcha/captcha.php?'+Math.random();
                           document.getElementById('captcha-form').focus();"
                          id="change-image">Not readable? Change text.
                       </a><br/>
                       <input type="text" name="captcha" id="captcha-form" class="form-control  required" autocomplete="off" />
                    </div>
                    <div class="clear"></div>
               </div>
                

                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>

                <div class="bRow">
                    <div class="blftPart">                        
                        <button type="submit" class="action blue"><span class="label">Send</span></button>
                    </div>
                    <div class="brightPart">
                        &nbsp;
                    </div>
                    <div class="clear"></div>
                </div> 


                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>
                
          </form> 
             <div class="clear"></div>
        </div>
         <div class="clear"></div>
    </div>
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
            url: baseUrl + 'emailalert/get_model',
            data:{'parent_id':id,'parts_list_id': parts_list_id },
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
function set_mail_content(mail_content)
{
    $.ajax({
        type: "POST",
        url: baseUrl + 'emailalert/load_mail_content',
        data:{'mail_content':mail_content},
        success: function(html_data)
        {
           $('#parts_type_content').html(html_data); 
        }
    });
}
</script>