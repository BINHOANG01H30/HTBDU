<?php
include 'inc/header.php';
include 'inc/slider.php';
include 'Mailer/sendEmail.php';
?>
<!-- Features -->

<div class="features">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<h2 class="section_title">Mừng bạn đến với HTBDU</h2>
					<div class="section_subtitle">
						<p>Định hình con người, khẳng định tương lai</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row features_row">

			<!-- Features Item -->
			<div class="col-lg-3 feature_col">
				<a href="?action=teachers">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
						<h3 class="feature_title">Đội ngũ giảng dạy</h3>
						<div class="feature_text">
							<p>Có tâm, có tầm và chuyên môn cao</p>
						</div>
					</div>
				</a>
			</div>

			<!-- Features Item -->
			<div class="col-lg-3 feature_col">
				<a href="#">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Thư viện tài liệu</h3>
						<div class="feature_text">
							<p>Đáp ứng mọi nhu cầu tìm hiểu của khách hàng</p>
						</div>
					</div>
				</a>
			</div>

			<!-- Features Item -->
			<div class="col-lg-3 feature_col">
				<a href="?action=courses">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
						<h3 class="feature_title">Khóa học</h3>
						<div class="feature_text">
							<p>Mang lại nguồn tri thức chất lượng</p>
						</div>
					</div>
				</a>
			</div>

			<!-- Features Item -->
			<div class="col-lg-3 feature_col">
				<a href="?action=about">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Thành tựu</h3>
						<div class="feature_text">
							<p>Đã được chứng nhận là một trong số các hệ thống giáo dục trực tuyến tốt nhất hiện nay</p>
						</div>
					</div>
				</a>
			</div>

		</div>
	</div>
</div>

<!-- Popular Courses -->

<div class="courses">
	<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<h2 class="section_title">Các khóa học phổ biến</h2>
					<div class="section_subtitle">
						<p>Những khóa học có lượt mua nhiều nhất hiện tại cũng như đã được học viên đánh giá tích cực</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row courses_row">

			<!-- Course -->
			<?php foreach ($products as $product) { ?>
				<div class="col-lg-4 course_col">
					<a href="?action=course&id_nsp=<?php echo $product['id_danhmuc']; ?>&id_sp=<?php echo $product['id']; ?>">
						<div class="course">
							<div class="course_image"><img src="images/course<?php echo $product['hinh_anh']; ?>" alt=""></div>
							<div class="course_body">
								<h3 class="course_title"><a href="?action=course&id_nsp=<?php echo $product['id_danhmuc']; ?>&id_sp=<?php echo $product['id']; ?>"><?php echo $product['name_course']; ?></a></h3>
								<div class="course_teacher"><a href="?action=course&id_nsp=<?php echo $product['id_danhmuc']; ?>&id_sp=<?php echo $product['id']; ?>"><?php echo $teachers_name; ?></a></div>
								<div class="course_text">
									<p><?php echo $product['mo_ta_ngan_gon']; ?></p>
								</div>
							</div>
							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 đã mua</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5</span>
									</div>
									<div class="course_price ml-auto"><?= number_format($product['gia_khoa_hoc'], 0, ".", "."); ?> VNĐ</div>
								</div>
							</div>
						</div>
					</a>
				</div>

			<?php } ?>

		</div>
		<div class="row">
			<div class="col">
				<div class="courses_button trans_200"><a href="?action=courses&id_nsp=0">Xem thêm</a></div>
			</div>
		</div>
	</div>
</div>

<!-- Counter -->

<div class="counter">
	<div class="counter_background" style="background-image:url(images/counter_background.jpg)"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="counter_content">
					<h2 class="counter_title">Tham gia HTBDU</h2>
					<div class="counter_text">
						<p>HTBDU đã trở thành hệ thống giáo dục tiêu chuẩn của ngành kể từ những năm 2019, khi một nhà in không xác định lấy một dãy loại và xáo trộn nó để tạo ra một cuốn sách mẫu.</p>
					</div>

					<!-- Milestones -->

					<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">

						<!-- Milestone -->
						<div class="milestone">
							<div class="milestone_counter" data-end-value="3">0</div>
							<div class="milestone_text">Hình thành</div>
						</div>

						<!-- Milestone -->
						<div class="milestone">
							<div class="milestone_counter" data-end-value="120" data-sign-after="k">0</div>
							<div class="milestone_text">Học viên</div>
						</div>

						<!-- Milestone -->
						<div class="milestone">
							<div class="milestone_counter" data-end-value="670" data-sign-after="+">0</div>
							<div class="milestone_text">Khóa học</div>
						</div>

						<!-- Milestone -->
						<div class="milestone">
							<div class="milestone_counter" data-end-value="320">0</div>
							<div class="milestone_text">Đánh giá tích cực</div>
						</div>

					</div>
				</div>

			</div>
		</div>

		<!-- <div class="counter_form">
			<div class="row fill_height">
				<div class="col fill_height">
					<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">
						<div class="counter_form_title">Nhận tư vấn</div>
						<input type="text" class="counter_input" placeholder="Tên của bạn:" required="required">
						<input type="tel" class="counter_input" placeholder="SĐT:" required="required">
						<select name="counter_select" id="counter_select" class="counter_input counter_options">
							<option>Chuyên nghành của bạn</option>
							<option>Subject</option>
							<option>Subject</option>
							<option>Subject</option>
						</select>
						<textarea class="counter_input counter_text_input" placeholder="Mong muốn của bạn:" required="required"></textarea>
						<button type="submit" class="counter_form_button">Gửi</button>
					</form>
				</div>
			</div>
		</div> -->

	</div>
</div>

<!-- Events -->

<div class="events">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<h2 class="section_title">Thể loại đa dạng</h2>
					<div class="section_subtitle">
						<p>Bên cạnh sứ mệnh giảng dạy cho nhiều người thì chúng tôi còn có nhiều sự kiện nhằm tri ân khách hàng, các hoạt động cộng đồng cùng với đội ngũ của HTBDU</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row events_row">

			<!-- Event -->
			<div class="col-lg-3 event_col">
				<div class="event event_left">
					<div class="event_image"><img src="images/event_1.jpg" alt=""></div>
					<div class="event_body d-flex flex-row align-items-start justify-content-start">
						<div class="event_content">
							<div class="event_title"><a href="#">Kinh doanh</a></div>
							<div class="event_info_container">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Event -->
			<div class="col-lg-3 event_col">
				<div class="event event_mid">
					<div class="event_image"><img src="images/event_2.jpg" alt=""></div>
					<div class="event_body d-flex flex-row align-items-start justify-content-start">
						<div class="event_content">
							<div class="event_title"><a href="#">Nghệ thuật</a></div>
							<div class="event_info_container">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Event -->
			<div class="col-lg-3 event_col">
				<div class="event event_right">
					<div class="event_image"><img src="images/event_3.jpg" alt=""></div>
					<div class="event_body d-flex flex-row align-items-start justify-content-start">
						<div class="event_content">
							<div class="event_title"><a href="#">Ngoại ngữ</a></div>
							<div class="event_info_container">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 event_col">
				<div class="event event_right">
					<div class="event_image"><img src="images/event_3.jpg" alt=""></div>
					<div class="event_body d-flex flex-row align-items-start justify-content-start">
						<div class="event_content">
							<div class="event_title"><a href="#">Ký năng mềm</a></div>
							<div class="event_info_container">
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Giáo viên nổi bật -->

<div class="team">
	<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<h2 class="section_title">Giáo viên có thành tích nổi bật</h2>
					<div class="section_subtitle">
						<p>Những giáo viên có thành tích chuyên môn cao với những khóa học chất lượng giúp học viên có được nhiều hơn không chỉ là kiến thức</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row team_row">

			<!-- Team Item -->
			<?php foreach ($teachers as $teacher) { ?>
				<div class="col-lg-3 col-md-6 team_col">
					<a href="?action=tachers&id_tc=<?php echo $teacher['id']; ?>">
						<div class="team_item">
							<div class="team_image"><img src="images/teachers<?php echo $teacher['avatar']; ?>" alt=""></div>
							<div class="team_body">
								<div class="team_title"><a href="?action=tachers&id_tc=<?php echo $teacher['id']; ?>"><?php echo $teacher['name_gv']; ?></a></div>
								<div class="team_subtitle"><?php echo $teacher['major']; ?></div>
								<div class="social_list">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="false"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?php } ?>

		</div>
	</div>
</div>

<div class="newsletter">
	<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
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
	include 'inc/footer/ft_home.php';
	?>
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">