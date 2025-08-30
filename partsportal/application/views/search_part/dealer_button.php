<?php
if(is_dealer_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id']))
{
?>
    <a target="_blank" href="<?php echo BASEURL;?>~<?php echo get_profile_name_by_parts_list_id_n_type_listing_id($parts_list_id,$value['id']);?>"><button type="button" class="dealer_botton">Dealer Enquiry</button></a>
<?php
}
else 
{
?>
   <a target="_blank" href="<?php echo BASEURL?>parts-detail/<?php echo $parts_list_id;?>/<?php echo $value['id'];?>"><button type="button" class="dealer_botton">Detail</button></a> 
<?php    
}
?>