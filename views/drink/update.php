<div class="container col-10">
    <form action="index.php?controller=drink&action=update&id=<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Giá</label>
            <div class="col-sm-10">
                <input type="number" name="price" class="form-control" value="<?php echo $data['price']; ?>" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Ảnh</label>
            <div class="col-sm-10">
                <img src="<?php echo $data['image']; ?>" style="width:100px;height:100px">
                <input type="hidden" value="<?php echo $data['image']; ?>" name="image">
                <input type="file" name="image">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Ghi chú</label>
            <div class="col-sm-10">
                <input type="text" name="note" class="form-control" value="<?php echo $data['note']; ?>" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger" for=""><?php echo (isset($_GET['result']) && $_GET['result']) ? "Thành công" : "" ?></label>
        </div>
        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=drink" role="button">Thoát</a>
        </div>
    </form>
</div>
