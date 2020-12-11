<!-- Edit Candidate -->
<div class="modal fade" id="edit<?php echo $row['candidate_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="myModalLabel"><i class="fas fa-user-edit"></i> Edit Candidate</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "SELECT * FROM candidate WHERE candidate_id='" . $row['candidate_id'] . "'");
                $edit_row = mysqli_fetch_array($edit);
                ?>
                <form method="POST" enctype="multipart/form-data" action="../functions/edit.php?candidate_id=<?php echo $edit_row['candidate_id']; ?>">
                    <div class="form-group">
                        <label class="lead">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $edit_row['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="gender">Sex</label>
                        <select class="form-control custom-select" name="sex" required autofocus>
                            <option hidden><?php echo $edit_row["sex"]; ?></option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="position">Position</label>
                        <select name="position" id="position" class="form-control custom-select" required>
                            <option hidden><?php echo $edit_row["position"]; ?></option>
                            <option>President</option>
                            <option>Vice President</option>
                            <option>Secretary General</option>
                            <option>Assistant Secretary General</option>
                            <option>Financial Secretary</option>
                            <option>Treasurer</option>
                            <option>Director Of Sports</option>
                            <option>Director Of Socials</option>
                            <option>Director Of Health</option>
                            <option>Director of Research</option>
                            <option>PRO </option>
                            <option>Provost</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="department">Department</label>
                        <select name="department" id="department" class="form-control custom-select" required autofocus>
                            <option hidden><?php echo $edit_row["department"]; ?></option>
                            <option>Public Health (PUH)</option>
                            <option>Optometry (OPT)</option>
                            <option>Prosthetic and Orthopedics (POT)</option>
                            <option>Dental Technology (DNT)</option>
                            <option>Biomedical Technology (BMT)</option>
                            <option>Environmental Health Science (EHS)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Upload Image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" value="<?php echo $edit_row['img']; ?>">
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer justify-content-between">
                        <button type="submit" name="editCandidate" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancel</button>
                    </div>


                </form>
            </div>
            <!-- /modal-body -->
        </div>
    </div>
</div>