<form action="index.php?controller=drink&action=add" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="">
        <label for="">Price</label>
        <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId"value="">
        <label for="">Image</label>
        <input type="file" name="image">
        <label for="">Note</label>
        <input type="text" name="note" id="" class="form-control" placeholder="" aria-describedby="helpId"value="">
        <label for=""><?php echo (isset($_GET['result'])&&$_GET['result'])?"Thành công":"" ?></label>
        <button class="btn btn-primary" type="submit">Add</button>
        <a name="" id="" class="btn btn-primary" href="index.php?controller=drink" role="button">Exit</a>
    </div>
</form>