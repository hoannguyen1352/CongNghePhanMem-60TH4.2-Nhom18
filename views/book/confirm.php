<div class="wrap" style="width: 500px;margin: 0 auto;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div style="margin-top:30px">
                    <h2 class="text-primary text-center">Thanh toán hóa đơn Bàn <?php echo $id; ?></h2>
                </div>
                <form action="index.php?controller=book&action=pay&id=<?php echo $id ?>&cid=<?php echo $cid; ?>" method="post">
                    <div class="alert alert-danger" style="height: 240px;">
                        <div class="row form-group">
                            <label class="col-form-label col-md-5"><b>Tổng tiền : </b></label>
                            <div class="col-md-6">
                                    <input type="text" name="sum" value="<?php echo $sum; ?>" class="form-control text-danger font-weight-bold" disabled="disabled">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-md-5"><b>Giảm giá : </b></label>
                            <div class="col-md-6">
                                    <input type="text" value="<?php echo $sale; ?>" class="form-control text-danger font-weight-bold" disabled="disabled">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-md-5"><b>Tổng cộng : </b></label>
                            <div class="col-md-6">
                                    <input type="text" name="totalpay" value="<?php echo $totalpay; ?>" class="form-control text-danger font-weight-bold" readonly>
                            </div>
                        </div>
                        <div class="float-right col-md-7">
                            <button type="submit" class="btn btn-success m-1">Xác nhận</button>
                            <a href="index.php?controller=book&action=show&id=<?php echo $id; ?>" class="btn btn-secondary m-1">Quay lại</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>