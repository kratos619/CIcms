<h1 class="page-header">User Add</h1>

<?php if(validation_errors()){ ?>
<div class="alert alert-dismissible alert-danger">
<?php echo validation_errors(); ?>
</div>
<?php } ?>
<?php echo form_open('admin/users/edit/'.$selected_user->id) ?>

<div class="form-group">
  <label for="">First Name</label>
  <input type="text" value="<?php echo $selected_user->first_name ?>" name="first_name" id="" class="form-control" placeholder="First Name" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Last Name</label>
  <input type="text" name="last_name" id="" class="form-control" value="<?php echo $selected_user->last_name ?>" placeholder="Last Name" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">User Name</label>
  <input type="text" name="username" value="<?php echo $selected_user->username ?>" id="" class="form-control" placeholder="User Name" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Email Address</label>
  <input type="email" value="<?php echo $selected_user->email ?>" require name="email" id="" class="form-control" placeholder="User Name" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Password</label>
  <input type="password" require name="password" id="" class="form-control" placeholder="Password" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Confirm Password</label>
  <input type="password" require name="confirm_password" id="" class="form-control" placeholder="Password" aria-describedby="helpId">
</div>
<div class="form-group">
  <input type="submit" value="Register User" class="btn btn-block btn-update">
</div>
<?php echo form_close()?> 