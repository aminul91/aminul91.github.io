<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Create new Model</a></li>
      </ol>
      <div class="v_gap"></div>
      <form id="saveCat" name="saveCat" method="post" action="">
        <table class="save_box">
            <tr>
                <td>
                    <div class="form-group">
                      <label>Parts/Equipments</label>
                      <select class="form-control" id="parts_list_id" name="parts_list_id" onchange="get_parent_model_list(this.value);">
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
                      <label>Make</label>
                      <select class="form-control" id="make_model_id" name="make_model_id">
                          <option value="0">--select--</option>                        
                      </select>
                    </div>
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Make/Model</label>
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
            <th>Name </th>
            
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($parts)
        {
            foreach($parts as $pList)
            {
                $parts_list_id = $pList['parts_list_id'];                
                $sql = "SELECT * FROM parts_make_model WHERE parts_list_id = $parts_list_id AND parent_id = 0 ORDER BY name ASC";               
                $query = $this->db->query($sql);
                $result = $query->result_array();
                
                if($result)
                {
                  foreach($result as $cList)
                  {                        
                 ?>
                  <tr>
                    <td><?php echo $pList['parts_name'].'=>'.$cList['name']?></td>                   
                    <td> <a href="<?php echo BASEURL?>admin/edit_make_model/<?php echo $cList['make_model_id']?>">Edit </a> | <a href="javascript:void(0);" onclick="delete_make_model(<?php echo $cList['make_model_id']?>); return false;">Delete</a> </td>
                  </tr>
                        <?php
                        $sql = "SELECT * FROM ".DBEXT."make_model WHERE parent_id = {$cList['make_model_id']}  AND status = 1 ORDER BY name ASC ";
                        $query = $this->db->query($sql);
                        $res = $query->result_array();
                        if($res)
                        {
                           foreach($res as $r)
                           {
                        ?>          
                            <tr>
                              <td><?php echo $pList['parts_name'].'=>'.$cList['name']?>-><?php echo $r['name']?></td>                             
                              <td> <a href="<?php echo BASEURL?>admin/edit_make_model/<?php echo $r['make_model_id']?>">Edit</a> | <a href="javascript:void(0);" onclick="delete_make_model(<?php echo $r['make_model_id']?>); return false;">Delete</a> </td>
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

<script>
function get_parent_model_list(parts_list_id)
{
    $.ajax({
        type: "POST",
        url: baseUrl+'admin/admin_panel/ajax_parent_model_list',
        data:
        {
            'parts_list_id':parts_list_id
        }, 
        success: function(html_data)
        {
            if (html_data != '')
            {
                $('#make_model_id').html(html_data);
            }
        }
        });        
}

function delete_make_model(make_model_id)
{
   var con = confirm('Are you sure to delete this record?'); 
   if(con)
   {
       window.location.href = baseUrl+'admin/admin_panel/delete_make_model/'+make_model_id;
   }
}
</script>