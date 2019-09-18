<html>
<head>

<head>
<body>
<?php
$ma = $_POST['fMaHangHoa'];
$ten = $_POST['fTenHangHoa'];
$gia = $_POST['fGia'];
$sl = $_POST['fSoLuong'];
$mieuta = $_POST['fMieuTa'];
	$con = mysqli_connect("localhost","TuyenDzVoDich","Tuyennguyentu98","sieu_thi");
	$query = "UPDATE `tbl_thongtinhanghoa` SET  TenHangHoa='{$ten}',`Gia`='{$gia}',`SoLuong`='{$sl}',`MieuTa`='{$mieuta}' WHERE MaHangHoa = '{$ma}'";

	$result = mysqli_query($con,$query);
	if($result)
	{
		header("location:Update.php");
	}
	else {
		echo $ma;
		echo $ten;
		echo $gia;
		echo $sl;
		echo $mieuta;
		echo "not update";
	}
?>
</body>
