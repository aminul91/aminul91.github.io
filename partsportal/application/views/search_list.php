<div class="result_fild">
    <div class="header_result">
    	<h5><?php if(isset($page_title)) echo $page_title; ?></h5>
        <div class="pagienation">
          <?php echo $pagination; ?>	
        </div>
    </div>
    
    <?php
    if(isset($parts_list_id))
    {
     if($listing)
     {
        foreach ($listing as $value)
        {
            if(!is_active_package($parts_list_id,$value['id']))
            {
               continue; 
            }
    ?>
    <div class="main_result">
    	<div class="search_img_div">
            <div class="search_img">
                <?php include 'search_part/image_block.php'; ?>          
            </div>
        </div>
        <div class="search_details">
             <ul class="search_item">                
                <?
                if($parts_list_id == 1)
                {
                ?>
                    <li><?php echo get_make_model_name($value['make']);?></li>
                    <li><?php echo get_make_model_name($value['model']);?></li>
                    <li><?php echo $value['part_number'];?></li>
                    <li class="item_font">$<?php echo $value['price'];?>*</li>
                <?
                }
                else if($parts_list_id == 2)
                {
                ?>
                    <li><?php echo get_make_model_name($value['make']);?></li>
                    <li><?php echo get_make_model_name($value['model']);?></li>
                    <li>Part# <?php echo $value['part_number'];?></li>
                <?php
                }
                else if($parts_list_id == 3)
                {
                ?>
                    <li><?php echo $value['type'];?></li>
                    <li><?php echo $value['grade'];?></li>
                    <li>$<?php echo $value['price'];?></li>
                <?php
                }
                else if($parts_list_id == 4)
                {
                ?>
                    <li><?php echo $value['tyre_size'];?></li>
                    <li><?php echo $value['condition'];?></li>
                    <li>$<?php echo $value['price'];?></li>
                <?php
                }
                else if($parts_list_id == 5)
                {
                ?>
                    <li><?php echo get_make_model_name($value['make']);?></li>
                    <li><?php echo get_make_model_name($value['model']);?></li>
                    <li>$<?php echo $value['price'];?></li>
                <?php
                }
                else if($parts_list_id == 6)
                {
                ?>
                    <li><?php echo get_parts_category_by_id($value['sub_category']);?></li>
                    <li>Mac. size: <?php echo $value['suit_machine_size'];?></li>
                    <li>$<?php echo $value['price'];?></li>
                <?php
                }
                else if($parts_list_id == 7)
                {
                ?>
                    <li><?php echo get_parts_category_by_id($value['category']);?></li>
                    <li><?php echo get_parts_category_by_id($value['sub_category']);?></li>
                    <li>$<?php echo $value['price'];?></li>
                <?php
                }
                ?>
                
             </ul>
             <ul class="search_item">            	
                <?php
                if($parts_list_id == 1)
                {
                ?>
                    <li>Com. Cat: <?php echo $value['componant_category'];?></li>
                    <li><?php echo get_parts_category_by_id($value['sub_category']);?></li>
                    <li><?php echo get_location_name($value['location']);?></li>
                    <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id'])?></li>
                <?
                }
                else if($parts_list_id == 2)
                {
                ?>
                    <li><?php echo get_location_name($value['location']);?></li>
                    <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id'])?></li>
                <?php
                }
                else if($parts_list_id == 3)
                {
                ?>
                    <li><?php echo get_location_name($value['location']);?></li>
                    <li><?php echo $value['quantity'];?></li>
                    <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id'])?></li>
                <?php
                }
                else if($parts_list_id == 4)
                {
                ?>
                    <li><?php echo get_location_name($value['location']);?></li>
                    <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id'])?></li>
                <?php
                }
                else if($parts_list_id == 5)
                {
                ?>
                    <li><?php echo $value['type'];?></li>
                    <li><?php echo get_location_name($value['location']);?></li>
                    <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id'])?></li>
                <?php
                }
                else if($parts_list_id == 6)
                {
                ?>
                    <li><?php echo $value['condition'];?></li>
                    <li><?php echo get_location_name($value['location']);?></li>
                    <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id'])?></li>
                <?php
                }
                else if($parts_list_id == 7)
                {
                ?>
                    <li><?php echo $value['condition'];?></li>
                    <li><?php echo get_location_name($value['location']);?></li>
                    <li>Sold: <?php echo is_sold_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id'])?></li>
                <?php
                }
                ?>
            </ul>
            <?php include 'search_part/dealer_button.php'; ?>  
        </div>
    </div>
  <?php
       }
     }
     else
     {
            echo "<h2>No Listing Found!</h2>";
     }
 }
?>
</div>