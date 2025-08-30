<html>
<head>
<h1>Upload Form</h1>
</head>
<body>
     
    
    <?php
    echo form_open('welcome/image_upload');
    echo form_input('image_name','Product Name');
    echo form_input('info','product Information');
    echo form_upload('userfile');
    echo form_submit('upload','Upload');
    echo form_close();
?>



</body>
</html>