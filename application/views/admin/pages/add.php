<h1 class="page-header">Pages add</h1>

<br/>
<br>

<?php if(validation_errors()){ ?>
<div class="alert alert-dismissible alert-danger">
<?php echo validation_errors(); ?>
</div>
<?php } ?>

<?php echo form_open('admin/pages/add') ?>

    <div class="form-group">
        <input type="text" placeholder="Page Name" name="title" id="sub_name" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">select Subjects Belong to</label>
        <select name="subject_id" class="form-control" id="exampleFormControlSelect1">
        <option>Select Option</option>
        <?php foreach($subjects as $sub){ ?>
        <option value="<?php echo $sub->id; ?>"><?php echo $sub->name; ?></option>
        <?php } ?>
        </select>
    </div>
     <div class="form-group">
    <label for="Content">Content</label>
        <textarea name="body" class="form-control"   cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <?php echo form_label('Published' ,'is_published');?>
          <?php echo form_radio('is_published' ,1 , true);?> Yes
          <?php echo form_radio('is_published' ,0 , false);?> No
    </div>
   
    <div class="form-group">
        <?php echo form_label('Featured' ,'is_fetured');?>
          <?php echo form_radio('is_fetured' ,1 , true);?> Yes
          <?php echo form_radio('is_fetured' ,0 , false);?> No
    </div>

    <div class="form-group">
        <?php echo form_label('Add To Menu' ,'in_menu');?>
          <?php echo form_radio('in_menu' ,1 , true);?> Yes
          <?php echo form_radio('in_menu' ,0 , false);?> No
    </div>

    <div class="form-group">
            <label for="Orer">Select Order</label>
        <input type="number" name="order" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="Add Subject" class="btn btn-success"/>
    </div>
<?php echo form_close()?> 