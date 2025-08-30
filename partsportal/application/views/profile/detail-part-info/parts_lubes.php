<div class="list_of_features">
    <span class="depfont">Lube Type</span>
    <span class="lightfont"><?php echo get_parts_category_by_id($partsInfo['lube_type']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Grade</span>
    <span class="lightfont"><?php echo $partsInfo['grade'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Make/Brand</span>
    <span class="lightfont"><?php echo get_make_model_name($partsInfo['make']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Quantity</span>
    <span class="lightfont"><?php echo $partsInfo['quantity'];?></span>
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
    <span class="depfont">Sale Price</span>
    <span class="lightfont"><?php echo $partsInfo['price'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Is Sold</span>
    <span class="lightfont"><?php echo ($partsInfo['is_sold'] == 1) ? 'Yes' : 'No';?></span>
</div>