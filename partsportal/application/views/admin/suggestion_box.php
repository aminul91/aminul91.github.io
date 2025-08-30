<style>
.form-control{ width:97% !important; }
</style>
<script type="text/javascript" src="<?php echo BASEURL ?>scripts/datepicker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>scripts/datepicker/jquery.timepicker.css" />
<script type="text/javascript" src="<?php echo BASEURL ?>scripts/datepicker/lib/base.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>scripts/datepicker/lib/base.css" />
<script src="<?php echo BASEURL ?>scripts/datepicker/lib/datepair.js"></script>

 <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Suggestion list</a></li>
      </ol>
      <div class="v_gap"></div>
<div class="row">
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped tablesorter">
        <thead>
          <tr>
            <th>Name </th>
            <th>Phone </th>
            <th>Email </th>
            <th>Subject</th>
            <th>Suggestion </th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($suggestion_list)
        {
            foreach($suggestion_list as $cList)
            {                
                
         ?>
          <tr>
            <td><?php echo $cList['name']?></td>
            <td><?php echo $cList['phone'];?></td>
            <td><?php echo $cList['email'];?></td>
            <td><?php echo $cList['subject'];?></td>
            <td><?php echo $cList['suggestion'] ?></td>
          </tr>          
        <?php
            }
        }
        else 
        {
        ?>
         <tr>
             <td colspan="6" style="text-align:center;">No Suggestion found</td>            
          </tr>   
        <?php
        }
         ?>
        </tbody>
      </table>
    </div>
  </div>
</div>