<!-- Add New Candidate -->
<div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-maroon">
                <h4 class="modal-title" id="myModalLabel"><i class="fas fa-plus-circle"></i>&nbsp; New Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="functions/add.php" method="POST" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password" required autofocus>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer justify-content-between">
                        <button type="submit" name="addAdmin" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancel</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>