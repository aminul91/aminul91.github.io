<div class="list_of_features">
    <span class="depfont">Category </span>
    <span class="lightfont"><?php echo get_parts_category_by_id($partsInfo['category']);?></span>
</div>
<div class="list_of_features">
    <span class="depfont">Sub Category </span>
    <span class="lightfont"><?php echo get_parts_category_by_id($partsInfo['sub_category']);?></span>
</div>
<div class="list_of_features">
    <span class="depfont">Key Words</span>
    <span class="lightfont"><?php echo $partsInfo['key_word'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Condition of Part</span>
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
<div class="list_of_features">
    <span class="depfont">Is Sold</span>
    <span class="lightfont"><?php echo ($partsInfo['is_sold'] == 1) ? 'Yes' : 'No';?></span>
</div>





