<div class="container col-10">
    <table class="table table-bordered col-12 mx-auto">
        <a name="" id="" class="btn btn-primary" href="index.php?controller=user&action=add" role="button">Thêm tài khoản</a>
        <thead class="bg-dark text-white">
            <tr class="border-dark">
                <th>Tài khoản</th>
                <th>Cấp</th>
                <th>Tên</th>
                <th>Số điện thoại</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $user) {
                    echo "<tr>";
                    echo "<td class=\"border-dark\" scope=\"row\">" . $user['username'] . "</td>";
                    echo "<td class=\"border-dark\" scope=\"row\">" . ($user['level']==1?'Quản Lý':'Nhân Viên') . "</td>";
                    echo "<td class=\"border-dark\">" . $user['name'] . "</td>";
                    echo "<td class=\"border-dark\">" . $user['phone'] . "</td>";
                    echo '<td class="border-dark">';
                    echo '<a href="index.php?controller=user&action=update&id=' . $user['id'] . '">Sửa</a>';
                    echo $user['level']==0?'<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa tài khoản này không?\')" href="index.php?controller=user&action=delete&id=' . $user['id'] . '">Xóa</a>':'';
                    echo '<a class="ml-3" href="index.php?controller=user&action=password&id=' . $user['id'] . '">Đổi Pass</a>';
                    echo "</tr>";
                }
            }
            ?>
    </table>
</div>