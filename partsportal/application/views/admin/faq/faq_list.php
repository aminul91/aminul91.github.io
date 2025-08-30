<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> <?php echo $page_title; ?></li>
      </ol>
      <div class="v_gap"></div>
      <form id="saveCat" name="saveCat" method="post" action="">
        <table class="save_box">
            <tr>
                <td>
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Question</label>
                      <input class="form-control" id="faq_ques" name="faq_ques" value="<?php if(isset($faq['faq_ques'])) echo $faq['faq_ques'];?>" />
                    </div>
                    <div class="clear"></div>
                    <div class="form-group">
                      <label>Answer</label>
                      <textarea class="form-control" id="faq_answer" name="faq_answer"><?php if(isset($faq['faq_answer'])) echo $faq['faq_answer'];?></textarea>
                    </div>
                    <div class="clear"></div>
                    <button type="button" class="btn btn-default" onclick="faq_submitForm(); return false;">Submit</button>
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
function faq_submitForm()
{
    document.saveCat.submit();
}
</script>

<?php
if(!$page_type)
{    
?>
<div class="row">
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped tablesorter">
        <thead>
          <tr>
            <th>Name <!--i class="fa fa-sort"></i--></th>
            <th>Action <!--i class="fa fa-sort"--></i></th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($faq_list)
        {
            foreach($faq_list as $cList)
            {
         ?>
          <tr>
            <td><?php echo $cList['faq_ques']?></td>
            <td><a href="<?php echo BASEURL?>admin/admin_panel/edit_faq_list/<?php echo $cList['faq_manager_id'];?>">Edit</a> | <a href="javascript:void(0);" onclick="is_delete_faq(<?php echo $cList['faq_manager_id']?>); return false;">Delete</a></td>
          </tr>
         <?php
            }
        }
         ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php } ?>
<script type="text/javascript" src="<?php echo BASEURL; ?>scripts/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    var baseUrl = '<?php echo BASEURL;?>';
    // This is a check for the CKEditor class. If not defined, the paths must be checked.
    if ( typeof CKEDITOR == 'undefined' )
    {
        document.write('ckeditor initialization error.');
    }
    else
    {

//        var editor =     CKEDITOR.replace( "details",
//        {
//            customConfig : baseUrl+'scripts/ckeditor/ckeditor_custom_config.js'
//        });

        var editor = CKEDITOR.replace( "faq_answer",
        {
            customConfig : baseUrl+'scripts/ckeditor/ckeditor_custom_config.js'
        });

    }
</script>

<script>
function is_delete_faq(faq_id)
{
    var con = confirm("Are you sure to delete?");
    if(con)
    {
        window.location.href="<?php echo BASEURL; ?>admin/admin_panel/delete_faq/"+faq_id;
    }
}
</script>