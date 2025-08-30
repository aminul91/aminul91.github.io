<?php
if($userListing['equipment_parts'])
{
    foreach($userListing['equipment_parts'] as $value)
    {
?>
            <div class="main_result">
        	<div class="search_img_div">
                    <div class="search_img2">
                        <?php
                        $parts_list_id = 1;
                        include 'listing-image.php';
                        ?>                        
                    </div>
                </div>
                <div class="search_details">                    
                    <ul class="search_item search_item1001">
                        <li>Equ. Parts</li>
                        <li><?php echo get_make_model_name($value['make']);?></li>
                        <li><?php echo get_make_model_name($value['model']);?></li>
                        <li>Part# <?php echo $value['part_number'];?></li>
                        <li class="item_font">$<?php echo $value['price'];?>*</li>
                    </ul>
                    <ul class="search_item search_item1001">                        
                        <li><?php echo $value['componant_category'];?></li>
                        <li><?php echo get_parts_category_by_id($value['sub_category']);?></li>
                        <li><?php echo get_location_name($value['location']);?></li>
                        <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id(1,$value['id'])?></li>
                    </ul>                                        
                    <?php include 'listing-button.php';?>  
                </div>
            </div>    
<?php
    }
}
?>