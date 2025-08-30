<link href="<?php echo BASEURL ?>styles/css3-buttons.css" rel="stylesheet" type="text/css" />
<div class="vist_profile">
    <div class="main_tab_2">
        <span class="titleBox">Add Credit [<a href="<?php echo BASEURL?>profile">Back</a>]</span>
        <div class="clear"></div>
        <div class="v_gap"></div>
        <div class="clear"></div>
        <div class="span_row">
            <form id="creditFrm" name="creditFrm" method="post" action="<?php echo BASEURL?>welcome/save_credit">
                <div class="bRow">
                    <div class="blftPart">
                        Current Balance
                    </div>
                    <div class="brightPart">
                        30
                    </div>
                    <div class="clear"></div>
                </div>


                <div class="bRow">
                    <div class="blftPart">
                        Purchase Credit
                    </div>
                    <div class="brightPart">
                        <input  type="text" id="credit" name="credit" />
                    </div>
                    <div class="clear"></div>
                </div> 


                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>

                <div class="bRow">
                    <div class="blftPart">
                        <button type="button" class="action blue" onclick="add_credit(); return false;"><span class="label">Submit</span></button>
                    </div>
                    <div class="brightPart">
                        &nbsp;
                    </div>
                    <div class="clear"></div>
                </div> 


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
function add_credit()
{
    var credit = $('#credit').val();
    if(!credit)
    {
       alert('Credit should be given');
       return false;
    }    
    document.forms.creditFrm.submit();
}
</script>