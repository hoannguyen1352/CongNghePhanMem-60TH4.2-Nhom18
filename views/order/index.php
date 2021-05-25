<?php
include_once "./assets/layouts/adminnavbar.php";
include_once "./assets/layouts/header.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h2 class="m-2">Menu</h2>

            <form method="post" action="http://localhost/website_qlcafe/index.php?controller=order&action=order&id=<?php echo $data1['id'] ?>">
                <div class="form-group">
                    <?php
                    if (isset($data)) {
                        foreach ($data as $drinks) { ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <li style="list-style:none;">
                                            <div>
                                                <img src="https://img.thuthuatphanmem.vn/uploads/2018/10/04/anh-dep-ben-ly-cafe-den_110730392.jpg" style="height: 75px;width: 75px;text-align: center;">
                                            </div>
                                            <div>
                                                <span class="product-name"><?php echo $drinks['name']; ?></span><br>
                                                <strong><?php echo $drinks['price'] ?></strong>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Số lượng</label>
                                        <input type="text" name="<?php echo $drinks['id'] ?>" value="0">
                                    </div>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
                <button type="submit">thêm</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="m-2 text-success"><?php echo $data1['name']; ?></h2>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá bán</th>
                                <th scope="col">Thành Tiền</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($drink) && $drink[1] != NULL) {
                                for ($i = 1; $i <= sizeof($drink); $i += 1) {
                            ?>
                                    <tr>
                                        <td><?php echo $drink[$i]['stt']; ?></td>
                                        <td><?php echo $drink[$i]['ten']; ?></td>
                                        <td><a href="./index.php?controller=order&action=updown&idtb=<?php echo $data1['id'] ?>&iddd=<?php echo $drink[$i]['id'] ?>">giảm</a><?php echo $drink[$i]['soluong']; ?><a href="./index.php?controller=order&action=updown&idtb=<?php echo $data1['id'] ?>&iddu=<?php echo $drink[$i]['id'] ?>">tăng</a></td>
                                        <td><?php echo $drink[$i]['gia']; ?></td>
                                        <td><?php echo $drink[$i]['thanhtien']; ?></td>
                                        <td><a href="./index.php?controller=order&action=delete&idtb=<?php echo $data1['id'] ?>&idd=<?php echo $drink[$i]['id'] ?>"><i class="fas fa-pen ml-3">Hủy</i></a></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12">

                        <div class="row form-group">
                            <label class="col-form-label"><b>Mã hội viên</b></label>
                            <div class="col-md-8">
                                <?php if (isset($drink) && $drink[1] != NULL) { ?>
                                    <input type="text" class="form-control total-pay">
                                <?php } else { ?> <input type="text" value="0" class="form-control total-pay" disabled="disabled"> <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6p-1 d-flex justify-content-center">
                            <a href="./index.php?controller=order&action=pay&id=<?php echo $data1['id'] ?>" class="p-2 rounded border border-danger btn btn-success"> Thanh Toán </a>
                        </div>
                        <div class="col-md-6 p-1 d-flex justify-content-center">
                            <a href="#" class="p-2 rounded border border-success btn btn-danger"> Hủy </a>
                        </div>
                    </div>
                        
                    </div>
                </div>
                <div class="col-md-6">
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
                                <input type="text" value="<?php echo $sum ?>" class="form-control " disabled="disabled">
                            <?php } else { ?> <input type="text" value="0" class="form-control " disabled="disabled"> <?php } ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-form-label col-md-4"><b>Tổng cộng</b></label>
                        <div class="col-md-8">
                            <?php if (isset($drink) && $drink[1] != NULL) { ?>
                                <input type="text" value="<?php echo $sum ?>" class="form-control " disabled="disabled">
                            <?php } else { ?> <input type="text" value="0" class="form-control" disabled="disabled"> <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include_once "./assets/layouts/footer.php"; ?>