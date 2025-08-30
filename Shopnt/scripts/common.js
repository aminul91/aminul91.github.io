function submitForm(frm)
{
    if(validateStandard(frm))
    {
       frm.submit();  
    }
} 

function category_submitForm(frm)
{
   var parts_list_id = $('#parts_list_id').val();
   var name = $('#name').val();
   
   if(!parts_list_id)
   {
      alert('Parts/Equipments name should be given');
      return false;
   }
   if(!name)
   {
      alert('Category name should be given');
      return false;
   }
   frm.submit(); 
}

function newsletter_submitForm(frm)
{
   var user_type = $('#user_type').val();
   var subject = $('#subject').val();
   var message = $('#message').val();
   
   if(!user_type)
   {
      alert('Select seller type');
      return false;
   }
   if(!subject)
   {
      alert('Subject should be given');
      return false;
   }
   if(!message)
   {
      alert('Message should be given');
      return false;
   }
   frm.submit(); 
}

//function is_delete_category(category_id)
//{
//    var con = confirm('Are you sure to delete this category?');
//    if(con)
//    {
//       window.location.href = baseUrl+'admin/admin_panel/delete_category/'+category_id; 
//    }
//}

function set_category_status(status,category_id)
{
    var con = confirm('Are you sure to change status?');
    if(con)
    {
       window.location.href = baseUrl+'admin/admin_panel/set_category_status/'+status+'/'+category_id; 
    }
}

function set_package_status(status,package_id)
{
    var con = confirm('Are you sure to change status?');
    if(con)
    {
       window.location.href = baseUrl+'admin/admin_panel/set_package_status/'+status+'/'+package_id; 
    }
}

function save_news(frm)
{
   var category_id = $('#category_id').val();
   var title = $('#title').val();
   var short_brief = $('#short_brief').val();
   var detail_brif = $('#detail_brif').val();
   
   if(!category_id)
   {
      alert('Category name should be given');
      return false;
   }
   if(!title)
   {
      alert('Title should be given');
      return false;
   }
   if(!short_brief)
   {
      alert('Short brief should be given');
      return false;
   }
   if(!detail_brif)
   {
      alert('Detail brief should be given');
      return false;
   }
   frm.submit(); 
}

function delete_package(package_id)
{
    var con = confirm('Are you sure to chnage this package status?');
    if(con)
    {
       window.location.href = baseUrl+'admin/delete_package/'+package_id; 
    }
}

function toggle_package_listing()
{
    $('#package_listing_box').toggle();
}

function package_submitForm(frm)
{
    var title = $('#title').val();
    var picture_limit = $('#picture_limit').val();
    var exp_volume = $('#exp_volume').val();
    var cerdit = $('#cerdit').val();
    
    if(!title)
    {
       alert('Title should be given');  
       return false;
    }
    if(!picture_limit)
    {
       alert('Picture limit should be given');  
       return false;
    }
    if(!exp_volume)
    {
       alert('Listing expire days should be given');  
       return false;
    }    
    if(!cerdit)
    {
       alert('Package value should be given');  
       return false;
    }
    frm.submit(); 
}

function msg()
{
    alert('The task is under construction');
    return false;
}

function msg2()
{
    alert('The task will be done later.. with native payment gateway');
    return false;
}

function is_delete_member(member_id)
{
    var con = confirm('Are you sure to delete this member?');
    if(con)
    {
       window.location.href = baseUrl+'delete_member/'+member_id; 
    }
}

function set_member_status(status,member_id)
{
    var con = confirm('Are you want to change this member status?');
    if(con)
    {
       window.location.href = baseUrl+'set_member_status/'+status+'/'+member_id; 
    } 
}

function search_userForm(frm)
{
    frm.submit(); 
}

function p_set_state_list(country_code)
{
    if(country_code == 'AU' || country_code == 'US' || country_code == 'CA')
    {
        
        $.ajax({
       
       
       type: "POST",
        url: baseUrl+'welcome/ajax_p_set_state_list',
        data:
        {
            'country_code':country_code
        }, 
        success: function(html_data)
        {
            if (html_data != '')
            {
                $('#p_state').html(html_data);
                $('#p_country_state_visibility').show();
            }
        }
     });                        
   }
    else
    {
        $('#p_state').html('');
        $('#p_country_state_visibility').hide();
    }
}

function i_set_state_list(country_code)
{
    
    if(country_code == 'AU' || country_code == 'US' || country_code == 'CA')
    {
        
        $.ajax({
        type: "POST",
        url: baseUrl+'welcome/ajax_p_set_state_list',
        data:
        {
            'country_code':country_code
        }, 
        success: function(html_data)
        {
            if (html_data != '')          
            {
                $('#i_state').html(html_data);
                $('#i_country_state_visibility').show();
            }
        }
        });                        
    }
    else
    {
        $('#i_state').html('');
        $('#i_country_state_visibility').hide();
    }
}

function c_set_state_list(country_code)
{
    if(country_code == 'AU' || country_code == 'US' || country_code == 'CA')
    {
        
        $.ajax({
        type: "POST",
        url: baseUrl+'welcome/ajax_c_set_state_list',
        data:
        {
            'country_code':country_code
        }, 
        success: function(html_data)
        {
            if (html_data != '')
            {
                $('#state_box').html(html_data);
                $('#country_state_visibility').show();
            }
        }
        });                        
    }
    else
    {
        $('#state_box').html('');
        $('#country_state_visibility').hide();
    }
}

function delete_ads(ads_id)
{
   con = confirm('Are you sure to delete this ads?'); 
   if(con)
   {
       window.location.href = baseUrl+'admin/delete_ads/'+ads_id;
   }
}

function submitAdsForm(frm)
{
   var title = $('#title').val(); 
   var image = $('#image').val(); 

   if(!title)
   {
       alert('Title should be given');
       return false;
   }
   if(!image)
   {
       alert('Image should be given');
       return false;
   }
   frm.submit();
}

function save_my_contact_info(frm)
{
   frm.submit(); 
}

function send_contact_us(frm)
{
   frm.submit();  
}

function get_parent_category_list(parts_list_id)
{
    $.ajax({
        type: "POST",
        url: baseUrl+'admin/admin_panel/ajax_parent_category_list',
        data:
        {
            'parts_list_id':parts_list_id
        }, 
        success: function(html_data)
        {
            if (html_data != '')
            {
                $('#parent_category_id').html(html_data);
            }
        }
        });        
}

function get_child_equipment_type(parent_category_id,parts_list_id)
{
   $.ajax({
            type: "POST",
            url: baseUrl + 'emailalert/ajax_child_equipment_type',
            data:{
                'parent_category_id':parent_category_id,
                'parts_list_id':parts_list_id
            },
            success: function(html_data)
            {
               $('#sub_category').html(html_data); 
            }
        }); 
}

function get_child_equipment_type_search(parent_category_id,parts_list_id,div_index)
{
   $.ajax({
            type: "POST",
            url: baseUrl + 'emailalert/ajax_child_equipment_type',
            data:{
                'parent_category_id':parent_category_id,
                'parts_list_id':parts_list_id
            },
            success: function(html_data)
            {
               $('#sub_category_'+div_index).html(html_data); 
            }
        }); 
}

function set_default_status(is_default,package_id)
{
   var con = confirm('Are you sure to set new status of this record?');
   if(con)
   {
      window.location.href = baseUrl+'admin/admin_panel/set_default_status/'+is_default+'/'+package_id;  
   }   
}

function delete_parts_list(listing_id)
{
   var con = confirm('Are you sure to delete this record?');
   if(con)
   {
      window.location.href = baseUrl+'admin/admin_panel/delete_parts_list/'+listing_id;  
   }  
}

