$.validator.addMethod("emailRule", validateEmail, "message");

var emailFlag = true;

function validateEmail(value, element) {
    var email = value;
    $.ajax({
        type: "POST",
        url: baseUrl + 'authentication/email_check',
        data:
            {
                    'email': email
            },
        success: function(html_data)
        {  
            if (html_data == 'VALID_EMAIL')
            {
                emailFlag = true;
            }
            else if (html_data == 'INVALID_EMAIL')
            {
                emailFlag = false;
            }
        },
        cache: false
    });
    return emailFlag;
}

$.validator.addMethod("serial_number_Rule", validateSerial, "message");

var serialFlag = true;

function validateSerial(value, element) {
    var serial_number = value;
    $.ajax({
        type: "POST",
        url: baseUrl + 'member/serial_number_check',
        data:
		{
			'serial_number': serial_number
		},
        success: function(html_data)
        {  
            html_data = html_data.trim();
            if (html_data == 'VALID_SERIAL')
            {
                serialFlag = true;
                //alert(html_data);
                $('.serial_number label.error').hide();
                $("#valid_message").html("<img  src="+baseUrl+"images/right_image.jpg />");
                
            }
            else if (html_data == 'INVALID_SERIAL')
            {
                //alert(html_data+" invalid");
                serialFlag = false;
               
                $("#valid_message").html("<img  src="+baseUrl+"images/cross.png />");
            }          
        },
        cache: false
    });
    return serialFlag;
}

$.validator.addMethod("resetEmailRule", checkEmail, "message");

var emailFlag = true;

function checkEmail(value, element) {
   alert("HJHJ");
    var email = value;
    $.ajax({
        type: "POST",
        url: baseUrl + 'member/email_check',
        data:
		{
			'email': email
		},
        success: function(html_data)
        {   alert(html_data);
            if (html_data == 'VALID_EMAIL')
            {
                emailFlag = false;
            }
            else if (html_data == 'INVALID_EMAIL')
            {
                emailFlag = true;
            }
        },
        cache: false
    });
    return emailFlag;
}

$.validator.addMethod("usernameRule", validateUsername, "message");

var usernameFlag = true;
function validateUsername(value, element)
{
    var username = value;
    $.ajax({
        type:"POST",
        url:baseUrl+'authentication/username_check',
        data:{
            'username':username
        },
        success:function(html_data)
        {
             
            if(html_data == 'VALID_USERNAME')
            {
                usernameFlag = true;
            }
            else if(html_data == 'INVALID_USERNAME')
            {
                   usernameFlag = false; 
             }
        },
        cache: false
    }); 
    return usernameFlag;
}
