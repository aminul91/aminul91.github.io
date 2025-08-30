<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PartsPosrtal</title>
    <script> var baseUrl = '<?php echo BASEURL; ?>'</script>
    <script src="<?php echo BASEURL;?>scripts/jquery-1.10.2.min.js"></script>
    <link href="<?php echo BASEURL?>styles/common.css" rel="stylesheet" type="text/css" />    
    <link href="<?php echo BASEURL?>styles/style.css" rel="stylesheet" type="text/css" />    
    <script  src="<?php echo BASEURL ?>scripts/common.js"></script>
    
    <script type="text/javascript" src="<?php echo BASEURL;?>scripts/jquery.validate.js"></script>    
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>styles/validation_style.css" media="screen" />
    
    
    
    <?php
    $username  = trim(str_replace('~','',$this->uri->segment(1,0)));
    $userInfo = get_user_info($username);
    ?>
    <style>
        *
	{
            margin:0;
            padding:0;
            border:none;
	}
        body
        {
            font-family:Arial, Helvetica, sans-serif;
            font-size:100%;
            color:#000000;
            background:<?php echo isset($userInfo['bgColor']) ? $userInfo['bgColor']: '#e6e7e8'; ?>;
        }   
        a, a:hover
        {
            text-decoration:none;
        }
        ul, li
        {
            list-style:none;
        }
        input:focus
        {
            border-color: rgba(82, 168, 236, 0.8);
            box-shadow: 0 0 8px rgba(82, 168, 236, 0.6);
            outline: 0 none;
        }
        #wrap { width:980px;margin:0 auto; background:#ffffff; }
        #header_panel{ width:100%;margin:0 auto;min-height:80px;background:#AA3830; }
        #body_container{ width:100%;margin:0 auto; }
        #footer{ width:100%;margin:0 auto;min-height:60px;background:#000000;color:#ffffff; }
    </style>
</head>
    <body>
        <div id="wrap">
                <?php include 'application/views/profile-includes/header.php'; ?>
                <?php include_once('application/views/includes/message.php');?>
                <div id="body_container">
                     <?php echo isset($mainContent) ? $mainContent : ''; ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>  
                <?php include 'application/views/profile-includes/footer.php'; ?>
        </div>
    </body>
</html>