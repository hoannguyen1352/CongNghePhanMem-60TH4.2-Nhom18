<?php
include_once "./assets/layouts/navbar.php";
?>
<div class="container-fluid">
  <div class="row" style="margin-top: 100px;">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <?php
      if (isset($data)) {
        foreach ($data as $table) {
          if ($table['status'] == '0') { ?>
<<<<<<< HEAD
            <a href="./index.php?controller=book&action=show&id=<?php echo $table['id'] ?>" class="m-2 mb-4 pt-4 pb-4 pr-5 pl-5 btn btn-secondary text-white" style="width:146px;" id="<?php echo $table['id'] ?>" name="table" onclick=""><?php echo $table['name'] ?></a>
          <?php } else { ?> <a href="./index.php?controller=book&action=show&id=<?php echo $table['id'] ?>" class="m-2 mb-4 pt-4 pb-4 pr-5 pl-5 btn btn-success text-white" style="width:146px;" id="<?php echo $table['id'] ?>" name="table"><?php echo $table['name'] ?></a>
=======
            <a href="./index.php?controller=table&action=order&id=<?php echo $table['id'] ?>" class="m-2 mb-4 pt-4 pb-4 pr-5 pl-5 btn btn-secondary text-white" style="width:146px;" id="<?php echo $table['id'] ?>" name="table" onclick=""><?php echo $table['name'] ?></a>
          <?php } else { ?> <a href="./index.php?controller=table&action=order&id=<?php echo $table['id'] ?>" class="m-2 mb-4 pt-4 pb-4 pr-5 pl-5 btn btn-success text-white" style="width:146px;" id="<?php echo $table['id'] ?>" name="table"><?php echo $table['name'] ?></a>
>>>>>>> f928a89da8dec0c84e2916e856adf792497f6f36
      <?php }
        }
      } ?>
    </div>
  </div>
</div>
<?php include_once "./assets/layouts/footer.php" ?>
