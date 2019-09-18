<?php 
	$con = mysqli_connect('localhost','TuyenDzVoDich','Tuyennguyentu98','');
	if(!$con){
		exit('Ket noi khong thanh cong');
	}
	echo 'Ket noi thanh cong';
?>