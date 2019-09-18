<?php
	$con = mysqli_connect("localhost","TuyenDzVoDich","Tuyennguyentu98","sieu_thi");
	$id = $_GET['id'];
	$query = "DELETE FROM `tbl_thongtinhanghoa` WHERE MaHangHoa = '{$id}'";
	$result = mysqli_query($con,$query);
	if($result){
		header("location:Update.php");
		die;
	}
	else{
		echo "not delete";
	}
?>