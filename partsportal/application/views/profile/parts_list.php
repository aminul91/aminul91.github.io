<link href="<?php echo BASEURL?>styles/css3-buttons.css" rel="stylesheet" type="text/css" />
<style>
    .search_item li
    {
        text-indent: 0px;
        padding-left: 4px;
        font-size: 13px;
        text-transform: none;
    }
    .search_item1001 li
    {
        width: 19% !important;
    }
</style>
<div class="vist_profile">
    <div class="side_ber">
        <?php include 'left-menu.php'; ?>
    </div>
    <div class="main_tab">
    	<div class="span_row">
            
            <div class="header_result">
                <h5><?php echo $username?>'s parts</h5>
            </div>
            
            <?php 
                
                #dumpVar($userListing['equipment_parts']);
                #dumpVar($userListing['equipment_dismantling']);
            
                include 'dealer-all-parts/parts_equipment_parts.php';                         
                include 'dealer-all-parts/parts_equipment_dismantling.php';                         
                include 'dealer-all-parts/parts_lubes.php';                         
                include 'dealer-all-parts/parts_tyre.php';                         
                include 'dealer-all-parts/parts_workshop_parts_manuals.php';                         
                include 'dealer-all-parts/parts_machine_attachments.php';                         
                include 'dealer-all-parts/parts_workshop_tools.php';                         
             ?>
            
        </div>
    </div>
</div>