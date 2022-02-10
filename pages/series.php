<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-info">
                    <div class="card-header text-center font-weight-bold">Sum Of Series</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 text-center font-weight-bold">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" required value="<?php echo isset($result['starting_number'])? $result['starting_number'] : '';?>" class="form-control" name="starting_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 text-center font-weight-bold">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" required value="<?php echo isset($result['ending_number'])? $result['ending_number'] : '';?>" class="form-control" name="ending_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 text-center font-weight-bold">Result</label>
                                <div class="col-md-9">
                                   <textarea class="form-control"><?php echo isset($result['result'])? $result['result'] : '';?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-danger" name="series_btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>