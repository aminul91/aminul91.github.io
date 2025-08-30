<?php
$advance_parts_search = get_parent_equipment_type(1);
$equipment_currently_bee_dismantled = get_parent_equipment_type(2);
$find_deals_on_lubes = get_parent_equipment_type(3);
$tyre = get_parent_equipment_type(4);
$workshop_n_narts_manuals = get_parent_equipment_type(5);
$machine_attachments = get_parent_equipment_type(6);
$workshop_tools = get_parent_equipment_type(7);
?>
<div class="col">
       <div class="search_header">
          <form name="" id="" method="POST" action="<?php echo BASEURL;?>equipment_parts_part_num_search">   
            <div class="span_row">
                <h5 class="search_title line_height margin-7">Search by Part Number</h5>
                <input type="text" id="parts_num"  name="parts_num"  value="" placeholder="search" class="input_search" />
            </div>
            <div class="span_row">
                <span class="span_check">Starting With<input type="radio" id="matched"  name="matched"  value="pertial" class="checkbox" /></span>
                <span class="span_check">Exact Match<input type="radio"   id="matched"   name="matched"  value="full"   class="checkbox" /></span>
            </div>
            <div class="span_row">
                <input type="submit" value="Search" class="input_submit" />
            </div>
          </form>    
       </div>
       <div class="search_ber">
                <h5 class="search_title line_height">Advance Parts Search</h5>
            <div class="span_row margin-1">
             <form name="" id="" method="POST" action="<?php echo BASEURL;?>equipment_parts_search">    
                <div class="span_col">
                        <label>
                        <span class="label_span">Equipment Type</span>
                        <span class="label_span">
                            <select name="equipment_type" id="equipment_type_1" class="select_item" onchange="get_child_equipment_type_search(this.value,1,1); return false;">
                           <option value="">Select One</option>
                           <?php
                           if($advance_parts_search)
                           {
                                foreach ($advance_parts_search as $equipment_type_value)
                                {
                           ?>
                                    <option value="<?php echo $equipment_type_value['category_id'];?>"><?php echo $equipment_type_value['name'];?></option>  
                           <?php
                                }
                           }
                           ?>                             
                       </select>
                        </span>
                    </label>
                        <label>
                        <span class="label_span">Sub Category</span>
                        <span class="label_span">
                           <select name="sub_category" id="sub_category_1" class="select_item">
                               <option value="">Select One</option>                              
                           </select>
                        </span>
                    </label>
                        <label>
                        <span class="label_span">Make </span>
                        <span class="label_span">
                        <select name="make" id="make" class="select_item" onchange="get_model(0,this.value,1);">
                            <option value="">Select One</option>
                            <?php 
                            $make = get_make_list(1);
                            foreach($make as $make_val)
                            {
                            ?>
                            <option value="<?php echo $make_val['make_model_id'];?>"><?php echo $make_val['name'];?></option>
                            <?php
                            }
                            ?>                            
                        </select>
                        </span>
                    </label>
                        <label>
                        <span class="label_span">Model </span>
                        <span class="label_span">
                            <select class="select_item" name="model" id="model_0">
                                <option value="">Select One</option>
                            </select>
                        </span>
                    </label>
                        <label>
                        <span class="label_span">Component </span>
                        <span class="label_span">
                           <select name="componant_category" id="componant_category" class="select_item">
                               <option value="">Select One</option>
                               <?php
                                $componant_category = $this->config->item('componant_category');
                                foreach ($componant_category as $componant_type_value)
                                {
                               ?>
                                 <option value="<?php echo $componant_type_value;?>"><?php echo $componant_type_value;?></option>  
                               <?php
                                }
                               ?>                               
                           </select>
                        </span>
                    </label>
                        <label>
                        <span class="label_span">Key Words</span>
                        <span class="label_span">
                                <input type="text" name="key_word" id="key_word" value="" class="input_item" style="width:117px" />
                        </span>
                    </label>
                        <label>
                        <span class="label_span">Condition </span>
                        <span class="label_span">
                           <select name="part_condition" id="part_condition" class="select_item">
                               <option value="">Select One</option>
                               <?php
                                $condition = $this->config->item('condition');
                                foreach ($condition as $cond_value)
                                {
                               ?>
                                 <option value="<?php echo $cond_value;?>"><?php echo $cond_value;?></option>  
                               <?php
                                }
                               ?>   
                           </select>
                        </span>
                        </label>
                        <label>
                        <span class="label_span">Location </span>
                        <span class="label_span">
                           <select name="location" id="location" class="required select_item">
                               <option value="">Select One</option>
                               <?php 
                               foreach($location as $val)
                               {
                              ?>
                               <option value="<?php echo $val['location_id'];?>"><?php echo $val['location'];?></option>
                              <?php
                               }
                              ?>                                 
                           </select>
                        </span>
                        </label>
                        
                    <label>
                        <span class="label_span">
                                <input type="submit" name="" value="Search" class="input_submit3" />
                        </span>
                    </label>     
                </div>
              </form>
                <div class="span_col3">
                    <img src="<?php echo BASEURL?>images/Cat-2.png" alt="" style="float:right; width:80px; height:80px; margin-bottom:15px; border:1px solid #A3A3A3;" />
                    <img src="<?php echo BASEURL?>images/Volvo.png" alt="" style="float:right; width:80px; height:80px; margin-bottom:15px; border:1px solid #A3A3A3;" />
                    <img src="<?php echo BASEURL?>images/JD.png" alt="" style="float:right; width:80px; height:80px; margin-bottom:15px; border:1px solid #A3A3A3;" />
                </div>
            </div>
       </div>
       <div class="search_ber">
                <h5 class="search_title line_height">Equipment currently been Dismantled</h5>
                <form name="" id="" method="POST" action="<?php echo BASEURL;?>equipment_dismantling_search">     
            <div class="span_row">
                <label class="span_col4 margin-2">
                        <span class="label_span2">Type </span>
                        <select name="equipment_type" id="equipment_type_2" class="select_item2">
                           <option value="">Select One</option>
                           <?php
                           if($equipment_currently_bee_dismantled)
                           {
                                foreach ($equipment_currently_bee_dismantled as $equipment_type_value)
                                {
                           ?>
                                    <option value="<?php echo $equipment_type_value['category_id'];?>"><?php echo $equipment_type_value['name'];?></option>  
                           <?php
                                }
                           }
                           ?>                             
                       </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Make</span>
                        <select name="make" id="make" class="select_item2" onchange="get_model(1,this.value,2);">
                            <option value="">Select One</option>
                            <?php 
                            $make = get_make_list(2);
                            foreach($make as $make_val)
                            {
                            ?>
                            <option value="<?php echo $make_val['make_model_id'];?>"><?php echo $make_val['name'];?></option>
                            <?php
                            }
                            ?>                            
                        </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Model</span>
                    <select class="select_item2" name="model" id="model_1">
                        <option value="">Select One</option>
                    </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Location </span>
                        <select name="location" id="location" class="select_item2">
                            <option value="">Select One</option>
                            <?php 
                            foreach($location as $val)
                            {
                           ?>
                            <option value="<?php echo $val['location_id'];?>"><?php echo $val['location'];?></option>
                           <?php
                            }
                           ?>                                 
                        </select>
                </label>
            </div>
            <div class="span_row">
                <img src="<?php echo BASEURL?>images/Wrecking.jpg" alt="" style="float:right; width:80px; height:80px; margin:15px 5px; border:1px solid #A3A3A3;" />
                <img src="<?php echo BASEURL?>images/Wrecking2.jpg" alt="" style="float:right; width:80px; height:80px; margin:15px 5px; border:1px solid #A3A3A3;" />
                <img src="<?php echo BASEURL?>images/Excavator.jpg" alt="" style="float:right; width:80px; height:80px; margin:15px 5px; border:1px solid #A3A3A3;" />
                <img src="<?php echo BASEURL?>images/Wrecking3.jpg" alt="" style="float:right; width:80px; height:80px; margin:15px 5px; border:1px solid #A3A3A3;" />
            </div>
            <div class="span_row">
                <marquee class="margin" direction="left" scrollamount="2">Trucks & Trailers - Earthmoving - Mining - Farming - Forestry - Material Handling</marquee>
            </div>
            <div class="span_row">
                <input type="submit" name="" value="Search " class="input_submit" /><h5 class="text_h5">Wrecking Now!</h5>
            </div>
          </form>
       </div>
       <div class="search_ber">
                <h5 class="search_title line_height">Workshop & Parts Manuals</h5>
          <form name="" id="" method="POST" action="<?php echo BASEURL;?>workshop_parts_manuals_search"> 
            <div class="span_row">
                <label class="span_col4 margin-2">
                        <span class="label_span2">Type </span>
                        <select name="equipment_type" id="equipment_type_3" class="select_item2">
                           <option value="">Select One</option>
                           <?php
                           if($workshop_n_narts_manuals)
                           {
                                foreach ($workshop_n_narts_manuals as $equipment_type_value)
                                {
                                ?>
                                 <option value="<?php echo $equipment_type_value['category_id'];?>"><?php echo $equipment_type_value['name'];?></option>  
                                <?php
                                } 
                           }                            
                           ?>                             
                       </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Make</span>
                        <select name="make" id="make" class="select_item2" onchange="get_model(2,this.value,5);">
                            <option value="">Select One</option>
                            <?php 
                            $make = get_make_list(5);
                            foreach($make as $make_val)
                            {
                            ?>
                            <option value="<?php echo $make_val['make_model_id'];?>"><?php echo $make_val['name'];?></option>
                            <?php
                            }
                            ?>                            
                        </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Model</span>
                    <select class="select_item2" name="model" id="model_2">
                        <option value="">Select One</option>
                    </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Location </span>
                        <select name="location" id="location" class="select_item2">
                            <option value="">Select One</option>
                            <?php 
                            foreach($location as $val)
                            {
                           ?>
                            <option value="<?php echo $val['location_id'];?>"><?php echo $val['location'];?></option>
                           <?php
                            }
                           ?>                                 
                        </select>
                </label>
            </div>
            <div class="clear"></div>
            <div class="span_row" style="padding-top:10px;">
                <marquee class="margin" direction="left" scrollamount="2">Workshop Manuals - Parts Manuals - Service Manuals</marquee>
            </div>
            <div class="span_row">
                <input type="submit" name="" value="Search " class="input_submit margin-1" style="margin-top:0px;margin-bottom:5px;" />
            </div>
          </form>
       </div>
       <div class="search_ber">
            <div class="span_col2">
                <h5 class="search_title line_height">Find Deals on Lubes</h5>
            </div>
                <div class="span_col2">
                <img src="<?php echo BASEURL?>images/Oil2.jpg" alt="" style="float:left; width:80px; height:80px; margin:5px 5px; border:1px solid #A3A3A3;" />
                <img src="<?php echo BASEURL?>images/Lucas Oil Logo.jpg" alt="" style="float:left; width:80px; height:80px; margin:5px 5px; border:1px solid #A3A3A3;" />
                </div>
           <form name="" id="" method="POST" action="<?php echo BASEURL;?>parts_lubes_search"> 
            <div class="span_row">
                <label class="span_col4 margin-2">
                        <span class="label_span2">Lube type </span>
                        <select name="lube_type" id="lube_type" class="select_item2">
                            <option value="">Select One</option>
                            <?php
                             if($find_deals_on_lubes)
                             {
                                foreach ($find_deals_on_lubes as $lube_value)
                                {
                                ?>
                                 <option value="<?php echo $lube_value['category_id'];?>"><?php echo $lube_value['name'];?></option>  
                                <?php
                                } 
                             }                             
                            ?>                           
                        </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Grade</span>
                        <select name="grade" id="grade" class="select_item2">
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
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Quantity</span>
                           <select name="quantity" id="quantity" class="select_item2">
                               <option value="">Select One</option>
                               <?php
                                $quantity = $this->config->item('quantity');
                                foreach ($quantity as $quantity_value)
                                {
                               ?>
                                 <option  value="<?php echo $quantity_value;?>"><?php echo $quantity_value;?></option>  
                               <?php
                                }
                               ?>                           
                           </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Location </span>
                        <select name="location" id="location" class="select_item2">
                            <option value="">Select One</option>
                            <?php 
                            foreach($location as $val)
                            {
                           ?>
                            <option value="<?php echo $val['location_id'];?>"><?php echo $val['location'];?></option>
                           <?php
                            }
                           ?>                                 
                        </select>
                </label>
            </div>
           <div class="span_row" style="padding-top:10px; ">
                <marquee behavior="scroll" scrollamount="2">Grease - Additives - Hydraulic Oils - Diesel Oils - High Performance Oils</marquee>
            </div>
            <div class="span_row">
                <input type="submit" name="" value="Search " class="input_submit margin-1" />
            </div> 
           </form>
            <div class="span_row">
                <div class="span_col0">
                    <img src="<?php echo BASEURL?>images/Castrol-Logo.png" alt="" style="float:right; width:98%;  margin:10px 0px 10px 2%;" />
                </div>
            </div>
           <div class="clear"></div>
           <div class="vs_gap"></div>
       </div>
       <div class="search_ber">
                <div class="span_col2">
                        <h5 class="search_title line_height">Machine Attachments</h5>
                <div class="span_col2">
                        <p class="div_local_text"><b>Excavators</b></p>
                </div>
                <div class="span_col2">
                        <p class="div_local_text"><b>Skid Steer</b></p>
                </div>
                <div class="span_col2">
                        <p class="div_local_text"><b>Backhoe</b> </p>
                </div>
                <div class="span_col2">
                        <p class="div_local_text"><b>Farming</b></p>
                </div>
                <div class="span_col0">
                        <p class="div_local_text"><b>and More</b></p>
                </div>
            </div>
                <div class="span_col2">
                <img src="<?php echo BASEURL?>images/Excavator Bucket.jpg" alt="" style="float:left; width:80px; height:80px; margin:5px 5px; border:1px solid #A3A3A3;" />
                <img src="<?php echo BASEURL?>images/Quic Hitch.jpg" alt="" style="float:left; width:80px; height:80px; margin:5px 5px; border:1px solid #A3A3A3;" />
                </div>
           <form name="" id="" method="POST" action="<?php echo BASEURL;?>parts_machine_attachments_search"> 
            <div class="span_row">
                <label class="span_col4 margin-2">
                        <span class="label_span2">Machine Type </span>
                           <select name="attachment_type" id="attachment_type" class="select_item2" onchange="get_child_equipment_type_search(this.value,6,6); return false;">
                               <option value="">Select One</option>
                               <?php
                                if($machine_attachments)
                                {
                                    foreach ($machine_attachments as $attachment_value)
                                    {
                                    ?>
                                     <option value="<?php echo $attachment_value['category_id'];?>"><?php echo $attachment_value['name'];?></option>  
                                    <?php
                                    } 
                                }                                
                               ?>                               
                           </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Category</span>
                           <select name="sub_category" id="sub_category_6" class="select_item2">
                               <option value="">Select One</option>                                                          
                           </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Keyword</span>
                    <input type="text" name="keyword" id="keyword" class="select_item2 border" />
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Condition </span>
                        <select name="condition" id="condition" class="select_item2">
                            <option value="">Select One</option>
                            <?php
                             $condition = $this->config->item('condition');
                             foreach ($condition as $cond_value)
                             {
                            ?>
                              <option value="<?php echo $cond_value;?>"><?php echo $cond_value;?></option>  
                            <?php
                             }
                            ?>   
                        </select>
                </label>
            </div>
            <div class="span_row">
                <label class="span_col4 margin-2">
                        <span class="label_span2">Location </span>
                           <select name="location" id="location" class="select_item2">
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
                </label>
                <input type="submit" name="" value="Search " class="input_submit margin-4" />
            </div>
        </form>
            <div class="span_row">
                <div class="span_col0">                    
                    <img src="<?php echo BASEURL?>images/Norm-Attachments-AD-n.png" alt="" style="float:right; width:98%; height:100px; margin:10px 0px 10px 2%; border:1px solid #A3A3A3;" />
                </div>
            </div>
       </div>
       <div class="search_ber">
            <div class="span_col2">
                 <h5 class="search_title line_height">The BIG Tyre Search</h5>
            </div>
            <div class="span_col2">
                 <h5 class="search_title2 line_height"> <b>New & Used</b> </h5>
            </div>
            <div class="span_col0">
                <p class="div_local_text margin"><strong>Earthmoving - Mining - Truck - Tractor - and More</strong></p>
            </div>
           <form name="" id="" method="POST" action="<?php echo BASEURL;?>parts_tyre_search"> 
            <div class="span_row">
                <label class="span_col4 margin-2">
                    <span class="label_span2">Category </span>
                    <select name="category" id="category" class="select_item2">
                        <option value="">Select One</option>
                        <?php
                         if($tyre)
                         {
                            foreach ($tyre as $cate_value)
                            {
                            ?>
                                <option value="<?php echo $cate_value['category_id'];?>"><?php echo $cate_value['name'];?></option>  
                            <?php
                            } 
                         }                         
                        ?>                           
                    </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Rim Size</span>
                        <select name="rim_size" id="rim_size" class="select_item2">
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
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Tyre size</span>
                           <select name="tyre_size" id="tyre_size" class="select_item2">
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
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Condition </span>
                        <select name="condition" id="condition" class="select_item2">
                            <option value="">Select One</option>
                            <?php
                             $condition = $this->config->item('condition');
                             foreach ($condition as $cond_value)
                             {
                            ?>
                              <option value="<?php echo $cond_value;?>"><?php echo $cond_value;?></option>  
                            <?php
                             }
                            ?>                           
                        </select>
                </label>
            </div>
            <div class="span_col0 margin-3">

            </div>
            <div class="span_row">
                <label class="span_col4 margin-2">
                        <span class="label_span2">Location</span>
                        <select name="location" id="location" class="select_item2">
                            <option value="">Select One</option>
                            <?php 
                            foreach($location as $val)
                            {
                           ?>
                            <option  value="<?php echo $val['location_id'];?>"><?php echo $val['location'];?></option>
                           <?php
                            }
                           ?>                                 
                        </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Keyword</span>
                    <input type="text" name="keyword" id="keyword" class="select_item2 border" />
                </label>
                <img src="<?php echo BASEURL?>images/Tractor Tyre.jpg" alt="" style="float:left; display:block; width:80px; height:80px; margin:0 7px; border:1px solid #A3A3A3;" />
                <img src="<?php echo BASEURL?>images/Earthmoving Tyre.jpg" alt="" style="float:left; display:block; width:80px; height:80px; border:1px solid #A3A3A3;" />
                <input type="submit" name="" value="Search " class="input_submit margin-4 clear" />
            </div>
          </form>
            <div class="span_col0">
                <p class="div_local_text margin">Request o Quote from our Premium Sellers</p>
            </div>
            <div class="span_col0">
                <img src="<?php echo BASEURL?>images/Michelin-Tyre-Co.png" alt="" style="float:right; width:98%; height:100px; margin:10px 0px 10px 2%; border:1px solid #A3A3A3;" />
            </div>
       </div>
       <div class="search_ber">
            <div class="span_col2">
                  <h5 class="search_title line_height">Workshop Tools</h5>
            </div>
            <div class="span_col2">
                  <h5 class="search_title2 line_height"> <b>New & Used</b></h5>
            </div>
           <form name="" id="" method="POST" action="<?php echo BASEURL;?>parts_workshop_tools_search">
            <div class="span_row">
                <label class="span_col4 margin-2">
                        <span class="label_span2">Category </span>
                        <select name="category" id="category" class="select_item2" onchange="get_child_equipment_type_search(this.value,7,7); return false;">
                            <option value="">Select One</option>
                            <?php
                             if($workshop_tools)
                             {
                                foreach ($workshop_tools as $cate_value)
                                {
                                ?>
                                 <option value="<?php echo $cate_value['category_id'];?>"><?php echo $cate_value['name'];?></option>  
                                <?php
                                } 
                             }                             
                            ?>                           
                        </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Sub category</span>
                        <select name="sub_category" id="sub_category_7" class="select_item2">
                            <option value="">Select One</option>                                                           
                        </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Key word</span>
                    <input type="text" name="keyword" id="keyword" class="select_item2 border" />
                </label>
            </div>
            <div class="span_col0 margin-3">

            </div>
            <div class="span_row">
                <label class="span_col4 margin-2">
                        <span class="label_span2">Condition</span>
                           <select name="condition" id="condition" class="select_item2">
                               <option value="">Select One</option>
                               <?php
                                $condition = $this->config->item('condition');
                                foreach ($condition as $cond_value)
                                {
                               ?>
                                 <option value="<?php echo $cond_value;?>"><?php echo $cond_value;?></option>  
                               <?php
                                }
                               ?>   
                           </select>
                </label>
                <label class="span_col4 margin-2">
                        <span class="label_span2">Location</span>
                        <select name="location" id="location" class="select_item2">
                            <option value="">Select One</option>
                            <?php 
                            foreach($location as $val)
                            {
                           ?>
                            <option  value="<?php echo $val['location_id'];?>"><?php echo $val['location'];?></option>
                           <?php
                            }
                           ?>                                 
                        </select>
                </label>
                <label class="span_col4 margin-2" style="width:40%;">
                    <input type="submit" name="" value="Search " class="input_submit margin-6" style=" float:right; margin-right:10px;margin-top:15px;" />
                </label>
            </div>
           </form>
            <div class="span_col0">
                <img src="<?php echo BASEURL?>images/Hare-&-Forbes-Tools-AD2.png" alt="" style="float:left; width:98%; height:80px; margin:10px 0px 10px 2%; border:1px solid #A3A3A3;" />
            </div>
            <div class="span_row">
                <img src="<?php echo BASEURL?>images/tools.jpg" alt="" style="float:right; width:80px; height:80px; margin:15px 5px; border:1px solid #A3A3A3;" />
                <img src="<?php echo BASEURL?>images/Tools2.jpg" alt="" style="float:right; width:80px; height:80px; margin:15px 5px; border:1px solid #A3A3A3;" />
                <img src="<?php echo BASEURL?>images/Tools3.jpg" alt="" style="float:right; width:80px; height:80px; margin:15px 5px; border:1px solid #A3A3A3;" />
                <img src="<?php echo BASEURL?>images/Vice - Workshop Tools.jpg" alt="" style="float:right; width:80px; height:80px; margin:15px 5px; border:1px solid #A3A3A3;" />
            </div>
       </div>
    </div>

<script>
function get_model(type,id,parts_list_id)
{
    if(id !='')
    {
      $.ajax({
            type: "POST",
            url: baseUrl + 'emailalert/get_model',
            data:{'parent_id':id,'parts_list_id':parts_list_id },
            success: function(html_data)
            {
               $('#model_'+type).html(html_data); 
            }
        });
    }
    else
    {
        $('#model_'+type).html('<option value="">select one</option>'); 
    }
} 
</script>