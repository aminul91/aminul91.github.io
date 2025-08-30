

<div align ="center" style="height:300px;width:850px;border-radius:30px;">
<h4 style="color:white">Give your brand_name which you entered opening the shop.<br/>Give also username which you used to open the shop(if you remmember)</h4>

    <h4 style="color:yellow"> Your username and password will be sent in PHONE by SMS which you entered during opening the shop</h4>
    <div align="center" >
     <form id="frm" name="frm" method="post" action="login">
    
     <table>
        <tr>
        <td>
            <h3 style="font-style: italic;color: white;" align="center">Brand name </h3>
        </td>
        <td>
            <input type="text" class="required" name="b_name" id="b_name" placeholder="YOUR SHOP/BRAND NAME you used" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;border:solid;" />
        </td>
        </tr>
         <tr>
        <td>
            <h3 style="font-style: italic;color: white;" align="center">User name</h3>
        </td>
        <td>
            <input type="text" name="u_name" id="u_name" placeholder="Username you used" style=" margin-top: 10px;background-color: #ffffff; border-radius:15px;height: 25px; width: 300px;border:solid;" />(If remember)
        </td></tr>
         <tr><td></td>
         <td>
               <input type="submit" value="submit" onsubmit="alert(Thank you!!! you will receive a sms in phone you registered)" style=" width: 70px;border-radius: 10px;background-color: cyan;margin-left: 120px;margin-top: 40px;"  /></td>
         </tr>
         </table>
    
    
    
    
    </form>
        </div>

</div>
<script>
    $(function(){
        $('#frm'). validate({
          
          
        });
    });  
</script>  