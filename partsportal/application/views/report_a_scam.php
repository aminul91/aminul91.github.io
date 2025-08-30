<div class="contact_us">
    <div class="contact_field">
        <h5 class="big_font contact_title">Report a scam</h5>
        <form id="cFrm" name="cFrm" method="post" action="report_a_scam">
            
            <div class="contact_field contact_field_mar">
                <span class="span_left">Title :</span>
                <span class="span_right"><input type="text" id="subject" name="title" value="" placeholder="Title" class="contact_input required" /></span>
            </div>
            <div class="contact_field contact_field_mar">
                <span class="span_left">Description :</span>
                <span class="span_right"><textarea class="contact_text required" rows="6" cols="12" id="suggestion" name="description"></textarea></span>
            </div>
            <div class="contact_field contact_field_mar">
                <span class="span_left">&nbsp;</span>
                <span class="span_right">
                    <input type="submit" value="SEND" name="" class="contact_submit" />
                </span>
            </div>
        </form>
    </div>
</div>
<script>
    $(function(){
        $('#cFrm'). validate({
            
        });
    });  
</script>