<h1 class="page-header">User Add</h1>

<?php if(validation_errors()){ ?>
<div class="alert alert-dismissible alert-danger">
<?php echo validation_errors(); ?>
</div>
<?php } ?>
<?php echo form_open('admin/users/add') ?>

<div class="form-group">
  <label for="">First Name</label>
  <input type="text" name="first_name" id="" class="form-control" placeholder="First Name" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Last Name</label>
  <input type="text" name="last_name" id="" class="form-control" placeholder="Last Name" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">User Name</label>
  <input type="text" name="username" id="" class="form-control" placeholder="User Name" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Email Address</label>
  <input type="email" require name="email" id="" class="form-control" placeholder="User Name" aria-describedby="helpId">
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
  <input type="submit" value="Register User" class="btn btn-block btn-primary">
</div>
<?php echo form_close()?> 