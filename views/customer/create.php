<?php
include_once('./assets/layouts/header.php');
?>
    <form action="http://localhost/cnpm/index.php?controller=customer&action=processCreate" method="post">
      <div class="container-fruid" align="center">
      <div class="form-group col-4" align="left">
      <h1 class="" style="text-align:left"></br>Add customer</h1>
          <label for="">Name</label>
          <input type="text"class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
          <label for="">Phone</label>
          <input type="text"class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
          <button type="submit" style="margin-top:15px" class="btn btn-primary">Add</button>
          <a name="" id="" class="btn btn-secondary" href="index.php?controller=customer&action=index" role="button" style="margin-top:15px">Back</a>
        </div>
        </div>
      </form>