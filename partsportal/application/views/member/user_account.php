<div class="contentBox">
    <span class="titleBox">Select equipment type [<a href="<?php echo BASEURL?>profile">Back</a>]</span>
    <div class="clear"></div>
    <div class="v_gap"></div>
    <div class="v_gap"></div>
    <div class="clear"></div>
    <div class="navigation_box">
            <select id="listing_type">
                <option value="">Select</option>
                <?php
                $all_parts_list = get_all_parts_list();
                foreach($all_parts_list as $val)
                {
                ?>
                <option <?php if(isset($page_title) && $page_title==$val['table_name']){echo "selected ";}?> value="<?php echo $val['table_name']?>"><?php echo $val['parts_name']?></option>
                <?php
                }
                ?>
            </select>
            <button style="float:right;" type="button" class="buttom" onclick="go_add_listing();">Go</button>
    </div>
    <div class="clear"></div>
    <div class="v_gap"></div>
    <div class="v_gap"></div>
    <div class="v_gap"></div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="v_gap"></div>
<div class="clear"></div>

<script>
 function go_add_listing()
 {
     var listing_type = $('#listing_type').val();
     if(listing_type !='')
     {
        window.location.href="<?php echo BASEURL?>"+listing_type; 
     }
     else
     {
         alert("Please Select One listing."); 
     }
 }
</script>