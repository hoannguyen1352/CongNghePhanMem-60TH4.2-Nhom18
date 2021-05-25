<?php
include_once "./assets/layouts/navbar.php";
include_once "./assets/layouts/header.php"
?>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-10">
      <?php
      if (isset($data)) {
        foreach ($data as $table) {
          if ($table['status'] == '0'){?>
            <a href="./index.php?controller=table&action=order&id=<?php echo $table['id'] ?>" class="m-3 pt-4 pb-4 pr-5 pl-5 btn btn-secondary text-white" id = "<?php echo $table['id'] ?>" name="table" onclick="" ><?php echo $table['name']?></a>
          <?php }
          else {?> <a href="./index.php?controller=table&action=order&id=<?php echo $table['id'] ?>" class="m-3 pt-4 pb-4 pr-5 pl-5 btn btn-success text-white" id = "<?php echo $table['id'] ?>" name="table" ><?php echo $table['name'] ?></a>
        <?php }}} ?>
    </div>
  </div>
</div>
<?php include_once "./assets/layouts/footer.php" ?>