<?php include_once "./assets/layouts/header.php" ?>
  <div class="container-fluid bg-primary">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav navbar-nav float-right mr-3">
          <li class=" dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xin chào Admin</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Quản lý thẻ</a>
                <a class="dropdown-item" href="#">Quản lý đồ uống</a>
                <a class="dropdown-item" href="index.php?controller=user&action=logout">Đăng xuất</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <?php include_once "./assets/layouts/footer.php" ?>
