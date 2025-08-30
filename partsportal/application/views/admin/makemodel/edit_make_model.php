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
                            <select class="form-control" id="parts_list_id" name="parts_list_id" onchange="get_parent_model_list(this.value);">
                                <option value="">--select--</option>
                                <?php
                                if ($parts)
                                {
                                    foreach ($parts as $pList)
                                    {
                                        ?>
                                        <option <?php if ($model['parts_list_id'] == $pList['parts_list_id']) echo 'selected'; ?> value="<?php echo $pList['parts_list_id'] ?>"><?php echo $pList['parts_name'] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <?php 
                        if ($model['parent_id'] >0)
                        {
                            
                        ?>
                        <div class="form-group">
                            <label>Make</label>
                            <select class="form-control" id="make_model_id" name="make_model_id">
                                <option >--select--</option>  
                                <?php
                                if($parent_model_list)
                                {
                                     foreach ($parent_model_list as $mList)
                                    {
                                        ?>
                                        <option <?php if ($model['parent_id'] == $mList['make_model_id']) echo 'selected'; ?> value="<?php echo $mList['make_model_id'] ?>"><?php echo $mList['name'];?></option>
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
                            <label>Make/Model</label>
                            <input class="form-control" id="name" name="name" value="<?php echo $model['name'];?>"/>
                        </div>
                        <div class="clear"></div>
                        <button type="button" class="btn btn-default" onclick="category_submitForm(allFrm.saveCat); return false;">Update</button>
                    </td>
                </tr>
            </table>
        </form>
        <div class="v_gap"></div>
        <?php
            if ($message)
                {
                    ?>
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
                        <?php echo $message; ?>
                    </div>
                    <?php
                }
                ?>
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
</script>