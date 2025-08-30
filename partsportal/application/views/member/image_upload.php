<?php
if(isset($listing_id))
{
    $listing_image = my_listing_image($listing_id);
    $image = $listing_image['image'];
    $image_count  = $listing_image['count'];
}
 else
{
  $image_count  = 0;
}
?>

<script> 
    var fileindex = 1;
    var image_count = <?php echo $image_count;?>;
    var inc = 0;
</script>

<script type="text/javascript" src="<?php echo BASEURL?>scripts/upload_js/ajaxupload.3.5.js" ></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL?>scripts/upload_js/styles.css" />

<script type="text/javascript" >
    
    $(function()
    {
        var btnUpload=$('#upload1');
        var status=$('#status');
        
        new AjaxUpload(btnUpload, 
        {
            action: '<?php echo BASEURL?>upload-api/upload-api.php', 
            name: 'uploadfile',
            data : { 'fileindex':fileindex },
            onSubmit: function(file, ext)
            {
                if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext)))
		{ 
                    alert('Only JPG, PNG or GIF files are allowed');  
                    return false;
                }
                status.show();
            },
            onComplete: function(file, response)
            {
                status.hide();
                if(response!="error")				
                {
                    generator(response); 
                } 
                else
                {
                    alert('fail...');
                }
            }
        });
    });
    
    function generator(response)
    {
          var str = '';
          var PckageImageLimit = <?php echo my_pckage_image_limit(); ?>;
          if(image_count == PckageImageLimit)
          {
              alert('You have uploaded '+PckageImageLimit+' images already');
              return false;
          }
          if(fileindex == '1')
          {
              str = str+'<span id="delete_avatar_'+inc+'"><div class="upload_image1"><img width="90" height="100" src="<?php echo BASEURL?>images/listing_image/thumb/'+response+'" border="0" >';
              str = str+'<input type="hidden" id="avatar_'+inc+'"  name="avatar['+inc+']" value="'+response+'"/></div><div style="color: red;cursor: pointer;float: left;font-size: 21px;font-weight: bold;margin-left: -8px;padding-top: 16px;" onclick="delete_avatar('+inc+')">X</div></span>'; 
              $('.upload_image_row').append(str);
              inc++; image_count++;
          }
    }
</script>



<div class="upload_image_new_box">
    <div class="upload_image_row">
         <?php $count = 30;foreach($image as $avatar) { $count++; ?>
            <span id="delete_avatar_<?php echo $count;?>">
              <div class="upload_image1"><img width="90" height="100" src="<?php echo BASEURL?>images/listing_image/thumb/<?php echo $avatar['image'];?>" border="0" >
              <input type="hidden" id="avatar_<?php echo $count;?>"  name="avatar[<?php echo $count;?>]" value="<?php echo $avatar['image'];?>"/></div><div onclick="delete_avatar(<?php echo $count;?>)" style="color: red;cursor: pointer;float: left;font-size: 21px;font-weight: bold;margin-left: -8px;padding-top: 16px;">X</div>
            </span>                               
        <?php } ?>
    <input type="hidden" id="disabled_old_image_count" value="<?php echo $count;?>">   
    </div>
    <div class="add_photo">                        
        <div id="upload1">
            <br/>
            <div id="status" > <img class="status12" src="<?php echo BASEURL ?>scripts/upload_js/loading.gif" /> </div> 
            <div id="upload" ><span class="">Upload Image</span></div>

            <span id="upload_image_box"></span>
        </div>   
    </div>	
</div>


<script>
    function delete_avatar(image_id)
    {
        $('#delete_avatar_' + image_id).html('');
        image_count = image_count - 1;
    }
</script>



