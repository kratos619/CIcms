<!-- <h1 class="page-header">User Add</h1> -->
<h1 class="page-header">Subject   Edit</h1>
<br/>
<br>

<?php if(validation_errors()){ ?>
<div class="alert alert-dismissible alert-danger">
<?php echo validation_errors(); ?>
</div> 
<?php } ?>

<?php echo form_open('admin/subjects/edit/'.$selected_id->id) ?>
    <div class="form-group">
        <input type="text" value="<?php echo  $selected_id->name ?>" placeholder="Subject Name" name="name" id="sub_name" class="form-control"/>
    </div>
        <div class="form-group">
        <input type="submit" value="Update Subject" class="btn btn-success"/>
    </div>
<?php echo form_close()?> 