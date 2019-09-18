<?php
//cú pháp kết nối đến database dùng mysqli 
//mysqli_connect(hostname, user name, password, databasename);
/*
$hostname = 'localhot'
$userName = 'root'
$password = ''
$databaseName = 'SieuTHi'
*/
$conn = mysqli_connect('localhost','TuyenDzVoDich','Tuyennguyentu98','db_sieuthi');
//kiem tra ket noi	
if(!$conn){
	exit('Ket noi khong thanh cong');
}
echo 'Ket noi thanh cong';

//query và insert
$query = "INSERT INTO `tbl_thongtinhanghoa`(`MaHangHoa`, `TenHangHoa`, `Gia`, `SoLuong`, `MieuTa`) 
VALUES ('HH08',N'Cua Hoàng Đế',1000000,1,N'Cu a hoàng đế'),
('HH09',N'Cua Hoàng Đế',1000000,1,N'Cu a hoàng đế'),
('HH10',N'Cua Hoàng Đế',1000000,1,N'Cu a hoàng đế')";
if(mysqli_query($conn,$query))
	echo 'Thêm Thành Công';
else
	echo 'khong thanh cong . Lỗi'.mysql_error($conn);
$query1 = "DELETE FROM `tbl_thongtinhanghoa` WHERE MaHangHoa = 'HH05'";
if(mysqli_query($conn,$query1))
	echo 'Xóa thành công';
else 
	echo 'Xóa không thành công';
?>