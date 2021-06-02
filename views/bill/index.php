<div class="container-fluid col-8 my-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-primary"> Danh sách hóa đơn</h1>
            <table class="table table-bordered table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Mã hội viên</th>
                        <th>Bàn</th>
                        <th>Thời gian</th>
                        <th>Tổng tiền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($data)) {
                        foreach ($data as $bills) {
                    ?>
                            <tr>
                                <td><?php echo $bills['id'];?></td>
                                <td><?php echo $bills['cid']!=''? $bills['cid'] : "Không"; ?></td>
                                <td><?php echo $bills['tid'];?></td>
                                <td><?php echo $bills['date'];?></td>
                                <td><?php echo $bills['sum'];?></td>
                                <td><a href="./index.php?controller=billdetail&action=read&id=<?php echo $bills['id']; ?>" class="btn text-primary"><i class='fas fa-eye'></i></a></td>
                            </tr>
                    <?php
                        }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>