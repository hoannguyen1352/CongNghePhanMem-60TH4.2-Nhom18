<div class="container-fluid col-8 my-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-primary"> Chi tiết hóa đơn <?php echo $id?> </h1>
            <table class="table table-bordered table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Mã đồ uống</th>
                        <th>Tên đồ uống</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($data) && is_array($data)) {
                        foreach ($data as $billdetail) {
                    ?>
                            <tr>
                                <td><?php echo $billdetail['did'];?></td>
                                <td><?php echo $billdetail['name']; ?></td>
                                <td><?php echo $billdetail['number'];?></td>
                                <td><?php echo $billdetail['price'];?></td>
                                <td><?php echo $billdetail['total'];?></td>
                            </tr>
                    <?php
                        }
                    } ?>
                </tbody>
            </table>
            <a href="index.php?controller=bill" class="btn btn-success m-1 float-right">Quay lại</a>
        </div>
    </div>
</div>