<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $this->config->item('project_title');?></title>
    <script>
        var baseUrl = '<?php echo BASEURL; ?>';
        var allFrm = document.forms;
    </script>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASEURL?>scripts/admin/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo BASEURL?>styles/common.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="<?php echo BASEURL?>scripts/admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASEURL?>scripts/admin/font-awesome/css/font-awesome.min.css">
    
    <!-- JavaScript -->
    <script src="<?php echo BASEURL?>scripts/admin/js/jquery-1.10.2.js"></script>
    <script src="<?php echo BASEURL?>scripts/admin/js/bootstrap.js"></script>
    <script src="<?php echo BASEURL?>scripts/common.js"></script>
  </head>

  <body>
    <div id="wrapper">
      <?php include 'application/views/admin/includes/left-bar.php';?>
      <div id="page-wrapper">
        <?php echo isset($mainContent) ? $mainContent : ''; ?>
      </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
  </body>
</html>