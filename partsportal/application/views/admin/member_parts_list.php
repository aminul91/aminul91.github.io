<style>
.form-control{ width:97% !important; }
</style>
<script type="text/javascript" src="<?php echo BASEURL ?>scripts/datepicker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>scripts/datepicker/jquery.timepicker.css" />
<script type="text/javascript" src="<?php echo BASEURL ?>scripts/datepicker/lib/base.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>scripts/datepicker/lib/base.css" />
<script src="<?php echo BASEURL ?>scripts/datepicker/lib/datepair.js"></script>
<!--
<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Parts List</a></li>
      </ol>
      <div class="v_gap"></div>
      <form id="saveCat" name="saveCat" method="post" action="<?php echo BASEURL?>search_parts">
          <div style="width:100%;border:1px solid #CCCCCC;padding:20px 0px 20px 0px;">
              <table class="save_box" style="width:90%;margin:0 auto;" >
                    <tr>
                        <td>
                            Dealer Name
                            <div class="clear"></div>
                            <input type="text" id="username" name="username" class="form-control" value="<?php echo $username?>" />
                        </td>
                        <td>
                            Email
                            <div class="clear"></div>
                            <input type="text" id="email" name="email" class="form-control" value="<?php echo $email?>" />
                        </td>
                        <td>
                            Seller Type
                            <div class="clear"></div>
                            <select class="form-control" id="user_type" name="user_type">
                                <option value="">--select--</option>
                                <option value="2" <?php if($user_type == 2){ echo 'selected="selected"'; }?>>Private Dealer</option>                            
                                <option value="3" <?php if($user_type == 3){ echo 'selected="selected"'; }?>>Australian Dealer</option>                            
                                <option value="4" <?php if($user_type == 4){ echo 'selected="selected"'; }?>>International Dealer</option>
                            </select>
                        </td>
                        <td>
                            Join Date
                            <div class="clear"></div>
                            <p class="datepair" data-language="javascript" style="padding:0px;margin:0px;">
                                <input type="text" id="created_on" name="created_on" value="<?php echo $created_on;?>"  class="form-control date start" />
                            </p>                             
                        </td>
                    </tr>
                    <tr><td colspan="4">&nbsp;</td></tr>
                    <tr>
                        <td colspan="4">
                            <button type="button" class="btn btn-default" onclick="search_userForm(allFrm.saveCat); return false;">Search</button>
                        </td>
                    </tr>
                </table>
              <div class="clear"></div>
          </div>
          
      </form>
      <div class="v_gap"></div>
      <?php
      if($message)
      {
      ?>
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
          <?php echo $message;?>
        </div>
      <?php
      }
      ?>
    </div>
</div>
-->


<div class="row">
  <div class="col-lg-12">
   <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Parts List</a></li>
   </ol>
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped tablesorter">
        <thead>
          <tr>
            <th>Use Type <!--i class="fa fa-sort"></i--></th>
            <th>Parts Type <!--i class="fa fa-sort"></i--></th>
            <th>Create Date <!--i class="fa fa-sort"></i--></th>
            <th>User Name <!--i class="fa fa-sort"></i--></th>
            <th>Make <!--i class="fa fa-sort"></i--></th>
            <th>Action <!--i class="fa fa-sort"--></i></th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($userListing)
        {
            if($userListing['equipment_parts'])
            {
                foreach($userListing['equipment_parts'] as $value)
                {
                    if($value['user_type'] == 2)
                    {
                        $user_type = 'Private';
                    }
                    else if($value['user_type'] == 3)
                    {
                        $user_type = 'AU Dealer';
                    }
                    else if($value['user_type'] == 4)
                    {
                        $user_type = 'Int. Dealer';
                    }
                    
                    if($value['username'])
                    {
                       $username = $value['username']; 
                    }
                    else 
                    {
                       $username = $value['fname'];  
                    }
            ?>
                    <tr>
                        <td><?php echo $user_type?></td>
                        <td><?php echo 'Equipment Parts';?></td>
                        <td><?php echo date('Y-m-d',  strtotime($value['listing_date']));?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo get_make_model_name($value['make'])?></td>
                        <td>
                            <a target="_blank" href="<?php echo BASEURL?>admin/admin_panel/edit_parts_by_member_login/1/<?php echo $value['listing_id']?>/<?php echo $value['type_listing_id']?>" >Edit</a> | 
                            <a href="javascript:void(0);" onclick="delete_parts_list(<?php echo $value['listing_id']?>); return false;">Delete</a>
                        </td>
                  </tr>                
            <?php
                }
            }
            if($userListing['equipment_dismantling'])
            {
                foreach($userListing['equipment_dismantling'] as $value)
                {
                    if($value['user_type'] == 2)
                    {
                        $user_type = 'Private';
                    }
                    else if($value['user_type'] == 3)
                    {
                        $user_type = 'AU Dealer';
                    }
                    else if($value['user_type'] == 4)
                    {
                        $user_type = 'Int. Dealer';
                    }
                    
                    if($value['username'])
                    {
                       $username = $value['username']; 
                    }
                    else 
                    {
                       $username = $value['fname'];  
                    }
            ?>
                    <tr>
                        <td><?php echo $user_type?></td>
                        <td><?php echo 'Equipment Dismantling';?></td>
                        <td><?php echo date('Y-m-d',  strtotime($value['listing_date']));?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo get_make_model_name($value['make'])?></td>
                        <td>
                            <a target="_blank" href="<?php echo BASEURL?>admin/admin_panel/edit_parts_by_member_login/2/<?php echo $value['listing_id']?>/<?php echo $value['type_listing_id']?>" >Edit</a> | 
                            <a href="javascript:void(0);" onclick="delete_parts_list(<?php echo $value['listing_id']?>); return false;">Delete</a>
                        </td>
                  </tr>                
            <?php
                }
            }
            
            if($userListing['parts_lubes'])
            {
                foreach($userListing['parts_lubes'] as $value)
                {
                    if($value['user_type'] == 2)
                    {
                        $user_type = 'Private';
                    }
                    else if($value['user_type'] == 3)
                    {
                        $user_type = 'AU Dealer';
                    }
                    else if($value['user_type'] == 4)
                    {
                        $user_type = 'Int. Dealer';
                    }
                    
                    if($value['username'])
                    {
                       $username = $value['username']; 
                    }
                    else 
                    {
                       $username = $value['fname'];  
                    }
            ?>
                    <tr>
                        <td><?php echo $user_type?></td>
                        <td><?php echo 'Lubes';?></td>
                        <td><?php echo date('Y-m-d',  strtotime($value['listing_date']));?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo get_make_model_name($value['make'])?></td>
                        <td>
                            <a target="_blank" href="<?php echo BASEURL?>admin/admin_panel/edit_parts_by_member_login/3/<?php echo $value['listing_id']?>/<?php echo $value['type_listing_id']?>" >Edit</a> | 
                            <a href="javascript:void(0);" onclick="delete_parts_list(<?php echo $value['listing_id']?>); return false;">Delete</a>
                        </td>
                  </tr>                
            <?php
                }
            }
            
            if($userListing['parts_tyre'])
            {
                foreach($userListing['parts_tyre'] as $value)
                {
                    if($value['user_type'] == 2)
                    {
                        $user_type = 'Private';
                    }
                    else if($value['user_type'] == 3)
                    {
                        $user_type = 'AU Dealer';
                    }
                    else if($value['user_type'] == 4)
                    {
                        $user_type = 'Int. Dealer';
                    }
                    
                    if($value['username'])
                    {
                       $username = $value['username']; 
                    }
                    else 
                    {
                       $username = $value['fname'];  
                    }
            ?>
                    <tr>
                        <td><?php echo $user_type?></td>
                        <td><?php echo 'Tyre';?></td>
                        <td><?php echo date('Y-m-d',  strtotime($value['listing_date']));?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo get_make_model_name($value['make'])?></td>
                        <td>
                            <a target="_blank" href="<?php echo BASEURL?>admin/admin_panel/edit_parts_by_member_login/4/<?php echo $value['listing_id']?>/<?php echo $value['type_listing_id']?>" >Edit</a> | 
                            <a href="javascript:void(0);" onclick="delete_parts_list(<?php echo $value['listing_id']?>); return false;">Delete</a>
                        </td>
                  </tr>                
            <?php
                }
            }
            
            if($userListing['parts_manuals'])
            {
                foreach($userListing['parts_manuals'] as $value)
                {
                    if($value['user_type'] == 2)
                    {
                        $user_type = 'Private';
                    }
                    else if($value['user_type'] == 3)
                    {
                        $user_type = 'AU Dealer';
                    }
                    else if($value['user_type'] == 4)
                    {
                        $user_type = 'Int. Dealer';
                    }
                    
                    if($value['username'])
                    {
                       $username = $value['username']; 
                    }
                    else 
                    {
                       $username = $value['fname'];  
                    }
            ?>
                    <tr>
                        <td><?php echo $user_type?></td>
                        <td><?php echo 'Workshop & Parts Manuals';?></td>
                        <td><?php echo date('Y-m-d',  strtotime($value['listing_date']));?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo get_make_model_name($value['make'])?></td>
                        <td>
                            <a target="_blank" href="<?php echo BASEURL?>admin/admin_panel/edit_parts_by_member_login/5/<?php echo $value['listing_id']?>/<?php echo $value['type_listing_id']?>" >Edit</a> | 
                            <a href="javascript:void(0);" onclick="delete_parts_list(<?php echo $value['listing_id']?>); return false;">Delete</a>
                        </td>
                  </tr>                
            <?php
                }
            }
            
            if($userListing['machine_attachments'])
            {
                foreach($userListing['machine_attachments'] as $value)
                {
                    if($value['user_type'] == 2)
                    {
                        $user_type = 'Private';
                    }
                    else if($value['user_type'] == 3)
                    {
                        $user_type = 'AU Dealer';
                    }
                    else if($value['user_type'] == 4)
                    {
                        $user_type = 'Int. Dealer';
                    }
                    
                    if($value['username'])
                    {
                       $username = $value['username']; 
                    }
                    else 
                    {
                       $username = $value['fname'];  
                    }
            ?>
                    <tr>
                        <td><?php echo $user_type?></td>
                        <td><?php echo 'Machine Attachments';?></td>
                        <td><?php echo date('Y-m-d',  strtotime($value['listing_date']));?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo get_make_model_name($value['make'])?></td>
                        <td>
                            <a target="_blank" href="<?php echo BASEURL?>admin/admin_panel/edit_parts_by_member_login/6/<?php echo $value['listing_id']?>/<?php echo $value['type_listing_id']?>" >Edit</a> | 
                            <a href="javascript:void(0);" onclick="delete_parts_list(<?php echo $value['listing_id']?>); return false;">Delete</a>
                        </td>
                  </tr>                
            <?php
                }
            }
            
            
            if($userListing['workshop_tools'])
            {
                foreach($userListing['workshop_tools'] as $value)
                {
                    if($value['user_type'] == 2)
                    {
                        $user_type = 'Private';
                    }
                    else if($value['user_type'] == 3)
                    {
                        $user_type = 'AU Dealer';
                    }
                    else if($value['user_type'] == 4)
                    {
                        $user_type = 'Int. Dealer';
                    }
                    
                    if($value['username'])
                    {
                       $username = $value['username']; 
                    }
                    else 
                    {
                       $username = $value['fname'];  
                    }
            ?>
                    <tr>
                        <td><?php echo $user_type?></td>
                        <td><?php echo 'Workshop Tools';?></td>
                        <td><?php echo date('Y-m-d',  strtotime($value['listing_date']));?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo get_make_model_name($value['make'])?></td>
                        <td>
                            <a target="_blank" href="<?php echo BASEURL?>admin/admin_panel/edit_parts_by_member_login/7/<?php echo $value['listing_id']?>/<?php echo $value['type_listing_id']?>" >Edit</a> | 
                            <a href="javascript:void(0);" onclick="delete_parts_list(<?php echo $value['listing_id']?>); return false;">Delete</a>
                        </td>
                  </tr>                
            <?php
                }
            }
        }
        else 
        {
        ?>
         <tr>
             <td colspan="6" style="text-align:center;">No record found</td>            
          </tr>   
        <?php
        }
         ?>
        </tbody>
      </table>
    </div>
  </div>
</div>