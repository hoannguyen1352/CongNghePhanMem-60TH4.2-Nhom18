<?php
include_once "./assets/layouts/navbar.php";
include_once "./assets/layouts/header.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h2 class="m-2 text-primary">Menu</h2>
            
            <form method="post" action="./index.php?controller=table&action=order&id=<?php echo $data1['id'] ?>" class="">
                    <?php
                    if (isset($data)) {
                        foreach ($data as $drinks) { ?>
                        <div class="form-group d-flex justify-content-between float-left">
                            <div class="container-fluid border border-success rounded m-2 ">
                                <div class="row p-2">
                                    <div class="p-3">
                                            <div>
                                                <img src="https://img.thuthuatphanmem.vn/uploads/2018/10/04/anh-dep-ben-ly-cafe-den_110730392.jpg" class="rounded align-center" style="height: 100px;width: 100px;text-align: center;">
                                            </div>
                                            <div class="text-center">
                                                <span class="product-name"><?php echo $drinks['name']; ?></span><br>
                                                <strong><?php echo $drinks['price'] ?></strong>
                                            </div>
                                            <div >
                                        <label for="">Số lượng: </label>
                                        <input type="text" style="width: 30px;" name="<?php echo $drinks['id'] ?>" value="0">
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                         </div>
                    <?php }
                    }
                    ?>
                <button type="submit" class="btn btn-success pt-2 pb-2 pr-5 pl-5 float-right" style="margin-right: 70px;">thêm</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="m-2 text-primary"><?php echo $data1['name']; ?></h2>
            <div class="row">
                <div class="col-md-12" style="height: 350px;overflow:auto;">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="thead-dark">
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
                                        <td><a href="./index.php?controller=table&action=updown&idtb=<?php echo $data1['id'] ?>&iddd=<?php echo $drink[$i]['id'] ?>" class="float-left"><i class="fas fa-minus"></i></a><?php echo $drink[$i]['soluong']; ?><a href="./index.php?controller=table&action=updown&idtb=<?php echo $data1['id'] ?>&iddu=<?php echo $drink[$i]['id'] ?>" class="float-right"><i class="fas fa-plus"></i></a></td>
                                        <td><?php echo $drink[$i]['gia']; ?></td>
                                        <td><?php echo $drink[$i]['thanhtien']; ?></td>
                                        <td><a href="./index.php?controller=table&action=delete&idtb=<?php echo $data1['id'] ?>&idd=<?php echo $drink[$i]['id'] ?>" class="text-danger"><i class="fas fa-times ml-3"></i></a></td>
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
                    <form action="index.php?controller=table&action=pay&id=<?php echo $data1['id'] ?>" method="post">
                        <div class="col-md-12">

                            <div class="row form-group">
                                <label class="col-form-label"><b>Mã hội viên</b></label>
                                <div class="col-md-8">
                                    <?php if (isset($drink) && $drink[1] != NULL) { ?>
                                        <input type="text" name="cid" class="form-control">
                                    <?php } else { ?> <input type="text" value="" class="form-control" disabled="disabled"> <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 p-1 d-flex justify-content-center">
                                    <button type="submit" class="p-2 rounded border border-danger btn btn-success"> Thanh Toán </button>
                                </div>
                                <div class="col-md-6 p-1 d-flex justify-content-center">
                                    <a href="index.php" class="p-2 rounded border border-success btn btn-danger"> Quay lại </a>
                                </div>
                            </div>
                        </div>
                    </form>
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
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "./assets/layouts/footer.php"; ?>