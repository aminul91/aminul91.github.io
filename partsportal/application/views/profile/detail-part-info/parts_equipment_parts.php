<div class="list_of_features">
    <span class="depfont">Equipment Type</span>
    <span class="lightfont"><?php echo get_parts_category_by_id($partsInfo['equipment_type']);?></span>
</div>
<div class="list_of_features">
    <span class="depfont">Make</span>
    <span class="lightfont"><?php echo get_make_model_name($partsInfo['make']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Model</span>
    <span class="lightfont"><?php echo get_make_model_name($partsInfo['model']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Component Category</span>
    <span class="lightfont"><?php echo $partsInfo['componant_category'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Key Words of this part</span>
    <span class="lightfont"><?php echo $partsInfo['key_word'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Part number</span>
    <span class="lightfont"><?php echo $partsInfo['part_number'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Condition of Part</span>
    <span class="lightfont"><?php echo $partsInfo['part_condition'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Location of Part</span>
    <span class="lightfont"><?php echo get_location_by_location_id($partsInfo['location']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Price</span>
    <span class="lightfont"><?php echo $partsInfo['price'];?></span>
</div>