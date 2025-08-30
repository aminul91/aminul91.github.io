<script language="javascript" src="<?php echo BASEURL;?>scripts/slimbox/slimbox2.js"></script>
<link type="text/css" href="<?php echo BASEURL;?>scripts/slimbox/slimbox2.css" rel="stylesheet" />
<div class="vist_profile">
    <div class="main_tab">
    	<div class="span_row">
        	<div class="parts_details_wrap">
            	<div class="big_main_img">
                    <?php
                    if($partsImg[0]['image'])
                    {
                    ?>
                	<img src="<?php echo BASEURL; ?>images/listing_image/<?php echo $partsImg[0]['image'];?>" alt="" />
                    <?php
                    }
                    ?>
                </div>
                <div class="thumbols_img">
                    <?php
                    if($partsImg)
                    {
                        foreach($partsImg as $pImg)
                        {
                    ?>
                        <a rel="lightbox" href="<?php echo BASEURL;?>images/listing_image/<?php echo $pImg['image']?>">
                            <img src="<?php echo BASEURL; ?>images/listing_image/thumb/<?php echo $pImg['image']?>" alt="" />                    
                        </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="features_list">
            	<h5 class="features_list_heading">Parts Info</h5>
                <?php
                if($partsInfo)
                {
                    if($partsInfo['parts_list_id'] == 1)
                    {
                        include 'detail-part-info/parts_equipment_parts.php';
                    }
                    else if($partsInfo['parts_list_id'] == 2)
                    {
                        include 'detail-part-info/parts_equipment_dismantling.php';
                    }
                    else if($partsInfo['parts_list_id'] == 3)
                    {
                        include 'detail-part-info/parts_lubes.php';
                    }
                    else if($partsInfo['parts_list_id'] == 4)
                    {
                        include 'detail-part-info/parts_tyre.php';
                    }
                    else if($partsInfo['parts_list_id'] == 5)
                    {
                        include 'detail-part-info/parts_workshop_parts_manuals.php';
                    }
                    else if($partsInfo['parts_list_id'] == 6)
                    {
                        include 'detail-part-info/parts_machine_attachments.php';
                    }
                    else if($partsInfo['parts_list_id'] == 7)
                    {
                        include 'detail-part-info/parts_workshop_tools.php';
                    }
                }
                ?>                                
            </div> 
            
            <?php
            if($partsInfo['description'])
            {
            ?>
            <div class="features_list">
            	<h5 class="features_list_heading">Description</h5>
                <div class="list_of_features">
                	<p><?php echo $partsInfo['description'];?></p>
                </div>                
            </div> 
            <?php
            }
            ?> 
        </div>
    </div>
    <div class="col-3"> 
        <?php
        $adsList = get_ads_list();
        if($adsList)
        {
            foreach($adsList as $aList)
            {
        ?>
            <div class="ads_ber">
                <a href="<?php echo $aList['image'];?>"><img src="<?php echo BASEURL?>images/ads/thumb/<?php echo $aList['image'];?>" alt="" /></a>
            </div>
        <?php
            }
        }
        ?>
    </div>
</div>
<script>

</script>