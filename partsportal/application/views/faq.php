<style>
.v_gap{height:15px;clear:both;}
.faq
	{
		float:left;
		width:96%;
		padding:2%;
	}
.question_list
	{
		float:left;
		display:inline;
		width:100%;
	}
.question_list li
	{
		float:left;
		width:90%;
		background: url(styles/images/arrow.png) no-repeat left center;
	}
.question_list li a
	{
	color:#3C95CC;
	font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;
	font-size:24px;
	font-weight: normal;
	padding-left:35px;
	}
.question_list li a:hover
	{
		text-decoration:underline;
	}
.faq h3
{
	color:#111;
	font-family: Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;
	font-size:30px;
	font-weight: normal;
}

.faq p
	{
	color:#111;
	font-family: "Times New Roman", Times, serif;
	font-size:14px;
	font-weight: normal;
	margin-top:8px;
	}
</style>
<div class="faq">
<?php
    foreach ($faq_list as $row)
    {
?>
	<ul class="question_list">
     	<li><a href="#answer_<?php echo $row['faq_manager_id'];?>"><?php echo $row['faq_ques'];?></a></li>
     </ul>
     <br/>
<?php
     }       
?>
<div class="v_gap"></div>
<?php
    
    foreach ($faq_list as $row)
    {
?>
        <div id="answer_<?php echo $row['faq_manager_id'];?>">
                <h3><?php echo $row['faq_ques'];?></h3>
                <p><?php echo html_entity_decode($row['faq_answer']);?></p>
        </div>
        <div class="v_gap"></div>
        
<?php

     }       

?>
</div>