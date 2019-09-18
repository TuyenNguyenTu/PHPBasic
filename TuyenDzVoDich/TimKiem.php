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
	echo ('kết nối được database'). "<br/>";
$ID = $_POST["fSearch"];
$i =1;
$sql1 = "SELECT * FROM `sinhvien` WHERE MaSV Like '%{$ID}%'";
if($result = mysqli_query($conn,$sql1)){
while ($row = mysqli_fetch_array($result)){
	 echo " <b> Dữ liệu thứ ".$i.'gồm: ' . $row['MaSV']. '-'.$row['TenSV']. '-'.$row['NgaySinh']. '-'.$row['DiaChi']. "</b>";
	 $i = $i +1;
}
echo "<br/>";
echo "Thanh cong" ."<br/>";
}
if(mysqli_num_rows($result)==0){
	echo "Khong co ban ghi ban can tim";
}
?>
</body>