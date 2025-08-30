<?php
if(is_dealer_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id']))
{
?>
    <a target="_blank" href="<?php echo BASEURL?>~<?php echo get_profile_name_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id']);?>/parts_detail/<?php echo $parts_list_id;?>/<?php echo $value['id'];?>"><img src="<?php echo BASEURL?>images/listing_image/thumb/<?php echo get_single_listingImage($parts_list_id,$value['id'])?>"></a>
<?php
}
else                     
{
?>
    <a target="_blank" href="<?php echo BASEURL?>parts-detail/<?php echo $parts_list_id;?>/<?php echo $value['id'];?>"><img src="<?php echo BASEURL?>images/listing_image/thumb/<?php echo get_single_listingImage($parts_list_id,$value['id'])?>"></a>
<?php
}
?>      