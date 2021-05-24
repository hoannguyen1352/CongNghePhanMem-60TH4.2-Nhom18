<a name="" id="" class="btn btn-primary" href="index.php?controller=drink&action=add" role="button">Add Drink</a>
<table class="table table-bordered col-11 mx-auto">
    <thead class="bg-dark text-white">
        <tr class="border-dark">
            <th>Tên đồ uống</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Ghi chú</th>
            <th style="width: 23%;">Update|Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($data) && is_array($data)) {
            foreach ($data as $drink) {
                echo "<tr>";
                echo "<td class=\"border-dark\" scope=\"row\">" . $drink['name'] . "</td>";
                echo "<td class=\"border-dark\">" . $drink['price'] . "</td>";
                echo "<td class=\"border-dark\"><img src=\"".$drink['image']."\" style=\"width:100px;height:100px\"></td>";
                echo "<td class=\"border-dark\">" . $drink['note'] . "</td>";
                echo '<td class="border-dark">';
                echo '<a href="index.php?controller=drink&action=update&id=' . $drink['id'] . '">Update</a>';
                echo '<a onclick="return confirm(\'Bạn có muốn xóa đồ uống này không?\')" href="index.php?controller=drink&action=delete&id=' . $drink['id'] . '">Delete</a>';
                echo "</tr>";
            }
        }
        ?>
</table>