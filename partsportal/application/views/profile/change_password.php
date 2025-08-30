<link href="<?php echo BASEURL ?>styles/css3-buttons.css" rel="stylesheet" type="text/css" />
<div class="vist_profile">
    <div class="main_tab_2">
        <span class="titleBox">Change Password [<a href="<?php echo BASEURL?>profile">Back</a>]</span>
        <div class="clear"></div>
        <div class="v_gap"></div>
        <div class="clear"></div>
        <div class="span_row">
            <form id="passwordChangeFrm" name="contactFrm" method="post" action="">
                <div class="bRow">
                    <div class="blftPart">
                        New Password
                    </div>
                    <div class="brightPart">
                        <input class="required" type="password" id="password" name="password" />
                    </div>
                    <div class="clear"></div>
                </div>


                <div class="bRow">
                    <div class="blftPart">
                        Confirm Password
                    </div>
                    <div class="brightPart">
                        <input class="required" type="password" id="confirm_password" name="confirm_password" />
                    </div>
                    <div class="clear"></div>
                </div> 


                <div class="clear"></div>
                <div class="v_gap"></div>
                <div class="clear"></div>

                <div class="bRow">
                    <div class="blftPart">
                        <button type="submit" class="action blue" ><span class="label">Submit</span></button>
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
    $(function() {
        $("#passwordChangeFrm").validate({
            rules: {
                password:
                        {
                            minlength: 6,
                            maxlength: 32
                        },
                confirm_password:
                        {
                            equalTo: "#password"
                        }
            },
            messages:
                    {
                        confirm_password: "Please enter the same password."

                    }
        });
    });
</script>