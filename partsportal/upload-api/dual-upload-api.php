<?php 
include("resize-class.php");
$fileindex = $_POST['fileindex'];
$filename = 'uploadfile';  


$randvalue = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 25)), 0, 25);
$uploadfile = $randvalue.$_FILES[$filename]['name'];


	
$image = $_FILES[$filename]['name'];
$image_type = $_FILES[$filename]['type'];

$uploaddir = '../images/wanted/';
$uploaddir_thumb = '../images/wanted/thumb/';
$watermarkImg = '../images/watermark_image.gif';
	
if($image != "")
{
    $w_h = getimagesize($_FILES[$filename]['tmp_name']);
    $o_width = $w_h[0];
    $o_height = $w_h[1];
    
    
    if($fileindex == '3')
    {
        if(move_uploaded_file($_FILES[$filename]['tmp_name'], $uploaddir.$uploadfile)) 
        { 
            
            $thumbs_width = 500;
            $thumbs_height = $o_height*($thumbs_width/$o_width);
            
            if($o_width>500)
            {
                $resizeObj = new resize($uploaddir.$uploadfile);
                $resizeObj -> resizeImage($thumbs_width, $thumbs_height, 'crop');
                $resizeObj -> saveImage($uploaddir.$uploadfile, 100);
            }
            
            $w_h = getimagesize($uploaddir.$uploadfile);
            $o_width = $w_h[0];
            $o_height = $w_h[1];
            
            $thumbs_width = 103;
            $thumbs_height = $o_height*($thumbs_width/$o_width);
            
            $resizeObj = new resize($uploaddir.$uploadfile);
            $resizeObj -> resizeImage($thumbs_width, $thumbs_height, 'crop');
            $resizeObj -> saveImage($uploaddir_thumb.$uploadfile, 100);
            
            $resizeObj -> watermark_image($uploaddir.$uploadfile,$watermarkImg,$uploaddir.$uploadfile);
            $resizeObj -> watermark_image($uploaddir_thumb.$uploadfile,$watermarkImg,$uploaddir_thumb.$uploadfile);
            echo basename($uploadfile);
        } 
    } 
    else if($fileindex == '4')
    {
        if(move_uploaded_file($_FILES[$filename]['tmp_name'], $uploaddir.$uploadfile)) 
        {             
            $thumbs_width = 500;
            $thumbs_height = $o_height*($thumbs_width/$o_width);
            
            if($o_width>500)
            {
                $resizeObj = new resize($uploaddir.$uploadfile);
                $resizeObj -> resizeImage($thumbs_width, $thumbs_height, 'crop');
                $resizeObj -> saveImage($uploaddir.$uploadfile, 100);
            }
            
            $w_h = getimagesize($uploaddir.$uploadfile);
            $o_width = $w_h[0];
            $o_height = $w_h[1];
            
            $thumbs_width = 180;
            $thumbs_height = $o_height*($thumbs_width/$o_width);
            
            $resizeObj = new resize($uploaddir.$uploadfile);
            $resizeObj -> resizeImage($thumbs_width, $thumbs_height, 'crop');
            $resizeObj -> saveImage($uploaddir_thumb.$uploadfile, 100);
            
            $resizeObj -> watermark_image($uploaddir.$uploadfile,$watermarkImg,$uploaddir.$uploadfile);
            $resizeObj -> watermark_image($uploaddir_thumb.$uploadfile,$watermarkImg,$uploaddir_thumb.$uploadfile);
            
            echo basename($uploadfile);
        } 
    }
}
else 
{
    echo "error";
}
?>