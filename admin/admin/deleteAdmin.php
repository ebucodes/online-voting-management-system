<!-- Delete -->
<div class="modal fade" id="del<?php echo $row['admin_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-3 font-weight-normal" id="myModalLabel">NOTICE!!!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <form class="form-signin" method="POST" enctype="multipart/form-data" action="functions/delete.php?admin_id=<?php echo $row['admin_id']; ?>">
                 <?php
                    $del=mysqli_query($conn,"SELECT * FROM admin WHERE admin_id='".$row['admin_id']."'");
                    $delete_row=mysqli_fetch_array($del);
                 ?>
            <div class="container-fluid">
                <p class="lead">
                Are you sure you want to delete <b style="text-transform: uppercase;"><?php echo $delete_row['name']; ?></b> from the Candidates list?
                </p>              
             </div> 
                
             <div class="modal-footer justify-content-between">
               <button type="submit" class="btn btn-danger" name="deleteAdmin"><i class="fas fa-trash"></i> Delete</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancel</button>
            </div>
            </form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->
