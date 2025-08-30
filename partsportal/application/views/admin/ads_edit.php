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
                      <input class="form-control" id="title" name="title" value="<?php if(isset($myProfile['title'])) echo $myProfile['title']; ?>" />
                    </div>
                    <div class="clear"></div>
                    
                    <div class="form-group">
                      <label>Anchor Url</label>
                      <input class="form-control" id="url" name="url" value="<?php if(isset($myProfile['url'])) echo $myProfile['url']; ?>" />
                    </div>
                    <div class="clear"></div>
                    
                    
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" id="status" name="status">                           
                          <option value="1" <?php if($myProfile['status'] == 1) echo "selected";?>>Active</option>                            
                          <option value="0" <?php if($myProfile['status'] == 0) echo "selected";?>>Inactive</option>                                                      
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
                            <div class="image_content_area">
                            <?php if(isset($myProfile['image']) && $myProfile['image'] !=""){?>
                                <input type="hidden" id="image"  name="image" value="<?php echo $myProfile['image'];?>"/>                                    
                                <img src ="<?php echo BASEURL.'images/ads/thumb/'.$myProfile['image'];?>" width="50" >
                              <?php }?>
                            </div>
                             
                            <div class='clear'></div>
                            <div class='v_gap'></div> 
                        </div>
                    </div>
                    <div class="clear"></div>
                    
                    <button type="button" class="btn btn-default" onclick="submitAdsForm(allFrm.saveAds); return false;">Update</button>
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