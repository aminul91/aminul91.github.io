<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            var baseUrl = '<?php echo BASEURL; ?>';
            var allFrm = document.forms;
        </script>
        <title><?php echo $this->config->item('project_title');?></title>
        <script src="<?php echo BASEURL?>scripts/jquery-1.10.2.min.js"></script>
        <script src="<?php echo BASEURL?>scripts/common.js"></script>
        <script type="text/javascript" src="<?php echo BASEURL?>scripts/jsval.js"></script>                

        <style type="text/css">
             body{ margin:0px;padding:0px; }
            .loginBOX { width:50%;margin:0 auto; background: #E6E7E8;}
            .titlebox { height:35px;width:100%;background: #5C6A78;  }
            .titleboxspn { font-size:18px; line-height:32px; margin-left:10px; color:#ffffff;}             
            .login_btn {cursor: pointer;width:100%;height: 30px;text-align:center; background:#BCC8D4;font-size: medium; border:2px solid #BCC8D4;box-shadow: 0 0 6px rgba(0, 0, 0, 0.10);line-height:30px;color: white;}
            .login_btn p{ margin:0px;padding:0px;color: #ffffff !important; font-weight:bold;}
            .input_css{ width:100%;padding:5px;border:1px solid #A0A0A0;padding-right:0px;padding-left:0px; }
            .newAcc_btn {cursor: pointer;width:100%;height: 30px; text-align:center;background:#5C6A78;font-size: medium;border:2px solid #5C6A78; box-shadow: 0 0 6px rgba(0, 0, 0, 0.10);  line-height:30px;}
            .newAcc_btn p{ margin:0px;padding:0px; color: #ffffff;font-weight:bold;}
            .fpass{ font-size: 18px;color:#5C6A78; }
            .fpass a{ color:#5C6A78;text-decoration: none;}
            .fpass a:link{ color:#5C6A78;text-decoration: none;}
            .fpass a:hover{ color:#5C6A78;text-decoration: none;}
            .fpass a:visited{ color:#5C6A78;text-decoration: none;}
            .fpass a:active{ color:#5C6A78;text-decoration: none;}
             a{ color:#fff;text-decoration: none;} 
             #loginform input { width:100%;padding:5px;border:1px solid #A0A0A0;padding-right:0px;padding-left:0px; }
            
            @media screen and (max-width: 980px) 
            {	
                .loginBOX { width:60%;}
            }
            @media screen and (max-width: 700px) 
            {	
                .loginBOX { width:80%;}
            }
            @media screen and (max-width: 400px) 
            {	
                .loginBOX { width:90%;}
            }
            @media screen and (max-width: 300px) 
            {	
                .loginBOX { width:100%;}
            }
            
        </style>
    </head>

    <body>
         <form name="loginform" id="loginform" action="<?php echo BASEURL?>admin/admin/login_check" method="post">
            <div class="loginBOX">
                <table width="100%" cellpadding="" cellspacing="0" align="center">
                    <tr>
                        <td>
                            <div class="titlebox">
                                <span class="titleboxspn"><?php echo $this->config->item('project_title');?></span>
                            </div>
                        </td>
                    </tr>
                    <tr> <td> &nbsp; </td> </tr>
                </table>
                <table width="90%" cellpadding="" cellspacing="0" align="center">                    
                    <tr> 
                        <td> 
                        Email<br/>
                        <input  type="text" id="email" name="email_address" required="1" realname="Email" regexp="JSVAL_RX_EMAIL" />
                        </td> 
                    </tr>
                    <tr> <td> &nbsp; </td> </tr>
                    <tr> 
                        <td> 
                        Password<br/>
                        <input  type="password" id="password" name="password" required="1" realname="Password" />
                        </td> 
                    </tr>
                    <tr> <td> &nbsp; </td> </tr>
                    <tr> 
                        <td> 
                            <div class="login_btn"><p align="center"><input name="wp-submit" id="wp-submit" class="login_btn" value="LOGIN" tabindex="3" type="button" onclick="submitForm(allFrm.loginform); return false;" /></p></div>
                        </td> 
                    </tr>
                    <tr> <td> &nbsp; </td> </tr>
                    <!--
                    <tr> 
                        <td>
                             <div class="newAcc_btn"><a href="<?php echo BASEURL?>signup"><p align="center">Create new account</a></p></div>
                        </td> 
                    </tr>
                    <tr> <td> &nbsp; </td> </tr>
                    -->
                </table>
            </div>
        </form>
    </body>
</html>