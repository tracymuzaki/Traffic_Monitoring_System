<div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="addroute">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Add Route </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--`rid`, `road_id`, `fromm`, `too`, `status`-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Road Name (required)</label>
                                <select class="form-control" name="road_id" required>
                                    <option value="">--select road name--</option>
                                    <?php $rad = $dbh->query("SELECT * FROM roads");
                                    while ($rx = $rad->fetch(PDO::FETCH_OBJ)) { ?>
                                        <option value="<?=$rx->road_id; ?>"><?=$rx->road_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>From (required)</label>
                                <input class="form-control" name="fromm" type="text" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>To (required)</label>
                                <input class="form-control" name="too" type="text" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Road Status (required)</label>
                                <select class="form-control" name="status" required>
                                    <option value="">--select Road Status--</option>
                                    <option>Green</option>
                                    <option>Brown</option>
                                    <option>Red</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_route_btn_new_user_btn" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>