<!-- Delete -->
<div class="modal fade" id="view<?php echo $row['voter_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-3 font-weight-normal" id="myModalLabel"><i class="fas fa-eye"></i> VIEW MORE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                $view = mysqli_query($conn, "SELECT * FROM voters WHERE voter_id='" . $row['voter_id'] . "'");
                $view_row = mysqli_fetch_array($view);
                ?>
                <div class="container-fluid">
                    <div class="form-group">
                        <p><b> FIRST NAME: </b><?php echo $view_row['firstname']; ?></p>
                        <p><b> LAST NAME: </b><?php echo $view_row['lastname']; ?></p>
                        <p><b> SEX: </b><?php echo $view_row['sex']; ?></p>
                        <p><b> EMAIL ADDRESS: </b><?php echo $view_row['email_address']; ?></p>
                        <p><b> USERNAME: </b><?php echo $view_row['username']; ?></p>
                        <p><b> DEPARTMENT: </b><?php echo $view_row['department']; ?></p>
                        <p><b> STATUS: </b><?php echo $view_row['status']; ?></p>
                        <p><b> DATE REGISTERED: </b><?php echo $view_row['date']; ?></p>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fas fa-check"></i> OK</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->