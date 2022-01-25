<?php
	include 'inc/header.php';
	include 'Mailer/sendEmail.php';
?>

  <!--alert messages start-->
  <?php echo $alert; ?>
    <!--alert messages end-->
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Trang chủ</a></li>
								<li>Liên hệ</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		<div class="contact_map">

			<!-- Google Map -->
			
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<div id="map"></div>
					</div>
				</div>
			</div>

		</div>

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Liên hệ</div>
							<form action="" class="comment_form" method="post">
								<div>
									<div class="form_title">Tên</div>
									<input type="text" class="comment_input" required="required" name="name">
								</div>
								<div>
									<div class="form_title">Email</div>
									<input type="text" class="comment_input" required="required" name="email">
								</div>
								<div>
									<div class="form_title">Lời nhắn</div>
									<textarea class="comment_input comment_textarea" required="required name" name="message"></textarea>
								</div>
								<div>
									<button type="submit" class="comment_button trans_200" name="submit">Gửi</button>
								</div>
							</form>
						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Thông tin liên hệ</div>
							<div class="contact_info_text">
								<p>Chúng tôi xây dựng sản phẩm bằng niềm đam mê theo đuổi sự ưu việt, tập trung vào xây dựng độ tin cậy về chất lượng của sản phẩm. Chúng tôi không đi đường tắt và không chấp nhận thỏa hiệp về chất lượng.</p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Trường ĐH CNTT & TT Việt Hàn</div>
								<ul class="location_list">
									<li>470 Trần Đại Nghĩa, Hòa Quý, Ngũ Hành Sơn, Đà Nẵng</li>
									<li>+8435 163 978</li>
									<li>info.htbdu@gmail.com</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Văn phòng HTBDU </div>
								<ul class="location_list">
									<li>470 Trần Đại Nghĩa, Hòa Quý, Ngũ Hành Sơn, Đà Nẵng</li>
									<li>+8435 163 978</li>
									<li>info.htbdu@gmail.com</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
		<div class="container">
				<div class="row">
					<div class="col">
						<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

							<!-- Newsletter Content -->
							<div class="newsletter_content text-lg-left text-center">
								<div class="newsletter_title">Đăng ký ngay</div>
								<div class="newsletter_subtitle">Đăng ký nhận tin tức mới nhất về điện thoại thông minh và các ưu đãi lớn mà chúng tôi cung cấp</div>
							</div>

							<!-- Newsletter Form -->
							<div class="newsletter_form_container ml-lg-auto">
								<form action="" method="post" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
									<input type="email" name="email" class="newsletter_input" placeholder="Nhập email" required="required">
									<button type="submit" name="submit" class="newsletter_button">Đăng ký</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
<?php
	include 'inc/footer/ft_contact.php';
?>	
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
</script>