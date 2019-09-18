<?php
	session_start();
	$connect = mysqli_connect("localhost","TuyenDzVoDich","Tuyennguyentu98","UserLogin");
	if(isset($_POST['Login']))
	{
    //lấy dữ liệu từ form login
    $userName = $_POST['user'];
    $passWord = $_POST['pass'];

    $query = "SELECT * FROM Account WHERE UserName = '{$userName}' and PassWord = '{$passWord}'";
    if($result = mysqli_query($connect,$query))
    if(mysqli_num_rows($result)==1){
       $_SESSION['message']='Login Thanh Cong';
	   $_SESSION['UserName'] = $userName;
	   header("location:TimKiem.html");
    } 
	else{
		echo("Login failed");
	}
	
}
    // if($result >0){
    //     echo "Login success Welcome";
    // }
    // else{
    //     echo "Login failed!";
    // }
	session_destroy();
?>