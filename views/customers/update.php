<?php
include_once('./assets/layouts/header.php');
if(isset($data))
{
  echo '<form action="http://localhost/cnpm/index.php?controller=customers&action=processUpdate" method="post">';
    echo '<div class="container-fruid" align="center">';
      echo '<div class="form-group col-4" align="left">';
        echo '<h1 class="" style="text-align:left"></br>Update customer</h1>';
        echo '<label for="">ID </label>';
        echo '<input type="int" class="form-control" name="id" id="" aria-describedby="helpId" placeholder="" readonly value="'.$data['id'].'">';
        echo '<label for="">Name </label>';
        echo '<input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="'.$data['name'].'">';
        echo '<label for="">Phone </label>';
        echo '<input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="" value="'.$data['phone'].'">';
        echo '<label for="">Total </label>';
        echo '<input type="int" class="form-control" name="total" id="" aria-describedby="helpId" placeholder="" value="'.$data['total'].'">';
        echo '<button type="submit" style="margin-top:15px" class="btn btn-primary">Update</button>';
        echo '<a name="" id="" class="btn btn-secondary ml-1" href="index.php?controller=customers&action=index" role="button" style="margin-top:15px">Back</a>';
      echo '</div>';
    echo '</div>';
  echo '</form>';
}
?>