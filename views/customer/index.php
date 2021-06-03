<?php
include_once('./assets/layouts/header.php');
?>
<div id="main">
    <div class="container">
    <form class="form-inline">
        <div class="form-group">
        <h1 class="" style="text-align:left"></br>Hội viên</h1>
        <a name="" id="" class="btn btn-primary ml-3 mt-5" href="index.php?controller=customer&action=create" role="button">Thêm <i class="fas fa-plus"></i></a>
        </div>
    </form>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Số điện thoại</th>
                    <th>Tổng chi</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            if(isset($data))
            {
                foreach($data as $customers)
                {
                    echo '<tr>';
                    echo '<td>'.$customers['id'].'</td>';
                    echo '<td>'.$customers['name'].'</td>';
                    echo '<td>'.$customers['phone'].'</td>';
                    echo '<td>'.$customers['total'].'</td>';
                    echo '<td><a href="./index.php?controller=customer&action=update&id='.$customers['id'].'" role="button"><i class="fas fa-pen ml-3"></i></a>';
                    if(User::isadmin())
                    {
                        echo '<a onclick="return confirm(\'Bạn có muốn hủy thẻ hội viên này không?\')" href="./index.php?controller=customer&action=delete&id='.$customers['id'].'" role="button"><i class="fas fa-trash-alt ml-3"></i></a>';
                    }
                    echo '</td>';
                    echo '</tr>';
                }
            }
            ?>               
            </tbody>
        </table>
    </div>
</div>
