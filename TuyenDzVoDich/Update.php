<html>
<head>
<title>Update</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost","TuyenDzVoDich","Tuyennguyentu98","sieu_thi");
$query = "SELECT * FROM tbl_thongtinhanghoa";
$result = mysqli_query($con,$query);
?>
<table>
	<tr>
	<th>Ma Hang Hoa</th>
	<th>Ten Hang Hoa</th>
	<th>Gia</th>
	<th>So Luong</th>
	<th>Mieu Ta</th>
	<th>Sua</th>
	<th>Xoa</th>
	</tr>
<?php
if($result)
	while($row = mysqli_fetch_array($result)){
		echo "<tr> <form action = 'PageUpdate.php' method = 'post' >";
		echo "<td> <input type = 'text' name = 'fMaHangHoa' value = '".$row['MaHangHoa']."'/> </td>";
		echo "<td> <input type = 'text' name = 'fTenHangHoa' value = '".$row['TenHangHoa']."'/> </td>";
		echo "<td> <input type = 'text' name = 'fGia' value = '".$row['Gia']."'/> </td>";
		echo "<td> <input type = 'text' name = 'fSoLuong' value = '".$row['SoLuong']."'/> </td>";
		echo "<td> <input type = 'text' name = 'fMieuTa' value = '".$row['MieuTa']."'/> </td>";
		echo "<td> <input type = 'submit' name = 'fUpdate' value = 'Update'/> </td>";
		echo "<td> <a href='delete.php?id=".$row['MaHangHoa']."'>Delete</a> </td>";
		echo "</form> </tr>";
	}

?>
</table>
<?php
	mysqli_close($con);
?>
</body>
</html>