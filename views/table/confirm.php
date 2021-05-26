<div class="wrap" style="width: 600px;margin: 0 auto;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div style="margin-top:30px">
                    <h2 class="text-primary text-center">Thanh toán hóa đơn Bàn <?php echo $id; ?></h2>
                </div>
                <form>
                    <div class="alert alert-danger">
                        <div class="row form-group">
                            <label class="col-form-label col-md-5"><b>Tổng tiền : </b></label>
                            <div class="col-md-5">
                                <?php if (isset($drink) && $drink[1] != NULL) { ?>
                                    <input type="text" value="<?php echo $sum ?>" class="form-control text-danger font-weight-bold" disabled="disabled">
                                <?php } else { ?> <input type="text" value="0" class="form-control text-danger font-weight-bold" disabled="disabled"> <?php } ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-md-5"><b>Giảm giá : </b></label>
                            <div class="col-md-5">
                                <?php if (isset($drink) && $drink[1] != NULL) { ?>
                                    <input type="text" value="<?php echo $sale; ?>" class="form-control text-danger font-weight-bold" disabled="disabled">
                                <?php } else { ?> <input type="text" value="0" class="form-control text-danger font-weight-bold" disabled="disabled"> <?php } ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-md-5"><b>Tổng cộng : </b></label>
                            <div class="col-md-5">
                                <?php if (isset($drink) && $drink[1] != NULL) { ?>
                                    <input type="text" value="<?php echo $totalpay ?>" class="form-control text-danger font-weight-bold" disabled="disabled">
                                <?php } else { ?> <input type="text" value="0" class="form-control text-danger font-weight-bold" disabled="disabled"> <?php } ?>
                            </div>
                        </div>
                        <p>
                            <a href="index.php" class="btn btn-success d-flex justify-content-center">Xác nhận</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>