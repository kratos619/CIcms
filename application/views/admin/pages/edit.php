<h1 class="page-header">Pages Edit</h1>
<br/>
<br>

<?php if(validation_errors()){ ?>
<div class="alert alert-dismissible alert-danger">
<?php echo validation_errors(); ?>
</div>
<?php } ?>

<?php echo form_open('admin/pages/edit/'.$selected_page->id) ?>
    <div class="form-group">
        <input type="text" placeholder="Page Name" name="title" value="<?php echo $selected_page->title; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">select Subjects Belong to</label>
        <select name="subject_id" class="form-control" id="exampleFormControlSelect1">
            <select name="subject_id" class="form-control" id="exampleFormControlSelect1">
            <option>Select Option</option>
            <?php foreach($all_cat as $cat){ ?> 
            <option value="<?php echo $cat->id ?>"><?php echo $cat->name ?></option>
        <?php } ?>
        </select>
    </div>
     <div class="form-group">
    <label for="Content">Content</label>
        <textarea name="body" class="form-control"   cols="30" rows="10"><?php echo $selected_page->body ?></textarea>
    </div>
    <?php
    if($selected_page->is_published == 1){
        $yes = true;
        $no = false;
    }else{
        $yes = false;
        $no = true;
    }
    ?>
    <div class="form-group">
        <?php echo form_label('Published' ,'is_published');?>
          <?php echo form_radio('is_published' ,1 , $yes);?> Yes
          <?php echo form_radio('is_published' ,0 , $no);?> No
    </div>
       <?php
        if($selected_page->is_published == 1){
            $yes = true;
            $no = false;
        }else{
            $yes = false;
            $no = true;
        }
    ?>
    <div class="form-group">
        <?php echo form_label('Featured' ,'is_fetured');?>
          <?php echo form_radio('is_fetured' ,1 , $yes);?> Yes
          <?php echo form_radio('is_fetured' ,0 , $no);?> No
    </div>
       <?php
        if($selected_page->is_published == 1){
            $yes = true;
            $no = false;
        }else{
            $yes = false;
            $no = true;
        }
    ?>
    <div class="form-group">
        <?php echo form_label('Add To Menu' ,'in_menu');?>
          <?php echo form_radio('in_menu' ,1 , $yes);?> Yes
          <?php echo form_radio('in_menu' ,0 , $no);?> No
    </div>

    <div class="form-group">
        <input type="submit" value="Update Subject" class="btn btn-warning"/>
    </div>
<?php echo form_close()?> 
