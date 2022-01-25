<?php
$loi = array();
$tb["user"] = $tb["pass"] = $tb["email"] = $tb["oke"] = NULL;
$user = $pass = $email = NULL;
if (isset($_POST["ok"])) {
    if (empty($_POST["user"])) {
        $tb["user"] = "Vui lòng nhập tài khoản";
    } else {
        $user = $_POST["user"];
    }
    if (empty($_POST["pass"])) {
        $tb["pass"] = "Vui lòng nhập mật khẩu";
    } else {
        $pass = $_POST["pass"];
    }
    if (empty($_POST["email"])) {
        $tb["email"] = "Vui lòng nhập Email";
    } else {
        $email = $_POST["email"];
    }
    if ($user && $email && $pass) {
        $us = "root";
        $pas = "";
        $conn = mysqli_connect("localhost", $us, $pas, "htb_doantn");
        mysqli_select_db($conn, "htb_doantn");
        mysqli_query($conn, "insert into htb_user(username, email,password_hash,position) value('$user','$email','$pass','1')");

        $tb["oke"] = "Đăng ký tài khoản thành công";
        mysqli_close($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Đăng ký</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="../images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="../style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="../css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="../css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="../css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="../css/custom.css" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="../js/semantic.min.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210" src="../images/logo/logo.png" alt="#" />
                        </div>
                    </div>
                    <div class="login_form">
                        <form action="register.php" method="post">
                            <fieldset>
                                <div class="field">
                                    <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
                                    <div class="col-sm-8">
                                        <p class="col-sm-12" style="color:red;"><?php echo $tb["oke"] ?></p>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label_field">Tài Khoản</label>
                                    <input type="text" name="user" placeholder="Nhập tài khoản" />
                                </div>
                                <div class="field">
                                    <label for="inputPassword3" class="label_field">Mật khẩu</label>
                                    <input type="password" name="pass" placeholder="Nhập mật khẩu" />
                                </div>
                                <div class="field">
                                    <label for="inputPassword3" class="label_field">Email</label>
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button type="submit" name="ok" class="main_bt">Đăng ký</button>
                                    <a href="login.php" class="btn btn-default">Đăng nhập</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="../js/animate.js"></script>
    <!-- select country -->
    <script src="../js/bootstrap-select.js"></script>
    <!-- nice scrollbar -->
    <script src="../js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="../js/custom.js"></script>
</body>

</html>