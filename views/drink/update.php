<form action="index.php?controller=drink&action=update&id=<?php echo $data['id']; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control" value="<?php echo $data['name']; ?>" aria-describedby="helpId">
        <label for="">Price</label>
        <input type="number" name="price" id="" class="form-control" value="<?php echo $data['price']; ?>" aria-describedby="helpId">
        <label for="">Image</label>
        <img src="<?php echo $data['image']; ?>" style="width:100px;height:100px">
        <input type="hidden" value="<?php echo $data['image']; ?>" name="image">
        <input type="file" name="image" value="<?php echo $data['image']; ?>">
        <label for="">Note</label>
        <input type="text" name="note" id="" class="form-control" value="<?php echo $data['note']; ?>" aria-describedby="helpId">
        <label for=""><?php echo (isset($_GET['result'])&&$_GET['result'])?"Thành công":"" ?></label>
        <button class="btn btn-primary" name="update  a" type="submit">Update</button>
        <a name="" id="" class="btn btn-primary" href="index.php?controller=drink" role="button">Exit</a>
    </div>
</form>