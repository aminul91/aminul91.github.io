<div class="contentBox">
    <span class="titleBox">Package List [<a href="<?php echo BASEURL?>profile">Back</a>]</span>
    <div class="clear"></div>
    <div class="v_gap"></div>
    <div class="clear"></div>
    <table cellpadding="0" cellspacing="0" border="0" class="stdtable">
        <colgroup>
            <col class="con0" />
            <col class="con1" />
            <col class="con0" />
            <col class="con1" />
        </colgroup>
        <thead>
            <tr>            
                <th class="head0">Package Title</th>
                <th class="head1">Ads Limit</th>
                <th class="head1">Photo's Per Ad</th>
                <th class="head0">Purchase credit</th>
                <th class="head1">Expiration time</th>
                <th class="head1">Highlighted Ads</th>
                <th class="head1">Update Package</th>
            </tr>
        </thead>
        <tbody> 
         <?php
         foreach ($package_list as $value)
         {
        ?>
            <tr>
                <td><?php echo $value['title'];?></td>
                <td><?php echo $value['listing_limit'];?></td>
                <td><?php echo $value['picture_limit'];?></td>
                <td><?php echo $value['cerdit'];?></td>
                <td><?php echo $value['exp_volume'];?> Day's</td>
                <td><?php echo $value['hilighted_ads_limit'];?></td>
                <td><input type="radio" name="packege" onclick="get_package('<?php echo $value['package_id'];?>')" <?php if(isset($my_package['package_id']) && $my_package['package_id'] == $value['package_id']) echo "checked";?>></td>
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
    function get_package(package_id)
    {
        var con = "Are you Sure want To Add This Package.";
        confirm(con)
        {
          $.ajax({
                type: "POST",
                url: baseUrl + 'profile/package_list',
                data:{'package_id':package_id},
                success: function(html_data)
                {
                   alert("You Successfully Updated your Package.");
                }
            });
        }  
    }
</script>