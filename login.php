<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="main">
            <div class="khungtieude">
                <div class="tieude">
                    Đăng nhập
                </div>
            </div>
            <form class="login" method="POST">
            <div class="khungnho">
                <br>
                <label>Tên đăng nhập</label>
                <br>
                <input type="username" name="username" value="" class="CD">
                <br>
                <br>
                <label>Mật khẩu</label>
                <br>
                <input type="password" name="password" value="" class="CD">
                <br>
                <br>
                <button type="submit" class="btnDN" name="login">Đăng nhập</button>
            </div>
            <?php
                if(isset($_POST["login"])) {
                    if($_POST["username"] == "admin" && $_POST["password"] == "1234") {
                        header("Location: ./home.html");
                    }
                }
            ?>
            </form>
    </div>               
</body>
</html>