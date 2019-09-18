<?php
$conn = mysqli_connect('localhost','TuyenDzVoDich','Tuyennguyentu98','db_sieuthi');
//kiem tra ket noi	
if(!$conn){
	exit('Ket noi khong thanh cong');
}
echo 'Ket noi thanh cong';
$i =1;
$sql = "SELECT * FROM `tbl_thongtinhanghoa`";
//kiểm tra
if($result = mysqli_query($conn,$sql)){
	while($row = mysqli_fetch_array($result)){
		//mysqli_fetch_array($result): $result la ket qua cua truy van, 
		//la ket qua tra ve cac ham mysqli_query()
		//Ham se tra ve mang ket hop hoac llien tuc chua thong tin cua hang 
		//hiển thị dữ liệu
		echo "Dữ liệu thứ ".$i.'gồm: ' . $row['MaHangHoa']. '-'.$row['TenHangHoa']. '-'.$row['Gia']. '-'.$row['SoLuong']. '-'.$row['MieuTa'];
		//tăng $i lên 1
		$i++;
	}
	echo 'Thành công';
}

?>