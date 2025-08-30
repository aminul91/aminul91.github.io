<style>
    body{ overflow-y:scroll; }
</style>
<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
          <li><a href="javascript:void(0);" onclick="toggle_package_listing(); return false;"><i class="fa fa-dashboard"></i> Create new package</a></li>
      </ol>
      <div class="v_gap"></div>
      <span id="package_listing_box">
      <form id="saveCat" name="saveCat" method="post" action="">
        <table class="save_box">
            <tr>
                <td>
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Package Title</label>
                      <input class="form-control" id="title" name="title" />
                    </div>
                    <div class="clear"></div>
                    
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Ads Limit</label>
                      <input class="form-control" id="listing_limit" name="listing_limit" />
                    </div>
                    <div class="clear"></div> 
                    
                    
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Photo's Per Ad</label>
                      <input class="form-control" id="picture_limit" name="picture_limit" />
                    </div>
                    <div class="clear"></div>                    
                    
                    
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Expiration time</label>
                      <input class="form-control" id="exp_volume" name="exp_volume" />
                    </div>
                    <div class="clear"></div>
                    
                    
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Purchase credit</label>
                      <input class="form-control" id="cerdit" name="cerdit" />
                    </div>
                    <div class="clear"></div>
                    
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Highlighted Ads</label>
                      <input class="form-control" id="hilighted_ads_limit" name="hilighted_ads_limit" />
                    </div>
                    <div class="clear"></div>
                    
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Package status</label>
                      <select id="status" name="status">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                      </select>
                    </div>
                    <div class="clear"></div>
                    
                    <button type="button" class="btn btn-default" onclick="package_submitForm(allFrm.saveCat); return false;">Save</button>
                </td>
            </tr>
        </table>
      </form>
      </span>
      <div class="clear"></div>
     <div class="v_gap"></div>
     <div class="clear"></div>
      <?php
      if($message)
      {
      ?>
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
          Category has been saved successfully
        </div>
      <?php
      }
      ?>
      
    </div>
</div>
<div class="clear"></div>
<div class="v_gap"></div>
<div class="clear"></div>

<div class="row">
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped tablesorter">
        <thead>
          <tr>
            <th>Title <!--i class="fa fa-sort"></i--></th>
            <th>Publish Date <!--i class="fa fa-sort"></i--></th>
            <th>Price <!--i class="fa fa-sort"></i--></th>
            <th>Ads Expire <!--i class="fa fa-sort"></i--></th>
            <th>Status <!--i class="fa fa-sort"></i--></th>
            <th>Action <!--i class="fa fa-sort"></i--></th>
          </tr>
        </thead>
        <tbody>
            <?php 
            if($package_list)
            {
                foreach($package_list as $pList)
                {
            ?>
            <tr>                
                <td><?php echo $pList['title'];?></td>
                <td><?php echo date('Y-m-d',  strtotime($pList['created_on']));?></td>
                <td><?php echo $pList['cerdit']?></td>
                <td><?php echo $pList['exp_volume']?> Days</td>
                <td><?php echo $pList['package_status']?></td>
                <td>Edit | <a href="javascript:void(0);" onclick="delete_package(<?php echo $pList['package_id']?>); return false;">Delete</a>
                    <select onchange="set_package_status(this.value,<?php echo $pList['package_id']?>);">
                        <option value="">--select--</option>
                        <option value="0" <?php if($pList['status'] == 0){ echo 'selected="selected"'; } ?>>Inactive</option>
                        <option value="1" <?php if($pList['status'] == 1){ echo 'selected="selected"'; } ?>>Active</option>
                    </select> |
                    
                    <select onchange="set_default_status(this.value,<?php echo $pList['package_id']?>);">
                        <option value="0" <?php if($pList['is_default'] == 0){ echo 'selected="selected"'; } ?>>Not Default</option>
                        <option value="1" <?php if($pList['is_default'] == 1){ echo 'selected="selected"'; } ?>>Default</option>
                    </select>
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>