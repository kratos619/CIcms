<h1 class="page-header">Subjects Index</h1>

<?php if($subjects == null){ ?>
<p class="lead">No Subjects</p>
<?php }else{ ?> 
<table class="table table-striped table-responsive-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Created At</th>
      <th></th>
      <th>Action</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php foreach($subjects as $subject): ?>
    <tr>
      <th scope="row"><?php echo $subject->id ?></th>
      <td><?php echo $subject->name ?></td>
      <td><?php echo $subject->created_date ?></td>
      <td> 
        <?php echo anchor('admin/subjects/edit/'.$subject->id,'Edit','class="btn btn-warning"'); ?>
      </td>
      <td></td>
      <td> 
        <?php echo anchor('admin/subjects/delete/'.$subject->id,'Delete','class="btn btn-danger"'); ?>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php } ?>
