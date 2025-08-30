<?php
if($userListing['parts_tyre'])
{
    foreach($userListing['parts_tyre'] as $value)
    {
?>
            <div class="main_result">
        	<div class="search_img_div">
                    <div class="search_img2">
                        <?php
                        $parts_list_id = 4;
                        include 'listing-image.php';
                        ?> 
                    </div>
                </div>
                <div class="search_details">                    
                    <ul class="search_item search_item1001">
                        <li>Equ. Tyre</li>
                        <li>&nbsp;</li>
                        <li><?php echo $value['tyre_size'];?></li>
                        <li><?php echo $value['condition'];?></li>
                        <li>$<?php echo $value['price'];?></li>
                    </ul>
                    <ul class="search_item search_item1001">
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li><?php echo get_location_name($value['location']);?></li>
                        <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id'])?></li>
                    </ul>                                        
                    <?php include 'listing-button.php';?>  
                </div>
            </div>    
<?php
    }
}
?>