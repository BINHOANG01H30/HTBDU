<?php

use Google\Service\AdExchangeBuyerII\Client;

if (!isset($_SESSION)) {
   session_start();
}
$loi = array();
$loi["username"] = $loi["password"] = $oi["ok"] = NULL;
$username = $Password = NULL;
if (isset($_POST["ok"])) {
   if (empty($_POST["user"])) {
      $loi["username"] = "Vui lòng nhập tài khoản";
   } else {
      $username = $_POST["user"];
   }
   if (empty($_POST["pass"])) {
      $loi["password"] = " Vui lòng nhập mật khẩu";
   } else {
      $password = $_POST["pass"];
   }

   if ($username && $password) {
      $us = "root";
      $pas = "";
      $conn = mysqli_connect("localhost", $us, $pas, "htb_doantn");
      mysqli_select_db($conn, "htb_doantn");
      //truy vấn dưc liệu
      $result = mysqli_query($conn, "select * from htb_user where username='$username' and password_hash='$password'");
      if (mysqli_num_rows($result) == 1) {
         $data = mysqli_fetch_assoc($result);
         $_SESSION["position"] = $data["position"];
         if ($_SESSION["position"] == 2) {
            $_SESSION["username"] = $username;
            header("location:index.php");
            exit();
         } else if (isset($_SESSION["id_sp"])) {
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $data["email"];
            $id_sp = ($_SESSION['id_sp']);
            header("location:../?action=cart&id_sp=$id_sp");
            exit();
         } else {
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $data["email"];
            header("location:../?action=home");
            exit();
         }
      } else {
         $oi["ok"] = "Sai tài khoản hoặc mật khẩu";
      }
      //đóng csdl
      mysqli_close($conn);
   }
}
?>

<?php
require_once '../vendor/autoload.php';

//Login with Google
$clientID = '755415186219-ujrep11g42sl3b4e618ps5su8c6hn5m1.apps.googleusercontent.com';
$clientSecret = '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';
$rediectUrl = 'http://localhost:8080/DDATN_ADMIN/admin/login.php';

// create client request to google

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($rediectUrl);
$client->addScope('profile');
$client->addScope('email');

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
   <title>Login</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="./images/HTBDU_logo_ad.png" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="./asset/css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="./asset/style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="./asset/css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="./asset/css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="./asset/css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="./asset/css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="./asset/css/custom.css" />
   <!-- calendar file css -->
   <link rel="stylesheet" href="./asset/js/semantic.min.css" />
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
                  <form action="login.php" method="post">
                     <fieldset>
                        <div class="field">
                           <label class="label_field">Tài Khoản</label>
                           <input type="text" name="user" placeholder="Nhập tài khoản" />
                        </div>
                        <div class="field">
                           <label for="inputPassword3" class="label_field">Mật khẩu</label>
                           <input type="password" name="pass" placeholder="Nhập mật khẩu" />
                        </div>
                        <div class="field">
                           <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
                           <div class="col-sm-8">
                              <p class="col-sm-12" style="color:red;"><?php echo $oi["ok"] ?></p>
                           </div>
                        </div>
                        <div class="field">
                           <label class="label_field hidden">hidden label</label>
                           <label class="form-check-label"><input type="checkbox" class="form-check-input"> Nhớ mật khẩu</label>
                           <a class="forgot" href="register.php">Quên mật khẩu?</a>
                        </div>
                        <div class="field margin_0">
                           <label class="label_field hidden">hidden label</label>
                           <button type="submit" name="ok" class="main_bt">Đăng nhập</button>
                           <?php
                           if (isset($_GET['code'])) {
                              $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                              $client->setAccessToken($token);

                              // Getting User Profile
                              $gauth = new Google_Service_Oauth2($client);
                              $google_info = $gauth->userinfo->get();
                              $email = $google_info->email;
                              $name = $google_info->name;
                              $code = $_GET['code'];
                              $_SESSION['username'] = $name;
                              $_SESSION['email'] = $email;
                              header("location:../?action=home&code=$code");
                              exit();
                           } else {
                              echo "<a href='" . $client->createAuthUrl() . "' class='btn cur-p btn-outline-danger'><i class='fa fa-google fa-fw'></i> Google+</a>";
                           }
                           ?>
                           <a href="register.php" class="btn btn-default">Đăng ký</a>
                        </div>
                     </fieldset>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="./asset/js/jquery.min.js"></script>
   <script src="./asset/js/popper.min.js"></script>
   <script src="./asset/js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="./asset/js/animate.js"></script>
   <!-- select country -->
   <script src="./asset/js/bootstrap-select.js"></script>
   <!-- nice scrollbar -->
   <script src="./asset/js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="./asset/js/custom.js"></script>
</body>

</html>