<link href="<?php echo BASEURL ?>styles/css3-buttons.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo BASEURL?>tiny-grp/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "ibrowser,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks,plantuml",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,cleanup,help,code,|,insertdate,inserttime,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "<?php echo BASEURL?>tiny-grp/css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "<?php echo BASEURL?>tiny-grp/lists/template_list.js",
        external_link_list_url : "<?php echo BASEURL?>tiny-grp/lists/link_list.js",
        external_image_list_url : "<?php echo BASEURL?>tiny-grp/lists/image_list.js",
        media_external_list_url : "<?php echo BASEURL?>tiny-grp/lists/media_list.js",

        // Style formats
        style_formats : [
            {title : 'Bold text', inline : 'b'},
            {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
            {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
            {title : 'Example 1', inline : 'span', classes : 'example1'},
            {title : 'Example 2', inline : 'span', classes : 'example2'},
            {title : 'Table styles'},
            {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
        ],

        // Replace values for the template plugin
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });
</script>

<div class="vist_profile">
    <div class="main_tab_2">
        <span class="titleBox">About Me [<a href="<?php echo BASEURL?>profile">Back</a>]</span>
        <div class="clear"></div>
        <div class="v_gap"></div>
        <div class="clear"></div>
        <div class="span_row">
            <form id="abtFrm" name="abtFrm" method="post" action="">
                
                
                <textarea id="info" name="info" style="width:845px;height:300px;resize:none;" ><?php echo $aboutme['info'];?></textarea>


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

            </form>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script>
    
</script>