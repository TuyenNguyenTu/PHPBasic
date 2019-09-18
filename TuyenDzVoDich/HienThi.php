<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$conn =mysqli_connect('localhost','TuyenDzVoDich','Tuyennguyentu98','QuanLySV');
	echo ('Không kết nối được database');
$ID = $_POST["fID"];
$Name = $_POST["fname"];
$NgaySinh = $_POST["fNgaySinh"];
$DiaChi = $_POST["fAddress"];

$sql1 = "Insert into SinhVien(MaSV,TenSV,NgaySinh,DiaChi) Values('{$ID}',N'{$Name}','{$NgaySinh}',N'{$DiaChi}')";
if(mysqli_query($conn,$sql1))
	{
		echo ("Thêm dữ liệu thành công");
	}
?>



</body>