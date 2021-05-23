<?php
include_once('./assets/layouts/header.php');
    echo '<form action="http://localhost/cnpm/index.php?controller=customers&action=processCreate" method="post">';
        echo '<div class="form-group">';
          echo '<label for=""></br>id </br></label>';
          echo '<input type="int"class="form-control" name="id" id="" aria-describedby="helpId" placeholder="" ';
          echo '</br>';
          echo '<label for=""></br>name </br></label>';
          echo '<input type="text"class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" ';
          echo '</br> ';
          echo '<label for=""></br>phone </br></label>';
          echo '<input type="text"class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="" ';
          echo '</br> ';
          echo '<label for=""></br>total </br></label>';
          echo '<input type="int"class="form-control" name="total" id="" aria-describedby="helpId" placeholder="" ';
          echo '</br> </br> </br>';
          echo '<button type="submit">Create</button>';
          echo '</div>';
          echo '</form>';
?>