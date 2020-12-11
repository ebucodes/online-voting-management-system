<!-- Edit admin -->
<div class="modal fade" id="edit<?php echo $row['admin_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-maroon">
                <h4 class="modal-title" id="myModalLabel"><i class="fas fa-user-edit"></i> Edit Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id='" . $row['admin_id'] . "'");
                $edit_row = mysqli_fetch_array($edit);
                ?>
                <form method="POST" enctype="multipart/form-data" action="functions/edit.php?admin_id=<?php echo $edit_row['admin_id']; ?>">
                    <div class="form-group">
                        <label class="lead">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $edit_row['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label class="lead">Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $edit_row['username']; ?>">
                    </div>

                    <div class="form-group">
                        <label class="lead">Password</label>
                        <input type="text" name="password" class="form-control" value="<?php echo $edit_row['password']; ?>">
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer justify-content-between">
                        <button type="submit" name="editAdmin" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancel</button>
                    </div>


                </form>
            </div>
            <!-- /modal-body -->
        </div>
    </div>
</div>