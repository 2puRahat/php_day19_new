<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark">
                    <div class="card-header text-center font-weight-bold text-white">Registration Form</div>
                    <div class="card-body">
                        <h4><?php echo isset($message) ? $message: '';?></h4>
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 text-center font-weight-bold text-white">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" required  class="form-control" name="full_name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 text-center font-weight-bold text-white">Email Adress</label>
                                <div class="col-md-9">
                                    <input type="email" required class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 text-center font-weight-bold text-white">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="mobile"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-danger" name="register_btn" value="Submit"/>
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
