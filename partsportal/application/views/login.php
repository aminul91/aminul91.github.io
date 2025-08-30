<script src="<?php echo BASEURL;?>scripts/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo BASEURL;?>scripts/jquery.validate.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>styles/validation_style.css" media="screen" />
    <style>
        .lable_style{width:53% !important;}
        .anchorLnk a{ color:blue;}
    </style>
    <div class="ragistation">
        <h1 class="title_h1">Login</h1>
        <form name="logFrm" id="logFrm" action="<?php echo BASEURL?>login_check" method="POST">
                <label class="lable_style">
                    <span>&nbsp;</span>
                    <span>
                        <input class="form-control" type="text" name="email" id="email" value="" placeholder="Email" />
                    </span>
                </label>
                <label class="lable_style">
                    <span>&nbsp;</span>
                    <span>
                        <input class="form-control" type="Password" name="password" id="password" value="" placeholder="Password" />
                    </span>
                </label>

                <label class="lable_style margin-5">
                     <span>&nbsp;</span>
                     <span><button type="button" onclick="confirm_login();" class="buttom">Login</button></span>
                </label> 
            
                <label class="lable_style margin-5">
                     <span>&nbsp;</span>
                     <table style="width:100%;">
                         <tr>
                             <td nowrap="nowrap"><span class="anchorLnk" style="float:right;">You don't have account ?<a href="<?php echo BASEURL?>registration"> - Create Account</a></span></td>
                         </tr>
                     </table>                     
                </label>
        </form>
    </div>
    <div class="clear"></div>
    <div class="v_gap"></div>
    <div class="clear"></div>
<script>
function confirm_login()
{
     document.logFrm.submit();
}
</script>
