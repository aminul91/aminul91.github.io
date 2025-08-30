<div class="list_of_features">
    <span class="depfont">Category</span>
    <span class="lightfont"><?php echo get_parts_category_by_id($partsInfo['category']);?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Rim Size</span>
    <span class="lightfont"><?php echo $partsInfo['rim_size'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Tyre Size</span>
    <span class="lightfont"><?php echo $partsInfo['tyre_size'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Brand</span>
    <span class="lightfont"><?php echo $partsInfo['brand'];?></span>
</div>

<div class="list_of_features">
    <span class="depfont">Model</span>
    <span class="lightfont"><?php echo get_make_model_name($partsInfo['model']);?></span>
</div>


<div class="list_of_features">
    <span class="depfont">Tread </span>
    <span class="lightfont"><?php echo $partsInfo['tread'];?></span>
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