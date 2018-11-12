<h1 class="page-header">User Index</h1>

<?php if($user_details == null){ ?>
<p class="lead">No Details</p>
<?php }else{ ?> 
<table class="table table-striped  table-hover table-sm table-responsive-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th>Last Name</th>
      <th scope="col">User Name</th>
      <th>Email</th>
      <th>Created At</th>
      <th></th>
      <th>Action</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php foreach($user_details as $user): ?>
    <tr>
      <th scope="row"><?php echo $user->id; ?></th>
      <td>
            <?php echo $user->first_name ; ?>
      </td>
      <td>
        <?php echo $user->last_name; ?>
      </td>
      <td><?php echo $user->username; ?></td>
      <td>
       <?php echo $user->email; ?>
      </td>
      <td><?php echo $user->create_date; ?></td>
      <td> 
        <?php echo anchor('admin/users/edit/'.$user->id,'Edit','class="btn btn-warning btn-sm"'); ?>
      </td>
      <td> 
        <?php echo form_open('admin/users/delete/'.$user->id); ?>
          <input type="submit" class="btn btn-danger btn-sm" value="delete">
          <?php echo form_close(); ?>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php } ?>
