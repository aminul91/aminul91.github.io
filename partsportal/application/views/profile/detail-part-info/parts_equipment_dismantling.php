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
    <span class="depfont">Serial</span>
    <span class="lightfont"><?php echo $partsInfo['serial'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Location of Part</span>
    <span class="lightfont"><?php echo get_location_by_location_id($partsInfo['location']);?></span>
</div>