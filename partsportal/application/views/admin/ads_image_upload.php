<script type="text/javascript" src="<?php echo BASEURL?>scripts/upload_js/ajaxupload.3.5.js" ></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL?>scripts/upload_js/styles.css" />

<script type="text/javascript" >
    
    $(function()
    {
        var btnUpload=$('#upload');
        var status=$('#status');
                
        new AjaxUpload(btnUpload, 
        {
            action: '<?php echo BASEURL?>upload-api/ads-api.php', 
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
            onComplete: function(file,response)
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
        str = str+'<div class="upload_image1"><img width="90" height="100" src="<?php echo BASEURL?>images/ads/thumb/'+response+'" border="0" >';
        str = str+'<input type="hidden" id="image"  name="image" value="'+response+'"/></div>'; 
        $('.image_content_area').html(str);          
    }
</script>