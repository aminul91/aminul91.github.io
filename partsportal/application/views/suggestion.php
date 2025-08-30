<div class="contact_us">
    <div class="contact_field">
        <h5 class="big_font contact_title">Suggestion</h5>
        <form id="cFrm" name="cFrm" method="post" action="suggestion">
            <div class="contact_field contact_field_mar">
                <span class="span_left ">Name :</span>
                <span class="span_right">
                    <input type="text" id="name" name="name"  value="" placeholder="name" class="contact_input required" />
                </span>
            </div>
             <div class="contact_field contact_field_mar">
                <span class="span_left ">Phone_no:</span>
                <span class="span_right">
                    <input type="text" id="phone" name="phone"  value="" placeholder="phone" class="contact_input required" />
                </span>
            </div>
            <div class="contact_field contact_field_mar">
                <span class="span_left ">E-mail :</span>
                <span class="span_right"><input type="text" id="email" name="email" value="" placeholder="email" class="contact_input required email" /></span>
            </div>
            <div class="contact_field contact_field_mar">
                <span class="span_left">Subject :</span>
                <span class="span_right"><input type="text" id="subject" name="subject" value="" placeholder="Subject" class="contact_input required" /></span>
            </div>
            <div class="contact_field contact_field_mar">
                <span class="span_left">Suggestion :</span>
                <span class="span_right"><textarea class="contact_text required" rows="6" cols="12" id="suggestion" name="suggestion"></textarea></span>
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