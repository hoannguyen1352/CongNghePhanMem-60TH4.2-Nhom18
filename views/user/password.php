<div class="container col-10">
    <form action="index.php?controller=user&action=password&id=<?php echo $data['id']; ?>" method="post">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tài Khoản</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" value="<?php echo $data['username']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mật Khẩu</label>
            <div class="col-sm-10">
                <input type="password" name="password1" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nhập Lại Mật Khẩu</label>
            <div class="col-sm-10">
                <input type="password" name="password2" class="form-control"  required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Nhập lại mật khẩu không khớp!" : "" ?></label>
        </div>
        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=user&action=update&id=<?php echo $data['id']; ?>" role="button">Thoát</a>
        </div>
    </form>
</div>
