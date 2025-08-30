<script>
    function deleteItem(category_id)
    {
        // alert(category_id);
        $.ajax({
            type: 'post',
            url: baseUrl+'admin/admin_panel/delete_category',
            data : {
                'category_id': category_id
            },
            success: function(htmlData)
            {
                if(htmlData == 1)
                {
                    $('#cat_row_'+category_id).remove();
                    $('.cat_child_'+category_id).remove();
                    $('.alert').show();
                    $('html, body').animate({scrollTop: 0});
                }
                
            }
        });
    }
</script>