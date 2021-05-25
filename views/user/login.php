<style>
  .login-form {
    width: 340px;
    margin: 50px auto;
    font-size: 15px;
  }

  .login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
  }

  .login-form h2 {
    margin: 0 0 15px;
  }

  .form-control,
  .btn {
    min-height: 38px;
    border-radius: 2px;
  }

  .btn {
    font-size: 15px;
    font-weight: bold;
  }
</style>
<div class="login-form">
  <form action="index.php?controller=user&action=login" method="post">
    <h2 class="text-center">Log in</h2>
    <div class="form-group">
      <input name="username" type="text" class="form-control" placeholder="username" required="required">
    </div>
    <div class="form-group">
      <input name="password" type="password" class="form-control" placeholder="password" required="required">
    </div>
    <div class="form-group">
      <label for=""><?php echo isset($error) ? $error : ''; ?></label>
      <button type="submit" class="btn btn-primary btn-block">Log in</button>
    </div>
  </form>
</div>
