<?php 
include 'connection.php';
$sql = "CREATE DATABASE IF NOT EXISTS QuanLySV";
if(mysqli_query($con,$sql))
	echo "Đã tạo database thành công";
?>