<?php
include_once "./assets/layouts/navbar.php";
?>
<div class="container-fluid">
  <?php
    if(User::isadmin())
    {
      echo '<a style="margin-left: 200px" name="" id="" class="btn btn-primary mt-5" href="index.php?controller=table&action=create" role="button">Thêm <i class="fas fa-plus"></i></a>';
    }
  ?>
  <div class="row" style="margin-top: 25px;">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <?php
      if (isset($data)) { ?>
      <div class="container">
        <div class="row">
        <?php
        foreach ($data as $table) {
          echo '<div class="col-md-2">';
          if ($table['status'] == '0') { if(User::isadmin()){
            echo '<a onclick="return confirm(\'Bạn có muốn xóa bàn này không?\')" href="./index.php?controller=table&action=delete&id='.$table['id'].'" role="button"><i class="far fa-times-circle"></i></a>';
            }?>
            <a href="./index.php?controller=book&action=show&id=<?php echo $table['id'] ?>" class="m-2 mb-4 pt-4 pb-4 pr-5 pl-5 btn btn-secondary text-white" style="width:146px;" id="<?php echo $table['id'] ?>" name="table" onclick="">Bàn <?php echo $table['id'] ?></a>
          <?php } else {
            if(User::isadmin())
          {
            echo '&nbsp;';
          }?> <a href="./index.php?controller=book&action=show&id=<?php echo $table['id'] ?>" class="m-2 mb-4 pt-4 pb-4 pr-5 pl-5 btn btn-success text-white" style="width:146px;" id="<?php echo $table['id'] ?>" name="table">Bàn <?php echo $table['id'] ?></a>
      <?php }
          echo '</div>';
        }
        echo '</div>';
      echo '</div>';
      } ?>
    </div>
  </div>
</div>
<?php include_once "./assets/layouts/footer.php" ?>
