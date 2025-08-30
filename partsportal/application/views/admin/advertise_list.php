<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> <?php echo $page_title;?></a></li>
      </ol>
      <div class="v_gap"></div>
      <form id="saveAds" name="saveAds" method="post" action="">
       <script> var fileindex = 1;</script>
       <?php require_once 'application/views/admin/ads_image_upload.php';  ?>
        <table class="save_box">
            <tr>
                <td>
                    

                    <div class="form-group">
                      <label>Title</label>
                      <input class="form-control" id="title" name="title" />
                    </div>
                    <div class="clear"></div>
                    
                    <div class="form-group">
                      <label>Anchor Url</label>
                      <input class="form-control" id="url" name="url" />
                    </div>
                    <div class="clear"></div>
                    
                    
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" id="status" name="status">                           
                          <option value="1">Active</option>                            
                          <option value="0">Inactive</option>                                                      
                      </select>
                    </div>
                    <div class="clear"></div>
                    
                    
                    <div class="form-group">
                        <label>Image</label>
                        <div class="clear"></div>
                        <div class="img_uArea">
                            <div class="img_uBtn">
                                  <div id="upload" ><span>Upload Ads</span></div><span id="status" style="display:none"> <img src="<?php echo BASEURL ?>scripts/upload_js/loading.gif" /> </span> 
                            </div>
                            <div class="clear"></div>  
                            <div class='v_gap'></div>
                            <div class="clear"></div>
                            <div class="image_content_area"></div>
                            <div class='clear'></div>
                            <div class='v_gap'></div> 
                        </div>
                    </div>
                    <div class="clear"></div>
                    
                    <button type="button" class="btn btn-default" onclick="submitAdsForm(allFrm.saveAds); return false;">Save</button>
                </td>
            </tr>
        </table>
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
<div class="clear"></div>
<div class="v_gap"></div>
<div class="clear"></div>

<?php
if($ads_list)
{    
?>
<div class="row">
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped tablesorter">
        <thead>
          <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($ads_list)
        {
            foreach($ads_list as $aList)
            {
         ?>
          <tr>
              <td> <img src="<?php echo BASEURL;?>images/ads/thumb/<?php echo $aList['image']?>" width="100" height="60" />  </td>
            <td><?php echo $aList['title']?></td>
            <td>
              <?php 
              if($aList['status'] == 1)
              {
                  echo 'Active';
              }
              else 
              {
                  echo 'Inactive';
              }
              ?>
            </td>
            <td>
                <a href="<?php echo BASEURL?>admin/ads_edit/<?php echo $aList['ads_id']?>">Edit</a> |
                <a href="javascript:void(0);" onclick="delete_ads('<?php echo $aList['ads_id']?>'); return false;">Delete</a>
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
<?php 
} 
?>