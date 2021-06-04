<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 ">
            <h2 class="m-2 text-primary border-bottom ">Menu</h2>
            <form method="post" action="./index.php?controller=book&action=adddrink&id=<?php echo $data1['id'] ?>">
                <?php
                if ($dataDrinks) { ?>
                    <?php
                    foreach ($dataDrinks as $drinks) { ?>
                        <div class="form-group">
                            <div class="container-fluid border border-success rounded m-2 d-flex justify-content-center float-left" style="width:165px; height:200px;">
                                <div class="row p-2">
                                    <div class="text-center">
                                        <div>
                                            <img src="<?php echo $drinks['image'] ?>" class="rounded" style="height: 100px;width: 130px;">
                                        </div>
                                        <div>
                                            <strong class="text-danger"><?php echo $drinks['name']; ?></strong><br>
                                            <strong><?php echo $drinks['price'] ?></strong>
                                        </div>
                                        <div>
                                            <label for="">Số lượng: </label>
                                            <input type="text" style="width: 40px;" name="<?php echo $drinks['id'] ?>" value="0">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                <?php }
                }
                ?>
                <div class="col-md-12">
                <p> </p>
                 <button type="submit" class="btn btn-success pt-2 pb-2 pr-5 pl-5 float-left" style="margin-top: 85px;margin-left:10px;">thêm</button> </div>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="m-2 text-primary border-bottom"><?php echo $data1['name']; ?></h2>
            <div class="row">
                <div class="col-md-12" style="height: 450px;overflow:auto;">
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
                            <?php if ($infortable) {
                                foreach($infortable as $infor) {
                            ?>
                                    <tr>
                                        <td><?php echo $infor['stt']; ?></td>
                                        <td><?php echo $infor['name']; ?></td>
                                        <td><a href="./index.php?controller=book&action=updown&id=<?php echo $data1['id'] ?>&didd=<?php echo $infor['id'] ?>" class="float-left"><i class="fas fa-minus"></i></a><?php echo $infor['number']; ?><a href="./index.php?controller=book&action=updown&id=<?php echo $data1['id'] ?>&didu=<?php echo $infor['id'] ?>" class="float-right"><i class="fas fa-plus"></i></a></td>
                                        <td><?php echo $infor['price']; ?></td>
                                        <td><?php echo $infor['total']; ?></td>
                                        <td><a href="./index.php?controller=book&action=delete&id=<?php echo $data1['id'] ?>&did=<?php echo $infor['id'] ?>" class="text-danger"><i class="fas fa-times ml-3"></i></a></td>
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
                    <form action="index.php?controller=book&action=confirm&id=<?php echo $data1['id'] ?>" method="post">
                        <div class="col-md-12">

                            <div class="row form-group">
                                <label class="col-form-label"><b>Mã hội viên</b></label>
                                <div class="col-md-8">
                                    <?php if ($infortable) { ?>
                                        <input type="text" name="cid" class="form-control">
                                    <?php } else { ?> <input type="text" name="cid" value="" class="form-control" disabled="disabled"> <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 p-1 d-flex justify-content-center">
                                    <?php if($infortable){ ?>
                                    <button type="submit" class="p-2 rounded border border-danger btn btn-success"> Thanh Toán </button>
                                    <?php }else { ?>
                                    <button type="submit" class="p-2 rounded border border-danger btn btn-success" disabled="disabled"> Thanh Toán </button>
                                    <?php } ?>
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
                                <input type="text" value="<?php echo $sum ?>" class="form-control text-danger font-weight-bold" disabled="disabled">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
