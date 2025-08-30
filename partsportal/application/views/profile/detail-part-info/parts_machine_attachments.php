<div class="list_of_features">
    <span class="depfont">Equipment Type</span>
    <span class="lightfont"><?php echo get_parts_category_by_id($partsInfo['equipment_type']);?></span>
</div>
<div class="list_of_features">
    <span class="depfont">Sub Category</span>
    <span class="lightfont"><?php echo get_parts_category_by_id($partsInfo['sub_category']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Model</span>
    <span class="lightfont"><?php echo get_make_model_name($partsInfo['make']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Attachment Type</span>
    <span class="lightfont"><?php echo $partsInfo['attachment_type'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Suit machine size</span>
    <span class="lightfont"><?php echo $partsInfo['suit_machine_size'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Condition</span>
    <span class="lightfont"><?php echo $partsInfo['condition'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Location of Part</span>
    <span class="lightfont"><?php echo get_location_by_location_id($partsInfo['location']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Price</span>
    <span class="lightfont"><?php echo $partsInfo['price'];?></span>
</div>