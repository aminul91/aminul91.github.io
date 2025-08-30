<style>
.form-control{ width:97% !important; }
</style>
<script type="text/javascript" src="<?php echo BASEURL ?>scripts/datepicker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>scripts/datepicker/jquery.timepicker.css" />
<script type="text/javascript" src="<?php echo BASEURL ?>scripts/datepicker/lib/base.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>scripts/datepicker/lib/base.css" />
<script src="<?php echo BASEURL ?>scripts/datepicker/lib/datepair.js"></script>

<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Search seller</a></li>
      </ol>
      <div class="v_gap"></div>
      <form id="saveCat" name="saveCat" method="post" action="<?php echo BASEURL?>search_member">
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


<div class="row">
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped tablesorter">
        <thead>
          <tr>
            <th>Username <!--i class="fa fa-sort"></i--></th>
            <th>Email <!--i class="fa fa-sort"></i--></th>
            <th>Join Date <!--i class="fa fa-sort"></i--></th>
            <th>Dealer Type <!--i class="fa fa-sort"></i--></th>
            <th>Credit <!--i class="fa fa-sort"></i--></th>
            <th>Status <!--i class="fa fa-sort"></i--></th>
            <th>Action <!--i class="fa fa-sort"--></i></th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($seller_list)
        {
            foreach($seller_list as $cList)
            {                
                if($cList['user_type'] == 2)
                {
                    $dealer_type = 'Private';
                    $username = 'Undefined';
                }
                else if($cList['user_type'] == 3)
                {
                    $dealer_type = 'Australian';
                    $username = $cList['username'];
                }
                else if($cList['user_type'] == 4)
                {
                    $dealer_type = 'international';
                    $username = $cList['username'];
                }
         ?>
          <tr>
            <td><?php echo $username?></td>
            <td><?php echo $cList['email'];?></td>
            <td><?php echo date('Y-m-d',  strtotime($cList['created_on']));?></td>
            <td><?php echo $dealer_type.' Dealer';?></td>
            <td><?php echo $cList['credit']?></td>
            <td><?php echo ($cList['status'] == 1) ? 'Active' : 'Inactive';?></td>
            <td>
                <a href="javascript:void(0);" onclick="msg(); return false;">Edit</a> | 
                <a href="javascript:void(0);" onclick="is_delete_member(<?php echo $cList['member_id']?>); return false;">Delete</a> | 
                <a href="javascript:void(0);" onclick="set_member_status(<?php echo ($cList['status'] == 1) ? 0 : 1;?>,<?php echo $cList['member_id']?>); return false;"><?php echo ($cList['status'] == 1) ? 'Inactive' : 'Active';?></a> |
                <a target="_blank" href="<?php echo BASEURL?>admin/add_credit/<?php echo $cList['member_id']?>" >Add Credit</a>
            </td>
          </tr>          
        <?php
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