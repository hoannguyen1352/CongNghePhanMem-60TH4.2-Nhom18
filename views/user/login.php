<form action="http://localhost/cnpm/index.php?controller=user&action=login" method="post">
<div class="form-group">
  <label for="">User Name</label>
  <input type="text"class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
  <br>
  <label for="">Password</label>
  <input type="password"class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
  <label for=""><?php echo isset($error)?$error:''; ?></label>
  <button type="submit">Login</button>
</div>
</form>