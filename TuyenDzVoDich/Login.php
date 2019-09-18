<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <div id="frm">
        <form action="process.php" method="POST">
            <p>
                <lable>UserName:</lable>
                <input type="text" id="user" name="user"/>
            </p>
            <p>
                <lable>PassWord:</lable>
                <input type="password" id="pass" name="pass"/>
            </p>
            <p>
                <input type="submit" id="sub" value="Đăng nhập" name="Login"/>
            </p>
        </form>
    </div>
</body>
</html>