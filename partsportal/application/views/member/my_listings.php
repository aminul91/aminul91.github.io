<div class="contentBox">
    <span class="titleBox">My Parts [<a href="<?php echo BASEURL?>profile">Back</a>]</span>
    <div class="clear"></div>
    <div class="v_gap"></div>
    <div class="clear"></div>
    <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
        <colgroup>
            <col class="con1" />
            <col class="con0" />
            <col class="con1" />
            <col class="con0" />
            <col class="con1" />
            <col class="con0" />
        </colgroup>
        <thead>
            <tr>            
                <th class="head1">Image</th>
                <th class="head0">Listing Type</th>
                <th class="head1">Created Date</th>
                <th class="head0">Status</th>
                <th class="head0">Is sold</th>
                <th class="head1">Action</th>
            </tr>
        </thead>
        <tbody> 
         <?php
         foreach ($my_listing as $value)
         {
            if($value['status']==0){$status = 'Deactive';}
            else{$status = 'Active';}
        ?>
            <tr>
                <td>
                    <img src="<?php echo BASEURL?>images/listing_image/thumb/<?php echo get_single_listingImage($value['parts_list_id'],$value['type_listing_id'])?>">
                </td>
                <td><?php echo get_parts_name($value['parts_list_id']);?></td>
                <td><?php echo date('d M Y', strtotime($value['created_on']));?></td>
                <td><?php echo $status;?></td>
                <td><?php echo ($value['is_sold'] == 1) ? 'Yes' : 'No';?></td>
                <td>
                    <a href="javascript:void(0)">VIEW</a> | 
                    <a href="<?php echo BASEURL;?>edit_<?php echo go_edit_page($value['parts_list_id']);?>/<?php echo $value['listing_id'];?>/<?php echo $value['type_listing_id'];?>">EDIT</a> |
                    <a href="javascript:void(0)" onclick="delete_listing('<?php echo $value['listing_id'];?>','<?php echo $value['type_listing_id'];?>');">DELETE</a>
                    
                </td>
            </tr>   
        <?php
         }
        ?>   
        </tbody>
    </table>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="v_gap"></div>
<div class="clear"></div>





<script>
 function delete_listing(listingid,type_listingid)
 {
     var con = "Are You Sure Want Delete This.";
     confirm(con)
     {
          window.location.href="<?php echo BASEURL?>delete_listing/"+listingid+"/"+type_listingid; 
     }
 }
 
 
</script>