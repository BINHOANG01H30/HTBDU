<?php

use Google\Service\Classroom\Teacher;

include 'inc/header.php';
include 'Mailer/sendEmail.php';
?>
<!-- Home -->

<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.php">Trang chủ</a></li>
							<li>Khóa học</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Courses -->

<div class="courses">
	<div class="container">
		<div class="row">

			<!-- Courses Main Content -->
			<div class="col-lg-8">
				<div class="courses_search_container">
					<form method="post" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
						<input type="hidden" name="action" value="courses">
						<input type="search" name="tu_khoa" class="courses_search_input" placeholder="Tìm khóa học" required="required">
						<select id="courses_search_select" class="courses_search_select courses_search_input">
							<option>Tất cả khóa học</option>
							<?php foreach ($category_name as $ct_name) { ?>
								<option><?php echo $ct_name['name'] ?></option>
							<?php } ?>
						</select>
						<button action="submit" class="courses_search_button ml-auto">Tìm kiếm</button>
					</form>
				</div>
				<div class="courses_container">
					<div class="row courses_row">

						<!-- Course -->
						<?php foreach ($product_page as $product) { ?>
							<div class="col-lg-6 course_col">
								<div class="course">
									<a href="?action=course&id_nsp=<?php echo $product['id_danhmuc']; ?>&id_sp=<?php echo $product['id']; ?>">
										<div class="course_image"><img src="images/course<?php echo $product['hinh_anh'] ?>" alt=""></div>
										<div class="course_body">
											<h3 class="course_title"><a href="?action=course&id_nsp=<?php echo $product['id_danhmuc']; ?>&id_sp=<?php echo $product['id']; ?>"><?php echo $product['name_course']; ?></a></h3>
											<?php
											$teachers = get_giaovien_all($product['id']);
											?>
											<div class="course_teacher"><a href="">Giáo viên: <?php echo $teachers['name_gv']; ?></a></div>
											<div class="course_text">
												<p><?php echo $product['mo_ta_ngan_gon'] ?></p>
											</div>
										</div>
										<div class="course_footer">
											<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
												<div class="course_info">
													<i class="fa fa-graduation-cap" aria-hidden="true"></i>
													<span></span>
												</div>
												<div class="course_info">
													<i class="fa fa-star" aria-hidden="true"></i>
													<span>5</span>
												</div>
												<div class="course_price ml-auto"><span><?= number_format($product['gia_khoa_hoc'], 0, ".", "."); ?>đ</span><?= number_format($product['gia_canh_tranh'], 0, ".", "."); ?> VNĐ</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="row pagination_row">
						<div class="col">
							<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
								<ul class="pagination_list">
									<li class="active"><a href="?action=courses&id_nsp=<?php echo $_GET['id_nsp'] ?>&page=1&per_page=6">1</a></li>
									<li><a href="?action=courses&id_nsp=<?php echo $_GET['id_nsp'] ?>&page=2&per_page=6">2</a></li>
									<li><a href="?action=courses&id_nsp=<?php echo $_GET['id_nsp'] ?>&page=3&per_page=6">3</a></li>
									<li><a href="?action=courses&id_nsp=<?php echo $_GET['id_nsp'] ?>&page=4&per_page=6"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								</ul>
								<div class="courses_show_container ml-auto clearfix">
									<div class="courses_show_text">Hiển thị <span class="courses_showing">1-6</span> of <span class="courses_total">24</span> kết quả:</div>
									<div class="courses_show_content">
										<span>Hiển thị: </span>
										<select id="courses_show_select" class="courses_show_select">
											<option class="active"><a href="?action=courses&id_nsp=<?php echo $_GET['id_nsp'] ?>&page=1&per_page=6">06</a></option>
											<option><a href="?action=courses&id_nsp=<?php echo $_GET['id_nsp'] ?>&page=1&per_page=12">12</a></option>
											<option><a href="?action=courses&id_nsp=<?php echo $_GET['id_nsp'] ?>&page=1&per_page=24">24</a></option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Courses Sidebar -->
			<div class="col-lg-4">
				<div class="sidebar">

					<!-- Categories -->
					<div class="sidebar_section">
						<div class="sidebar_section_title">Danh mục</div>
						<div class="sidebar_categories">
							<ul>
								<?php foreach ($categories as $category) { ?>
									<li><a href="?action=courses&id_nsp=<?php echo $category['id'] ?>&page=1&per_page=6"><?php echo $category['name'] ?></a></li>
								<?php } ?>

							</ul>
						</div>
					</div>

					<!-- Khóa Học mới nhất -->

					<div class="sidebar_section">
						<div class="sidebar_section_title">Khóa học mới nhất</div>
						<div class="sidebar_latest">

							<?php foreach ($product_new as $sanphammoi) { ?>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image">
										<div><img src="images/course<?= $sanphammoi['hinh_anh'] ?>" alt=""></div>
									</div>
									<div class="latest_content">
										<div class="latest_title"><a href="?action=course&id_nsp=<?php echo $sanphammoi['id_danhmuc']; ?>&id_sp=<?php echo $sanphammoi['id']; ?>"><?= $sanphammoi['name_course'] ?></a></div>
										<div class="latest_price"><?= number_format($sanphammoi['gia_canh_tranh'], 0, ".", "."); ?> VNĐ</div>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>

					<!-- Gallery -->
					<div class="sidebar_section">
						<div class="sidebar_section_title">Instagram</div>
						<div class="sidebar_gallery">
							<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
								<li class="gallery_item">
									<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
									<a class="colorbox" href="images/gallery_1_large.jpg">
										<img src="images/gallery_1.jpg" alt="">
									</a>
								</li>
								<li class="gallery_item">
									<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
									<a class="colorbox" href="images/gallery_2_large.jpg">
										<img src="images/gallery_2.jpg" alt="">
									</a>
								</li>
								<li class="gallery_item">
									<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
									<a class="colorbox" href="images/gallery_3_large.jpg">
										<img src="images/gallery_3.jpg" alt="">
									</a>
								</li>
								<li class="gallery_item">
									<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
									<a class="colorbox" href="images/gallery_4_large.jpg">
										<img src="images/gallery_4.jpg" alt="">
									</a>
								</li>
								<li class="gallery_item">
									<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
									<a class="colorbox" href="images/gallery_5_large.jpg">
										<img src="images/gallery_5.jpg" alt="">
									</a>
								</li>
								<li class="gallery_item">
									<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
									<a class="colorbox" href="images/gallery_6_large.jpg">
										<img src="images/gallery_6.jpg" alt="">
									</a>
								</li>
							</ul>
						</div>
					</div>

					<!-- Tags -->
					<div class="sidebar_section">
						<div class="sidebar_section_title">Từ khóa</div>
						<div class="sidebar_tags">
							<ul class="tags_list">
								<li><a href="#">creative</a></li>
								<li><a href="#">unique</a></li>
								<li><a href="#">photography</a></li>
								<li><a href="#">ideas</a></li>
								<li><a href="#">wordpress</a></li>
								<li><a href="#">startup</a></li>
							</ul>
						</div>
					</div>

					<!-- Banner -->
					<div class="sidebar_section">
						<div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
							<div class="sidebar_banner_background" style="background-image:url(images/banner_1.jpg)"></div>
							<div class="sidebar_banner_overlay"></div>
							<div class="sidebar_banner_content">
								<div class="banner_title">Sách miễn phí</div>
								<div class="banner_button"><a href="#">tải ngay</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Newsletter -->

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
	include 'inc/footer/ft_courses.php';
	?>
	<link rel="stylesheet" type="text/css" href="styles/courses.css">
	<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">