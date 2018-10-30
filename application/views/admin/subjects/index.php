<h1 class="page-header">Subjects Index</h1>

<?php if($subjects == null){ ?>

<?php }else{ ?> 
<table class="table table-striped table-responsive-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($subjects as $subject): ?>
    <tr>
      <th scope="row"><?php echo $subject->id ?></th>
      <td><?php echo $subject->name ?></td>
      <td><?php echo $subject->created_date ?></td>
      <td> 
        <a href=""></a>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php } ?>
