<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Create new category</a></li>
      </ol>
      <div class="v_gap"></div>
      <form id="saveCat" name="saveCat" method="post" action="">
        <table class="save_box">
            <tr>
                <td>
                    <div class="form-group">
                      <label>Parts/Equipments</label>
                      <select class="form-control" id="parts_list_id" name="parts_list_id" onchange="get_parent_category_list(this.value);">
                          <option value="">--select--</option>
                        <?php
                        if($parts)
                        {
                            foreach($parts as $pList)
                            {
                        ?>
                                <option value="<?php echo $pList['parts_list_id']?>"><?php echo $pList['parts_name']?></option>
                        <?php                                                        
                            }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="clear"></div>
                    
                    
                    
                    <div class="form-group">
                      <label>Parent Category</label>
                      <select class="form-control" id="parent_category_id" name="parent_category_id">
                          <option value="0">--select--</option>                        
                      </select>
                    </div>
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Category</label>
                      <input class="form-control" id="name" name="name" />
                    </div>
                    <div class="clear"></div>
                    <button type="button" class="btn btn-default" onclick="category_submitForm(allFrm.saveCat); return false;">Save</button>
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


<div class="row">
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped tablesorter">
        <thead>
          <tr>
            <th>Name <!--i class="fa fa-sort"></i--></th>
            <th>Status <!--i class="fa fa-sort"></i--></th>
            <th>Action <!--i class="fa fa-sort"--></i></th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($parts)
        {
            foreach($parts as $pList)
            {
                $parts_list_id = $pList['parts_list_id'];                
                $sql = "SELECT * FROM parts_category WHERE parts_list_id = $parts_list_id AND parent_category_id = 0 ORDER BY category_id ASC";
                $query = $this->db->query($sql);
                $result = $query->result_array();
        
                if($result)
                {
                    foreach($result as $cList)
                    {
                        ($cList['status'] == 1) ? 'Active' : 'Inactive';
                 ?>
                  <tr>
                    <td><?php echo $pList['parts_name'].'=>'.$cList['name']?></td>
                    <td><?php echo ($cList['status'] == 1) ? 'Active' : 'Inactive';?></td>
                    <td> <a href="<?php echo BASEURL?>admin/category_edit/<?php echo $cList['category_id']?>">Edit </a> | <a href="javascript:void(0);" onclick="is_delete_category(<?php echo $cList['category_id']?>); return false;">Delete</a> | <a href="javascript:void(0);" onclick="set_category_status(<?php echo ($cList['status'] == 1) ? 0 : 1;?>,<?php echo $cList['category_id']?>); return false;"><?php echo ($cList['status'] == 1) ? 'Inactive' : 'Active';?></a></td>
                  </tr>

                        <?php
                        $sql = "SELECT * FROM ".DBEXT."category WHERE parent_category_id = {$cList['category_id']}  AND status != 2 ORDER BY name ASC ";
                        $query = $this->db->query($sql);
                        $res = $query->result_array();
                        if($res)
                        {
                           foreach($res as $r)
                           {
                        ?>          
                            <tr>
                              <td><?php echo $pList['parts_name'].'=>'.$cList['name']?>-><?php echo $r['name']?></td>
                              <td><?php echo ($r['status'] == 1) ? 'Active' : 'Inactive';?></td>
                              <td> <a href="<?php echo BASEURL?>admin/category_edit/<?php echo $r['category_id']?>">Edit</a> | <a href="javascript:void(0);" onclick="is_delete_category(<?php echo $r['category_id']?>); return false;">Delete</a> | <a href="javascript:void(0);" onclick="set_category_status(<?php echo ($r['status'] == 1) ? 0 : 1;?>,<?php echo $r['category_id']?>); return false;"><?php echo ($r['status'] == 1) ? 'Inactive' : 'Active';?></a></td>
                            </tr>

                        <?php
                           }
                        }
                    }
                } 
            }
        }
         ?>
        </tbody>
      </table>
    </div>
  </div>
</div>