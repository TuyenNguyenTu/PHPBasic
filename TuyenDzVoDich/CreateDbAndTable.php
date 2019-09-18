<?php 
include "connection.php";
$sql = "Create database if not exists UserLogin";
if(mysqli_query($con,$sql))
	echo("Create database success");
$connect = mysqli_connect("localhost","TuyenDzVoDich","Tuyennguyentu98","UserLogin");
if($connect)
	echo("Ket noi database thanh cong");
$query = "Create table if not exists 	( UserName varchar(50) primary key, PassWord varchar(50) not null)";
if(mysqli_query($connect,$query))
	echo("Tao bang thanh cong");
$query1 = "Insert into Account(UserName,PassWord) values ('admin','admin')";
if(mysqli_query($connect,$query1))
	echo("Them du lieu thanh cong");
?>
