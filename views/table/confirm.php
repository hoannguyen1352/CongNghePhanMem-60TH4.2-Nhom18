<div id="main">
    <div class="container">
        <form class="form-line">
            <div class="row form-group">
                <label class="col-form-label col-md-4"><b>Tổng tiền</b></label>
                <div class="col-md-8">
                    <?php if (isset($drink) && $drink[1] != NULL) { ?>
                        <input type="text" value="<?php echo $sum ?>" class="form-control" disabled="disabled">
                    <?php } else { ?> <input type="text" value="0" class="form-control" disabled="disabled"> <?php } ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-form-label col-md-4"><b>Giảm giá</b></label>
                <div class="col-md-8">
                    <?php if (isset($drink) && $drink[1] != NULL) { ?>
                        <input type="text" value="0" class="form-control " disabled="disabled">
                    <?php } else { ?> <input type="text" value="0" class="form-control " disabled="disabled"> <?php } ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-form-label col-md-4"><b>Tổng cộng</b></label>
                <div class="col-md-8">
                    <?php if (isset($drink) && $drink[1] != NULL) { ?>
                        <input type="text" value="0" class="form-control " disabled="disabled">
                    <?php } else { ?> <input type="text" value="0" class="form-control" disabled="disabled"> <?php } ?>
                </div>
            </div>
            <a href="index.php" class="btn btn-success float-right">Xác nhận</a>
        </form>
    </div>
</div>