<h1 class="page-header">User Login</h1>
 
        <?php if(isset($login_failed)){ ?>
            <div class="alert alert-dismissible alert-danger">
            <?php echo $this->session->flashdata('login_failed');?>
            </div>
        <?php } ?>
<div class="card">
<div class="card-header text-center">
    CMS Login
  </div>
<div class="card-body">
<?php echo form_open(); ?>

<?php if(validation_errors()){ ?>
<div class="alert alert-dismissible alert-danger">
<?php echo validation_errors(); ?>
</div>
<?php } ?>
<br>
            <div class="form-group">
              <label for="">UserName</label>
              <input type="text" name="username" id="" class="form-control" placeholder="UserName" aria-describedby="helpId">
        
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control" placeholder="Password" aria-describedby="helpId">
    
            </div>
             <div class="form-group">
              
              <input type="submit" value="Log in" id="" class="btn btn-primary btn-block">
    
            </div>
        <?php echo form_close() ;?>
        
</div>
<div class="card-footer text-center text-muted">
     @<?php echo date("Y") ?>
  </div>
</div>
