<div class="contact_us">
    <div class="contact_field">
        <h5 class="big_font contact_title">Contact Us</h5>
        <form id="cFrm" name="cFrm" method="post" action="<?php echo BASEURL ?>welcome/send_contact_us_msg">
            <div class="contact_field contact_field_mar">
                <span class="span_left ">Name :</span>
                <span class="span_right">
                    <input type="text" id="name" name="name"  value="" placeholder="name" class="contact_input required" />
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
                <span class="span_left">Message :</span>
                <span class="span_right"><textarea class="contact_text required" rows="6" cols="12" id="message" name="message"></textarea></span>
            </div>
            <div class="contact_field contact_field_mar">
                <span class="span_left">&nbsp;</span>
                <span class="span_right">
                    <input type="submit" value="Submit" name="" class="contact_submit" />
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