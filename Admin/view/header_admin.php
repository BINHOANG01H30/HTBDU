<?php
session_start();
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
   <title>ADMIN HTBDU </title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="../images/logo/HTBDU-logo_ad.png" type="image/png" />
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
   <!-- dropzone css -->
   <link rel="stylesheet" href="./asset/css/dropzone.css">
   <!-- calendar file css -->
   <link rel="stylesheet" href="./asset/css/semantic.min.css" />
   <!-- Dropzone css-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone.css" integrity="sha512-b3Wb3Os4sxJRdYkfCWtFjvuN/OlfBNtBGJknON+zbxU6M7GRYdII8m1W7TMsls/kwuwtq1wt7TvuF58Sd/4AGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Dropzone js-->
   <!-- fancy box js -->
   <link rel="stylesheet" href="./asset/css/jquery.fancybox.css" />
   <script src="../js/jquery-3.1.1.min.js"></script>
   <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
   <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script src="./asset/js/table.js"></script>
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   <script>
      $(document).ready(function() {
         $('#sp_datatable').DataTable();
      });
      $(function() {
         $('[data-toggle="tooltip"]').tooltip()
      });
   </script>
</head>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <a href="index.php"><img class="logo_icon img-responsive" src="../images/logo/logo_icon.png" alt="#" /></a>
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     <div class="user_img"><img class="img-responsive" src="../images/layout_img/user_img.jpg" alt="#" /></div>
                     <div class="user_info">
                        <?php
                        if ($_SESSION["position"] == 2) {
                           echo "<h6>" . $_SESSION['username'] . " &#128520</h6>
                               <p><span class='online_animation'></span> Online</p>";
                        } else {
                           header("location: ../index.php");
                           exit();
                        }
                        ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <h4>MENU</h4>
               <ul class="list-unstyled components">
                  <li class="active">
                     <a href="?action=home"><i class="fa fa-pie-chart yellow_color"></i> <span>Thống kê</span></a>
                  </li>
                  <li><a href="?action=ql_user&id=0"><i class="fa fa-user orange_color"></i> <span>Quản lý người dùng</span></a></li>
                  <li>
                     <a href="?action=ql_cart&id_cart=0"><i class="fa fa-ticket purple_color"></i> <span>Quản lý hóa đơn</span></a>
                  </li>
                  <li><a href="?action=ql_hinhanh"><i class="fa fa-file-image-o purple_color2"></i> <span>Quản lý hình ảnh</span></a></li>
                  <li><a href="?action=ql_sp&category_id=0"><i class="fa fa-folder  blue1_color"></i> <span>Quản lý khóa học</span></a></li>
                  <li><a href="setting.php"><i class="fa fa-cog yellow_color"></i> <span>Cài đặt</span></a></li>
               </ul>
            </div>
         </nav>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="index.php"><img class="img-responsive" src="../images/logo/logo.png" alt="#" /></a>
                     </div>
                     <div class="right_topbar">
                        <div class="icon_info">
                           <ul>
                              <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                              <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                              <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                           </ul>
                           <ul class="user_profile_dd">
                              <li>
                                 <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../images/layout_img/user_img.jpg" alt="#" />
                                    <span class="name_user">
                                       <?php
                                       if ($_SESSION["position"] == 2) {
                                          echo  $_SESSION['username'];
                                       } else {
                                          header("location: ../index.php");
                                          exit();
                                       }
                                       ?>
                                    </span>
                                 </a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="profile.html">Thông tin cá nhân</a>
                                    <a class="dropdown-item" href="settings.html">Cài đặt</a>
                                    <a class="dropdown-item" href="help.html">Trợ giúp</a>
                                    <a class="dropdown-item" href="logout.php"><span>Đăng xuất</span> <i class="fa fa-sign-out"></i></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>