<?php 
	$conn =mysqli_connect('localhost','TuyenDzVoDich','Tuyennguyentu98','QuanLySV');
	echo ('kết nối được database');
	
	//tạo bảng
	$sql = "Create table if not exists SinhVien1( MaSV varchar(50) primary key, TenSV varchar(100), NgaySinh date, DiaChi varchar(50))";
	if(mysqli_query($conn,$sql))
	{
		echo "Thêm thành công bảng Sinh Vien";
	}
	$sql1 = "Insert into SinhVien1(MaSV,TenSV,NgaySinh,DiaChi) Values('SV001',N'Tuyên','1998-7-27',N'Hà Nội'),
	('SV002',N'Việt','1998-7-7',N'Hà Nội'),
	('SV003',N'Nam',N'1998-3-19',N'Hà Nội'),
	('SV004',N'Tiến','1998-4-4',N'Thái Bình')";
	if(mysqli_query($conn,$sql1))
	{
		echo ("Thêm dữ liệu thành công");
	}
?>																																																																																																																																																										