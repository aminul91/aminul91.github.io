<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Edit your category</a></li>
        </ol>
        <div class="v_gap"></div>
        <form id="saveCat" name="saveCat" method="post" action="">
          <table class="save_box">
              <tr>
                  <td>
                      <div class="form-group">
                          <label>Parts/Equipments</label>
                          <select class="form-control" id="parts_list_id" name="parts_list_id">
                              <option value="">--select--</option>
                              <?php
                              if ($parts)
                              {
                                  foreach ($parts as $pList)
                                  {
                              ?>
                                  <option <?php if ($category['parts_list_id'] == $pList['parts_list_id']) echo 'selected'; ?> value="<?php echo $pList['parts_list_id'] ?>"><?php echo $pList['parts_name'] ?></option>
                              <?php
                                  }
                              }
                              ?>
                        </select>
                    </div>
                    <div class="clear"></div>


                     <?php
                      if ($category['parent_category_id'] != 0)
                        
                        {
                      ?>
                          <div class = "form-group">
                             <label>Parent Category</label>
                             <select class = "form-control" id = "parent_category_id" name = "parent_category_id">
                             <option value = "0">--select--</option>
                                 <?php
                                  if ($parent_category_list)
                                  {
                                     foreach ($parent_category_list as $cList)
                                      {
                                  ?>
                                  
                                   <option <?php if($category['parent_category_id'] == $cList['category_id']) echo 'selected'; ?> value="<?php echo $cList['category_id'] ?>"> <?php echo $cList['name'] ?></option>
                                   
                                   <?php
                                      }
                                  }
                                   ?>
                                </select>
                            </div>

                        <?php 
                        }
                        ?>

                        <div class="clear"></div>
                      <div class="form-group">
                          <label>Category</label>
                          <input class="form-control" id="name" name="name" value="<?php echo $category['name'];?>" />
                      </div>
                     <div class="clear"></div>
                     <button type="button" class="btn btn-default" onclick="category_submitForm(allFrm.saveCat); return false;">Update</button>
                 </td>
              </tr>
          </table>
        </form>
        <div class="v_gap"></div>
       </div>
</div>