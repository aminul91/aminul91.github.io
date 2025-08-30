<script type="text/javascript" src="<?php echo BASEURL; ?>scripts/upload_js/ajaxupload.3.5.js" ></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>scripts/upload_js/styles.css" />

<script type="text/javascript" >
    
    $(function()
    {
        var btnUpload=$('#upload');
        var status=$('#status');
        
        
        new AjaxUpload(btnUpload, 
        {
            action: baseUrl+'upload-api/upload-api.php', 
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
        var str = '<img src="'+baseUrl+'images/news/thumb/'+response+'" width="140px;" border="0" />';
        $('#cover_image').html(str);
        $('#image').val(response);
    }
</script>





