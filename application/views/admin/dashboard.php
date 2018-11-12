<h2 class="page-header">Dashboard</h2>
<h4>Recente Activity</h4> 
<?php if($activities == null){ ?>
<p>No Activitys</p>
<?php } ?>

<h1>welcome <?php echo $_SESSION['logged_in']; ?></h1>
<ul class="list-group list-group-flush">
<?php foreach($activities as $activity){ ?> 

  <li class="list-group-item">
    <p><?php echo $activity->message ?>   <strong> Action <?php echo $activity->action ?>  </strong> On  Date <?php echo $activity->create_date ?></p>  
  </li>
    <?php } ?>
</ul>

