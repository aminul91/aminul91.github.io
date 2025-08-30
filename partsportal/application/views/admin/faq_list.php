<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Newsletter</a></li>
      </ol>
      <div class="v_gap"></div>
      <form id="saveCat" name="saveCat" method="post" action="">
        <table class="save_box">
            <tr>
                <td>
                    <div class="form-group">
                      <label>Seller</label>
                      <select class="form-control" id="user_type" name="user_type">
                          <option value="">--select--</option>                            
                          <option value="2">Private seller</option>                            
                          <option value="3">Australian Dealer</option>                            
                          <option value="4">International Dealer</option>                            
                          <option value="5">All Dealer</option>                            
                      </select>
                    </div>
                    <div class="clear"></div>

                    <div class="form-group">
                      <label>Subject</label>
                      <input class="form-control" id="subject" name="subject" />
                    </div>
                    <div class="clear"></div>
                    
                    
                    <div class="form-group">
                      <label>Message</label>
                      <textarea id="message" name="message" style="width:800px;height:100px;resize:none;" ></textarea>
                    </div>
                    <div class="clear"></div>
                    
                    <button type="button" class="btn btn-default" onclick="newsletter_submitForm(allFrm.saveCat); return false;">Save</button>
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