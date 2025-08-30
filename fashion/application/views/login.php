<?php

if(isset($wrong))
{
    ?>
<h3 style="color:white;"><?php echo $wrong; ?></h3>
<?php  } ?>

<div style="height: 200 px;width: 600px;background-color: #000; float: left;margin-top: 40px;margin-left: 130px;border-radius: 40px;" >
      <h1 style="font-style: italic;color: #ffffff;" align="center">ENTER YOUR SHOP</h1>
</div><br/><br/><br/><br/><br/>
<div class="login">
    
  <form id="login" name="login" method="post" action="login_check" style="margin-top: 60px;">
        <table  align="center" style="width: 280px;">
            <tr >
        <td >
            <h3 style="font-style: italic;color: #ffffff; width: 100px;" align="center">Username :- </h3>
        </td>
        <td style=" width: 100px;" >
            <input type="text" class="required" name="c_username" id="c_username" placeholder="YOUR USERNAME" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 200px;" />
        </td>
        </tr>
         <tr>
        <td style="width: 100px;">
            <h3 style="font-style: italic;color: #ffffff;width: 20px;" align="center">Password:-</h3>
        </td>
        <td style="width: 100px;">
            <input type="password" class="required" name="password" id="password" placeholder="PASSWORD" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 200px;" />
        </td>
         </tr>
     <tr>
         <td style="width: 100px;"></td>
             
           <td style="width: 100px;">
               <input type="submit" value="submit" style=" width: 70px;border-radius: 10px;background-color: cyan;margin-top: 20px;margin-left: 30px;"  /></td>
         </tr>
  
    
       
        </table>
    </form>
    <br/>
    <a href="<?php echo site_url('welcome/forgot');?>"style="color: #ffffff; text-decoration: none;margin-left: 370px;"  >Forgot my password ?</a><br/><br/>
    <a href=" <?php echo site_url('welcome/create_shop');?>" style="color: #ffffff; text-decoration: none;margin-left: 330px;" > I WANT TO CREATE MY  SHOP</a>
</div>
<script>
    $(function(){
        $('#login'). validate({
          
          
        });
    });  
</script>  