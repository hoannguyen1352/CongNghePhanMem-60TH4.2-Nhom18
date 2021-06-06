<div class="container-fluid col-5 my-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-primary mb-5 text-center"> Thống kê doanh thu</h1>
            <form action="index.php?controller=bill&action=statistical" method="post" class="font-weight-bold">
                <div class="form-group">
                  <label>Từ </label>
                  <input type="date" name="date1" value="<?php if(isset($date1)) echo $date1; ?>">
                  <label>Đến </label>
                  <input type="date" name="date2" class="mr-5" value="<?php if(isset($date2)) echo $date2; ?>">
                  <button type="submit" class="btn btn-success">Thống kê</button>
                </div>
                <div class="form-group">
                  <label>Tổng doanh thu: </label>
                  <input type="text" value="<?php echo $sum; ?>" readonly style="width:80px;" class="text-center">VND
                </div>
            </form>
        </div>
    </div>
</div>
