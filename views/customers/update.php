<?php
include_once('./assets/layouts/header.php');
if(isset($data))
{
    echo '<form action="http://localhost/cnpm/index.php?controller=customers&action=update" method="post">';
        echo '<div class="form-group">';
          echo '<label for="">id </label>';
          echo '<input type="int"class="form-control" name="id" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $customers['id']; ?>"';
          echo '<br>';
          echo '<label for="">name </label>';
          echo '<input type="text"class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $customers['name']; ?>"';
          echo '<br>';
          echo '<button type="submit">Update</button>';
          echo '</div>';
          echo '</form>';
}
?>