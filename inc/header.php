<!DOCTYPE html>
<html lang="en">

<head>
	<title>HTBDU</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="HBTDU project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/HTBDU-logo.png" type="image/png" />
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<style>
		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #e9d8f4;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			padding: 12px 16px;
			z-index: 1;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}
	</style>
</head>

<body>
	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->
			<div class="top_bar">
				<div class="top_bar_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									<ul class="top_bar_contact_list">
										<li>
											<div class="question">Đặt câu hỏi cho chúng tôi?</div>
										</li>
										<li>
											<i class="fa fa-phone" aria-hidden="true"></i>
											<div>+8435-163-978</div>
										</li>
										<li>
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
											<div>htbdu.web@gmail.com</div>
										</li>
									</ul>
									<div class="top_bar_login ml-auto">
										<?php
										if (isset($_SESSION['username'])) {
											echo "<div class='login_button'><a href='Admin/logout.php'>Đăng xuất</a></div>";
										} else {
											echo "<div class='login_button'><a href='Admin/login.php'>Đăng ký/Đăng nhập</a></div>";
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Content -->
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container">
									<a href="?action=home">
										<div class="logo_text">HTB<span>DU</span></div>
									</a>
								</div>
								<nav class="main_nav_contaner ml-auto">
									<ul class="main_nav">
										<li class="active"><a href="?action=home">Trang chủ</a></li>
										<li><a href="?action=about">Giới thiệu</a></li>
										<li><a href="?action=courses&id_nsp=0">Khóa học</a></li>
										<!-- <li><a href="?action=blog">Blog</a></li> -->
										<li><a href="?action=contact">Liên hệ</a></li>
									</ul>
									<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

									<!-- Hamburger -->

									<div class="shopping_cart"><a href="?action=cart"><i class="fa fa-money" aria-hidden="true"></i></a></div>
									<?php
									if (isset($_SESSION['username'])) {
										echo "<div class='shopping_cart'><a href='Admin/logout.php''><i class='fa fa-user' style= font-size:20px; aria-hidden='true'></i> 
										 " . $_SESSION['username'] . "</a></div>";
										echo '<div class="btn-group">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#">Thông tin tài khoản</a>
											<a class="dropdown-item" href="#">Khóa học của tôi</a>
											<a class="dropdown-item" href="#">Trợ giúp</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="Admin/logout.php">Đăng xuất</a>
										</div>
									</div>';
									} else {
										echo "";
									}
									?>
									<!-- Example single danger button -->

									<div class="hamburger menu_mm">
										<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
									</div>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Search Panel -->
			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form method="post" action="" class="header_search_form">
									<input type="hidden" name="action" value="courses">
									<input name="tu_khoa" type="search" class="search_input" placeholder="Tìm kiếm khóa học" required="required">
									<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Menu -->

		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
			<div class="menu_close_container">
				<div class="menu_close">
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="search">
				<form action="#" class="header_search_form menu_mm">
					<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
					<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
						<i class="fa fa-search menu_mm" aria-hidden="true"></i>
					</button>
				</form>
			</div>
			<nav class="menu_nav">
				<ul class="menu_mm">
					<li class="menu_mm"><a href="?action=home">Trang chủ</a></li>
					<li class="menu_mm"><a href="?action=about">Giới thiệu</a></li>
					<li class="menu_mm"><a href="?action=courses">Khóa học</a></li>
					<li class="menu_mm"><a href="?action=blog">Blog</a></li>
					<li class="menu_mm"><a href="?action=contact">Liên hệ</a></li>
				</ul>
			</nav>
		</div>