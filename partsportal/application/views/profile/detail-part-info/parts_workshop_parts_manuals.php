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
    <span class="depfont">Serial Number</span>
    <span class="lightfont"><?php echo $partsInfo['serial_number'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Manual Type</span>
    <span class="lightfont"><?php echo $partsInfo['manual_type'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Manual Formate</span>
    <span class="lightfont"><?php echo $partsInfo['manual_formate'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Condition</span>
    <span class="lightfont"><?php echo $partsInfo['condition'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Location</span>
    <span class="lightfont"><?php echo get_location_by_location_id($partsInfo['location']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Is Sold</span>
    <span class="lightfont"><?php echo ($partsInfo['is_sold'] == 1) ? 'Yes' : 'No';?></span>
</div>