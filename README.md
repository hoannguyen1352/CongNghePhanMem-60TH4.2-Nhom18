# CongNghePhanMem-60TH4.2-Nhom18
Web được viết theo mô hình MVC
// Các bảng trong db

`accounts` (`id`, `username`, `password`, `level`, `token`, `name`, `phone`)

`tables` (`id`, `name`, `status`, `infor`)

`drinks` (`id`,`name`,`price`,`image`,`note`)

`customers` (`id`,`name`,`phone`,`total`)

`bills` (`id` ,`cid` ,`tid`,`date`)
cid:customer id ,tid:table id

`billdetail`(`id`,`bid`,`did`,`number`,`total`)
bid:bill id,did:drink id

//Cách thức hoạt động của mô hình MVC:
+từ index.php,nhận các 'controller' và 'action' trên url,sau đó include file 'controller' ở thư mục controllers,sau đó gọi function 'action';