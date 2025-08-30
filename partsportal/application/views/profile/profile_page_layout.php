<script>
  var bgColor = '<?php echo isset($data['page_layout']['bgColor']) ? $data['page_layout']['bgColor'] : '#e6e7e8';?>';  
</script>    

<link href="<?php echo BASEURL ?>styles/css3-buttons.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>scripts/colpick/spectrum.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>scripts/colpick/docs/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>scripts/colpick/docs/docs.css">
<script type="text/javascript" src="<?php echo BASEURL ?>scripts/colpick/spectrum.js"></script>
<script type='text/javascript' src='<?php echo BASEURL ?>scripts/colpick/docs/toc.js'></script>
<script type='text/javascript' src='<?php echo BASEURL ?>scripts/colpick/docs/docs.js'></script>



<div class="vist_profile">
    <div class="main_tab_2">
        <span class="titleBox">Profile Layout [<a href="<?php echo BASEURL?>profile">Back</a>]</span>
        <div class="clear"></div>
        <div class="v_gap"></div>
        <div class="clear"></div>
        <div class="span_row">
            <form id="psettingFrm" name="contactFrm" method="post" action="">
                


                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>

                <table class="tTBL"  cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="td1st" style="">Template Top</td>
                        <td class="td2nd">
                            <textarea id="templateTopHTML" name="templateTopHTML" ><?php echo html_entity_decode($page_layout['templateTopHTML']);?></textarea>
                        </td>
                        <td class="td3rd">
                            <img src="<?php echo BASEURL?>images/template-layout.png" width="108" height="131" >
                        </td>
                    </tr>
                    
                    <tr><td colspan="3">&nbsp;</td></tr>
                    
                    <tr>
                        <td class="td1st" style="">Template Background</td>
                        <td class="td2nd">
                            <div style="width:100px;float:left;">
                                <input id="bgColor" name="bgColor" value="<?php echo $page_layout['bgColor']?>" />
                            </div>
                            <div style="width:100px;float:left;">
                                
                            </div>
                        </td>
                        <td class="td3rd">
                             &nbsp;
                        </td>
                    </tr>
                    
                    <tr><td colspan="3">&nbsp;</td></tr>
                    
                   <tr>
                        <td class="td1st" style="">Template Footer</td>
                        <td class="td2nd">
                            <textarea id="templateBottomHTML" name="templateBottomHTML" ><?php echo html_entity_decode($page_layout['templateBottomHTML']);?></textarea>
                        </td>
                        <td class="td3rd">
                            &nbsp;
                        </td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="td1st" style="">&nbsp;</td>
                        <td class="td2nd">
                            <button onclick="submit_template_layout(); return false;" class="action blue"><span class="label nobgcolor">Save</span></button>
                        </td>
                        <td class="td3rd">
                            &nbsp;
                        </td>
                    </tr>
                    
                </table>

                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>
                
                

            </form>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<script>
    function submit_template_layout()
    {
        var templateTopHTML = $('#templateTopHTML').val();
        var bgColor = $('#bgColor').val();
        var templateBottomHTML = $('#templateBottomHTML').val();
        
        if(!templateTopHTML)
        {
            alert('Template top html should be given');
            return false;
        }
        
        if(!bgColor)
        {
            alert('Template background color should be given');
            return false;
        }
        
        if(!templateBottomHTML)
        {
            alert('Template bottom html should be given');
            return false;
        }
        document.forms.psettingFrm.submit();
    }
</script>