<!-- Add New Candidate -->
<div class="modal fade" id="addCandidate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="myModalLabel"><i class="fas fa-user-plus"></i>&nbsp; New Candidate</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="../functions/add.php" method="POST" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter Candidate's Name" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Sex</label>
                        <select name="sex" class="form-control custom-select" required autofocus>
                            <option hidden>Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Position</label>
                        <select name="position" id="position" class="form-control custom-select" required autofocus>
                            <option hidden selected>Position</option>
                            <option>President</option>
                            <option>Vice President </option>
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
                        <label>Department</label>
                        <select name="department" id="department" class="form-control custom-select" required>
                            <option hidden>Department</option>
                            <option>Public Health (PUH)</option>
                            <option>Optometry (OPT)</option>
                            <option>Prosthetic and Orthopedics (POT)</option>
                            <option>Dental Technology (DNT)</option>
                            <option>Biomedical Technology (BMT)</option>
                            <option>Environmental Health Science (EHS)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" value="<?php echo $edit_row['img']; ?>">
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer justify-content-between">
                        <button type="submit" name="addCandidate" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancel</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>