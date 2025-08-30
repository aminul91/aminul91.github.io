<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> <?php echo $page_title; ?></li>
      </ol>
      <div class="v_gap"></div>
      <form id="siform" name="siform" method="post" action="<?php echo BASEURL?>admin/static_page/<?php echo $status?>">
        <table class="save_box">
            <tr>
                <td>
                    <div class="clear"></div>
                    <div class="form-group">
                      <textarea class="form-control" id="description" name="description"><?php if(isset($description)) echo $description;?></textarea>
                    </div>
                    <div class="clear"></div>
                    <button type="button" class="btn btn-default" onclick="submit_info_form(); return false;">Update</button>
                </td>
            </tr>
        </table>
      </form>
      <div class="v_gap"></div>
      <?php
      if($message)
      {
      ?>
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
          Category has been saved successfully
        </div>
      <?php
      }
      ?>
    </div>
</div>
<script>
function submit_info_form()
{
    document.siform.submit();
}
</script>


<script type="text/javascript" src="<?php echo BASEURL; ?>scripts/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    var baseUrl = '<?php echo BASEURL;?>';
    if( typeof CKEDITOR == 'undefined' )
    {
        document.write('ckeditor initialization error.');
    }
    else
    {
        var editor = CKEDITOR.replace( "description",
        {
            customConfig : baseUrl+'scripts/ckeditor/ckeditor_custom_config.js'
        });

    }
</script>