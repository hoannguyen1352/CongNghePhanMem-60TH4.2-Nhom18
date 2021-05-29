<?php
include_once('./assets/layouts/header.php');
if(isset($data))
{
  echo '<form action="index.php?controller=customer&action=processUpdate" method="post">';
    echo '<div class="container-fruid" align="center">';
      echo '<div class="form-group col-4" align="left">';
        echo '<h1 class="" style="text-align:left"></br>Sửa thông tin hội viên</h1>';
        echo '<label for="">ID </label>';
        echo '<input type="int" class="form-control" name="id" id="" aria-describedby="helpId" placeholder="" readonly value="'.$data['id'].'">';
        echo '<label for="">Tên </label>';
        echo '<input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="'.$data['name'].'">';
        echo '<label for="">Số điện thoại </label>';
        echo '<input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="" value="'.$data['phone'].'">';
        echo '<label for="">Tổng chi </label>';
        echo '<input type="int" class="form-control" name="total" id="" aria-describedby="helpId" placeholder="" value="'.$data['total'].'">';
        echo '<button type="submit" style="margin-top:15px" class="btn btn-primary">Sửa</button>';
        echo '<a name="" id="" class="btn btn-secondary ml-1" href="index.php?controller=customer&action=index" role="button" style="margin-top:15px">Trở lại</a>';
      echo '</div>';
    echo '</div>';
  echo '</form>';
}
?>
