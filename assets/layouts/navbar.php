<?php
if (User::isLogin()) {
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
    <a class="navbar-brand text-white" href="index.php">Bàn cafe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto col-12">
        <div class="col-10">
        <?php
        if (User::isadmin()) {
        ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Quản lý
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item btn" href="index.php?controller=drink">Quản lý đồ uống</a>
            </div>
          </li>
        <?php
        }
        ?>
        <!-- thêm các button chức năng vào đây -->
        </div>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?controller=customer&action=index">Customers</a>
        </li>
        <li class="nav-item col-2">
          <a href="index.php?controller=user&action=logout" class="nav-link active text-white">Đăng xuất</a>
        </li>
      </ul>
    </div>
  </nav>
<?php
}
?>