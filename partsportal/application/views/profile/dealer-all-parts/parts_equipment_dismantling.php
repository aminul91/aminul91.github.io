<?php
if($userListing['equipment_dismantling'])
{
    foreach($userListing['equipment_dismantling'] as $value)
    {
?>
            <div class="main_result">
        	<div class="search_img_div">
                    <div class="search_img2">
                        <?php
                        $parts_list_id = 2;
                        include 'listing-image.php';
                        ?> 
                    </div>
                </div>
                <div class="search_details">                    
                    <ul class="search_item search_item1001">
                        <li>Equ. Dismantling</li>
                        <li><?php echo get_make_model_name($value['make']);?></li>
                        <li><?php echo get_make_model_name($value['model']);?></li>
                        <li>Part# <?php echo $value['part_number'];?></li>
                        <li class="item_font">&nbsp;</li>
                    </ul>
                    <ul class="search_item search_item1001">
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li><?php echo get_location_name($value['location']);?></li>
                        <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id(2,$value['id'])?></li>
                    </ul>                                    
                    <?php include 'listing-button.php';?>  
                </div>
            </div>    
<?php
    }
}
?>