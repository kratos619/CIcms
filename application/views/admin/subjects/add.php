<!-- <h1 class="page-header">User Add</h1> -->
<h1 class="page-header">Subject   Add</h1>
<br/>
<br>

<?php if(validation_errors()){ ?>
<div class="alert alert-dismissible alert-danger">
<?php echo validation_errors(); ?>
</div>
<?php } ?>

<?php echo form_open('admin/subjects/add') ?>

    <div class="form-group">
        <input type="text" placeholder="Subject Name" name="name" id="sub_name" class="form-control"/>
    </div>
        <div class="form-group">
        <input type="submit" value="Add Subject" class="btn btn-success"/>
    </div>
<?php echo form_close()?> 