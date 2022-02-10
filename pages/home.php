<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-success">
                    <div class="card-header text-center font-weight-bold">Prime Number</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 font-weight-bold">Enter Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="given_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 font-weight-bold">Result</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result)? $result : '';?>" class="form-control" name=""/>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-danger" name="btn" value="Submit"/>
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
