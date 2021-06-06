<div class="container col-10">
    <form action="index.php?controller=user&action=add" method="post">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tài Khoản</label>
            <div class="col-sm-8">
                <input type="text" name="username" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mật Khẩu</label>
            <div class="col-sm-8">
                <input type="password" name="password" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label>
            <div class="col-sm-8">
                <input type="text" name="name" placeholder="Tên" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Số Điện Thoại</label>
            <div class="col-sm-8">
            <input type="tel" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" name="phone" class="form-control" placeholder="10 Số Điện Thoại" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Tài khoản bị trùng" : "" ?></label>
        </div>
        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=user" role="button">Thoát</a>
        </div>
    </form>
</div>
