<h1 class="page-header">Subjects Index</h1>

<?php if($page_details == null){ ?>
<p class="lead">No Details</p>
<?php }else{ ?> 
<table class="table table-striped  table-hover table-sm table-responsive-md">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">User Name</th>
      <th>Publish</th>
      <th>Featured</th>
      <th>Menu</th>
      <th>Create Date</th>
      <th></th>
      <th>Action</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php foreach($page_details as $page): ?>
    <tr>
      <th scope="row"><?php echo $page->id; ?></th>
      <td>
            <?php echo $page->title ; ?>
      </td>
      <td><?php echo $page->user_id; ?></td>
      <td>
        <?php
         if($page->is_published == 1) {
          echo  $status_publish = 'Yes';
        }else{
           echo $status_publish = 'No';
        }
        ?>
        </td>
      <td>
        <?php 
         if($page->is_fetured == 1) {
          echo  $status_featured = 'Yes';
        }else{
           echo $status_featured = 'No';
        }
        ?>
      </td>
      <td>
        <?php if( $page->in_menu == 1) {
            echo "Yes";
        }else{
            echo "No";
        } ?>
      </td>
      <td><?php echo $page->created_date; ?></td>
       <td> 
        <?php echo anchor('admin/pages/show/'.$page->id,'View','class="btn btn-inverse btn-sm"'); ?>
      </td>
      <td> 
        <?php echo anchor('admin/pages/edit/'.$page->id,'Edit','class="btn btn-warning btn-sm"'); ?>
      </td>
      <td> 
        <?php echo anchor('admin/pages/delete/'.$page->id,'Delete','class="btn btn-danger btn-sm"'); ?>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php } ?>
