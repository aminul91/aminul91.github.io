<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>PartsPosrtal</title>
    <script> var baseUrl = '<?php echo BASEURL; ?>'</script>
    <script src="<?php echo BASEURL;?>scripts/jquery-1.10.2.min.js"></script>
    <link href="<?php echo BASEURL?>styles/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASEURL?>styles/common.css" rel="stylesheet" type="text/css" />
    <script  src="<?php echo BASEURL ?>scripts/common.js"></script>


    <link rel="stylesheet" href="<?php echo BASEURL?>scripts/jquery_ui/themes/base/jquery.ui.all.css" />
    <script src="<?php echo BASEURL?>scripts/jquery_ui/ui/jquery.ui.core.js"></script>
    <script src="<?php echo BASEURL?>scripts/jquery_ui/ui/jquery.ui.widget.js"></script>
    <script src="<?php echo BASEURL?>scripts/jquery_ui/ui/jquery.ui.datepicker.js"></script>
    <link rel="stylesheet" href="<?php echo BASEURL?>scripts/jquery_ui/demos/demos.css" />

    <script type="text/javascript" src="<?php echo BASEURL;?>scripts/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL;?>scripts/registration.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>styles/validation_style.css" media="screen" />
    <link rel="stylesheet" href="<?php echo BASEURL?>styles/message.css" />
</head>

<body>
    <div id="wrap">
            <div id="inwrap">
               
                <?php include 'application/views/includes/header.php'; ?>
                <?php include 'application/views/includes/navigation.php'; ?>
                <div class="contenter">
                    <?php include_once('application/views/includes/message.php');?>
                    <div class="clear"></div>
                    <?php echo isset($mainContent) ? $mainContent : ''; ?>
                </div>
                <?php include 'application/views/includes/footer.php'; ?>
            </div>
    </div>
</body>
</html>